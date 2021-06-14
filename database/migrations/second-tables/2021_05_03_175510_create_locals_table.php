<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('name',40)->unique();
            $table->string('localidad',40);
            $table->string('sitioweb',40)->nullable();
            $table->integer('telefono');
            $table->string('calle',40);
            $table->string('edificio',40)->nullable();
            $table->integer('numero');
            $table->integer('codpostal');
            $table->mediumText('url',200);

            $table->foreignId('user_id');
            $table->foreignId('local_type_id');
            $table->foreignId('local_state_id');

            $table->timestamps();

            //foreings
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('local_type_id')->references('id')->on('locals_type');
            $table->foreign('local_state_id')->references('id')->on('locals_state');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locals');
    }
}
