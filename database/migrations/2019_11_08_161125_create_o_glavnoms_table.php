<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOGlavnomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_glavnoms', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('position')->nullable();
          $table->string('title')->nullable();
          $table->string('preview')->nullable();
          $table->string('image')->nullable();
          $table->string('link')->nullable();
          $table->text('content')->nullable();
          $table->string('meta_title', 255)->nullable();
          $table->string('meta_description', 600)->nullable();
          $table->string('meta_keywords', 255)->nullable();
          $table->string('admin_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('o_glavnoms');
    }
}
