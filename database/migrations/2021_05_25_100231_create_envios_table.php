<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto');
            $table->foreignId('origen')->nullable();
            $table->foreignId('destino')->nullable();

            $table->timestamps();

            $table->foreign('origen')->references('id')->on('localidades');
            $table->foreign('destino')->references('id')->on('localidades');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('envios');
    }
}
