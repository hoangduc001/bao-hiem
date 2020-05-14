<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('first_name');
            $table->tinyInteger('gender')->default(0);
            $table->string('avatar_url')->nullable();
            $table->tinyInteger('role')->default(0);
            $table->string('phone_number');
            $table->date('date_of_birth')->nullable();
            $table->tinyInteger('level')->default(0);
            $table->string('KYC_identification_front')->nullable();
            $table->string('KYC_identification_back')->nullable();
            $table->string('KYC_level_front')->nullable();
            $table->string('KYC_level_back')->nullable();
            $table->integer('balance')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('status')->default(0);
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
