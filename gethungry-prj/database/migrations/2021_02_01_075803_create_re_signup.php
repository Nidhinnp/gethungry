<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReSignup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('re_signup', function (Blueprint $table) {
            $table->id();
            $table->string('rname');
            $table->longText('address');
            $table->string('oname');
            $table->string('email');
            $table->Integer('lan');
            $table->Integer('contact');
            $table->string('password');
            $table->string('status');
            $table->string('file');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user');
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
        Schema::dropIfExists('re_signup');
    }
}
