<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');            
            $table->decimal('grand_total',8,2);
            $table->integer('member_id');
            $table->string('name', 200);
            $table->string('tel', 20);
            $table->string('email', 100);
            $table->string('lineid', 100)->nullable(true);
            $table->string('address');
            $table->string('district', 100);
            $table->string('province', 100);
            $table->string('postcode', 20);
            $table->enum('order_status', ['PENDING', 'PAID', 'SHIPPING', 'DELIVERED', 'REFUNDED', 'CANCEL']);	
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
        Schema::dropIfExists('orders');
    }
}

