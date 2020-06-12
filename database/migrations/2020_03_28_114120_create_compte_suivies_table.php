<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteSuiviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_suivies', function (Blueprint $table) {
            $table->increments('id');
            $table->double('valMoyMesure');//valeure moyenne des mesure
            $table->integer('suivieProfile_id')->unsigned();
            $table->foreign('suivieProfile_id')->references('id')->on('profiles');
            // $table->integer('mesure_id')->unsigned()->default(0);
            // $table->foreign('mesure_id')->references('id')->on('mesures');
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
        Schema::dropIfExists('_compte_suivies');
    }
}
