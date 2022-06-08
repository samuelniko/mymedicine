<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('generic_name',100);
            $table->string('form',400);
            $table->string('restriction_formula',100);
            $table->string('description',300);
            $table->integer('faskes_tk1');
            $table->integer('faskes_tk2');
            $table->integer('faskes_tk3');
            $table->integer('price');
            $table->string('img',300);
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
        Schema::dropIfExists('medicines');
    }
}
