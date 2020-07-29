<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProcessWithdraws extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_withdraws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('stk');
            $table->string('bank_name');
            $table->string('human_name');
            $table->bigInteger('cash_equivalents');
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
        //
    }
}
