<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
   public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('Amazon_Product_Link');
			$table->decimal('Amazon_Price');
			$table->text('Flipkart_Product_Link');
			$table->decimal('Flipkart_Price');
						
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop("products");
    }
}