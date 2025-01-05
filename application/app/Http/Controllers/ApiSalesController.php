<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class ApiSalesController extends Controller
{

    public function fetchAndStore(Request $request)
    {
        // Retrieve the API key
        $apiKey = config('api.stocks_api_key');
//
        // Get the parameters from the request, default to 1 if not provided
        $page = $request->get('page', 1);
        $limit = $request->get('limit', 100);
        $dateFrom = $request->get('dateFrom', "2025-01-05");
        $dateTo = $request->get('dateTo', "2025-01-05");

        // Define the API URL and parameters
        $apiUrl = "http://89.108.115.241:6969/api/sales";
        $parameters = [
            "dateFrom" => $dateFrom,
            "dateTo" => $dateTo,
            "page" => $page,
            "key" => $apiKey,
            "limit" => $limit,
        ];

        try {
            // Make the GET request
            $response = Http::get($apiUrl, $parameters);

            Log::info('Raw API Response Body:', ['body' => $response->body()]);

            // Check if the request was successful
            if ($response->successful()) {
                $responseData = $response->json(); // Get the full response
                Log::info('API Response Full Data:', $responseData);

                // $data = $responseData['response']['data'] ?? []; // Extract the 'data' array
                $data = $responseData['data'] ?? []; // Extract the 'data' array

                // Log the response for debugging
                Log::info('API Response Data:', ['data' => $data]);

                // Insert the data into the database
                if (is_array($data)) {
                    $createdSales = [];

                    foreach ($data as $saleData) {
                        // Ensure saleData is an array
                        if (is_array($saleData)) {
                            // Generate a unique hash for the row
                            $saleData['row_hash'] = md5(json_encode($saleData));
                    
                            // Insert or ignore if hash already exists
                            DB::table('sales')->insertOrIgnore($saleData);
                            $createdSales[] = $saleData;
                        }
                    }

                    // Return all created records as a response
                    return response()->json($createdSales, 201);
                } else {
                    return response()->json(['error' => 'Invalid data format in API response'], 500);
                }
            } else {
                Log::error('API Request Failed', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                return response()->json(['error' => 'Failed to fetch data from API'], $response->status());
            }
        } catch (\Exception $e) {
            // Log any exceptions
            Log::error('Error during API call', ['exception' => $e->getMessage()]);
            return response()->json(['error' => 'An error occurred during the API call'], 500);
        }
    }

    public function create(Request $request) {

            // Get all input data
            $data = $request->all();

            // Check if the data is an array
            if (is_array($data)) {
                $createdSales = [];

                // Loop through each item and create a record
                foreach ($data as $saleData) {
                    if (is_array($saleData)) {
                        // Generate a unique hash for the row
                        $saleData['row_hash'] = md5(json_encode($saleData));
                
                        // Insert or ignore if hash already exists. This prevents row duplicate
                        DB::table('sales')->insertOrIgnore($saleData);
                        $createdSales[] = $saleData;
                    }
                }

                // Return all created records
                return response()->json($createdSales, 201);
            }
    }


    public function list(Request $request)
    {
        $sales = new Sales();

        // Example: Filter sales within a date range
        $dateFrom = $request->query('dateFrom', now()->subDays(30)->toDateString()); // Default to the last 30 days if no date_from is provided
        $dateTo = $request->query('dateTo', now()->toDateString()); // Default to the current date if no date_to is provided
        // Fetching the per_page parameter for pagination
        $perPage = $request->query('per_page', 20); // Default to 15 if no per_page is provided

        // Fetching data with filters and pagination
        $sales = $sales::whereBetween('date', [$dateFrom, $dateTo])
                        ->paginate($perPage); // Change 15 to your desired items per page

        return response()->json($sales);
    }


    public function search(Request $request) {
        $nm_id = $request->query('nm_id'); // Retrieve 'nm_id' from query string
        return Sales::where('nm_id', 'like', '%'.$nm_id.'%')->get();
    }
    
}
