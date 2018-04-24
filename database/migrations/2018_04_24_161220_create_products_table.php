<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('barcode', 100)->nullable(true);
            $table->string('name', 200);
            $table->string('brand', 100)->nullable(true);
            $table->decimal('price', 8, 2);
            $table->decimal('quantity', 8, 2);
            $table->string('image')->nullable(true);
            $table->text('detail')->nullable(true);
            $table->tinyInteger('is_active')->default(1);
            $table->integer('category_id');
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
