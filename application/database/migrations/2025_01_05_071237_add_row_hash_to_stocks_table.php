<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddRowHashToStocksTable extends Migration
{
    public function up()
    {
        Schema::table('stocks', function (Blueprint $table) {
            $table->string('row_hash')->nullable(); // Add the column first
        });

        // Populate `row_hash` with unique hashes for existing rows
        DB::table('stocks')->get()->each(function ($row) {
            $hash = hash('sha256', json_encode((array) $row)); // Generate a hash based on row content
            DB::table('stocks')->where('id', $row->id)->update(['row_hash' => $hash]);
        });

        // Enforce the unique constraint after populating the column
        Schema::table('stocks', function (Blueprint $table) {
            $table->unique('row_hash');
        });
    }

    public function down()
    {
        Schema::table('stocks', function (Blueprint $table) {
            $table->dropUnique(['row_hash']);
            $table->dropColumn('row_hash');
        });
    }
}
