<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRowHashToIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incomes', function (Blueprint $table) {
            $table->string('row_hash')->nullable(); // Add the column first
        });

        // Populate `row_hash` with unique hashes for existing rows
        DB::table('incomes')->get()->each(function ($row) {
            $hash = hash('sha256', json_encode((array) $row)); // Generate a hash based on row content
            DB::table('incomes')->where('id', $row->id)->update(['row_hash' => $hash]);
        });

        // Enforce the unique constraint after populating the column
        Schema::table('incomes', function (Blueprint $table) {
            $table->unique('row_hash');
        });
    }

    public function down()
    {
        Schema::table('incomes', function (Blueprint $table) {
            $table->dropUnique(['row_hash']);
            $table->dropColumn('row_hash');
        });
    }
}
