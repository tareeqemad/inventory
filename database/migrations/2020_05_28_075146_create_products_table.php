<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->string('serial');
            $table->boolean('status')->default(1);
            $table->integer('brand_id')->nullable()->unsigned();
            $table->integer('manufacture_id')->nullable()->unsigned();
            $table->integer('category_id')->nullable()->unsigned();
            $table->integer('description_id')->nullable()->unsigned();
            $table->integer('location_id')->nullable()->unsigned();
           /* $table->foreign('brand_id')->references('id')->on('brands');*/

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
