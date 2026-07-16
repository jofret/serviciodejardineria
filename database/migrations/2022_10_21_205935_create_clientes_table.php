<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->enum('gender',['Masculino','Femenino']);
            $table->string('name');
            $table->string('email');
            $table->string('profession');
            $table->integer('day');
            $table->integer('month');
            $table->text('body');
            $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT');
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
        Schema::dropIfExists('clientes');
    }
}
