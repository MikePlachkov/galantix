<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users-data', function (Blueprint $table) {
            $table->id('UID');
            $table->string('name');
            $table->integer('age');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('gender');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
//    public function down()
//    {
//        Schema::dropIfExists('users-data');
//    }
}
