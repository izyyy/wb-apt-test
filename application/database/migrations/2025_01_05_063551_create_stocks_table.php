<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('stocks', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('date');
        //     $table->string('last_change_date');
        //     $table->string('supplier_article')->unique();
        //     $table->string('tech_size');
        //     $table->string('barcode')->unique();
        //     $table->string('quantity');
        //     $table->string('is_supply');
        //     $table->string('is_realization');
        //     $table->string('quantity_full');
        //     $table->string('warehouse_name');
        //     $table->string('in_way_to_client');
        //     $table->string('in_way_from_client');
        //     $table->string('nm_id');
        //     $table->string('subject');
        //     $table->string('category');
        //     $table->string('brand');
        //     $table->string('sc_code');
        //     $table->string('price');
        //     $table->string('discount');
        //     $table->timestamps(); // created_at and updated_at
        // });

        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('last_change_date');
            $table->string('supplier_article');
            $table->string('tech_size');
            $table->string('barcode');
            $table->integer('quantity');
            $table->boolean('is_supply');
            $table->boolean('is_realization');
            $table->integer('quantity_full');
            $table->string('warehouse_name');
            $table->integer('in_way_to_client');
            $table->integer('in_way_from_client');
            $table->integer('nm_id');
            $table->string('subject');
            $table->string('category');
            $table->string('brand');
            $table->string('sc_code');
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 8, 2);
            $table->timestamps(); // created_at and updated_at
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
