<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 20);
            $table->string('password', 100);
            $table->string('name', 200);
            $table->string('tel', 20);
            $table->string('email', 100);
            $table->string('lineid', 100)->nullable(true);
            $table->string('address');       
            $table->string('district', 100);
            $table->string('province', 100);
            $table->string('postcode', 20);
            $table->tinyInteger('is_active')->default(1);
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
        Schema::dropIfExists('members');
    }
}
