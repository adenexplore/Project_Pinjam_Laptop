<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagepinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagepinjams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('region');
            $table->string('purproses');
            $table->string('ket');
            $table->string('date');
            $table->string('return_date');
            $table->string('teacher');
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
        Schema::dropIfExists('pagepinjams');
    }
}
