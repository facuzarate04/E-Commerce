<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('descripcion',200)->nullable();
            $table->decimal('precio',6);
            
            $table->foreignId('local_id');
            $table->foreignId('producto_state_id');
            $table->foreignId('producto_type_id');
           

            $table->timestamps();

            //FOREINGS 

            $table->foreign('local_id')->references('id')->on('locals');
            $table->foreign('producto_state_id')->references('id')->on('productos_state');
            $table->foreign('producto_type_id')->references('id')->on('productos_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
