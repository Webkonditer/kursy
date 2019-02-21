<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('sp_name');
            $table->string('name');
            $table->string('show_name');
            $table->string('phone');
            $table->string('show_phone');
            $table->string('skype');
            $table->string('show_skype');
            $table->string('photo');
            $table->string('city');
            $table->string('in_year');
            $table->string('sp_master');
            $table->string('about_me');
            $table->string('soc_service');
            $table->string('sp_service');
            $table->string('core_service');
            $table->string('diplomas');
            $table->string('portfolio');
            $table->string('recommendation');
            $table->string('specialization');
            $table->string('rating')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
