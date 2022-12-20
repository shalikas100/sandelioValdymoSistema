<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('kodas');
            $table->integer('barkodas');
            $table->string('pavadinimas');
            $table->integer('likutis');
            $table->string('svoris');
            $table->integer('vnt_dezeje');
            $table->string('gamintojas');
            $table->string('prekes_tipas');
            $table->string('vieta_sandelyje');
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
        Schema::dropIfExists('products');
    }
}
