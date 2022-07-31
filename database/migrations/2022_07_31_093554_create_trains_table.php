<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 15);
            $table->string('Stazione_di_partenza', 20);
            $table->string('Stazione_di_arrivo', 20);
            $table->dateTime('Orario_di_partenza', 0);
            $table->dateTime('Orario_di_arrivo', 0);
            $table->integer('Codice_Treno');
            $table->integer('Numero_Carrozze');
            $table->boolean('In orario')->default(true);
            $table->boolean('Cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
}
