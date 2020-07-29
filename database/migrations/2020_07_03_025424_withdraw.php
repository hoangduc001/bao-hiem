<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Withdraw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        //chua setup
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('amount');
            $table->longText('to');
            $table->date('date');
            $table->char('status');
            $table->longText('memo');
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
        Schema::dropIfExists('withdraws');
    }
}
