<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table){
        $table->id();
        $table->string('first_name', 20);
        $table->string('last_name',20);
        $table->string('email');
        $table->integer('age');
        $table->string('city');
        $table->string('state');
        $table->integer('pincode');
        $table->timestamps('created')->useCurrent();
        $table->timestamps('updated_at')->useCurrent();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
