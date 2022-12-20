<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('im_kodas');
            $table->string('klientas');
            $table->string('prisijungimo_vardas');
            $table->string('adresas');
            $table->string('miestas');
            $table->string('pasto_kodas');
            $table->string('telefonas');
            $table->string('el_pastas');
            $table->string('slaptazodis');
            $table->string('pakartoti_slaptazodi');
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
        Schema::dropIfExists('registrations');
    }
}
