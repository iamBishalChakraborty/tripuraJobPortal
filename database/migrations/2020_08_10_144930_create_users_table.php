<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Transgender'])->nullable();
            $table->date('dob')->nullable();
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->enum('community', ['UR', 'OBC', 'SC', 'ST'])->nullable();
            $table->enum('user_type', ['user','employer', 'admin']);
            $table->unsignedBigInteger('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('address_2')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->string('city')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->integer('pincode')->nullable();
            $table->tinyInteger('active_status')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('state_id')->references('id')->on('states');
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
