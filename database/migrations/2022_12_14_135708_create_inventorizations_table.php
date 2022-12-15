<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventorizations', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('kodas');
            $table->integer('likutis');
            $table->integer('suskaiciuotas_likutis');
            $table->integer('skirtumas');
            $table->string('gamintojas');
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
        Schema::dropIfExists('inventorizations');
    }
}
