<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenciaturasMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenciatura_materia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('licenciatura_id')->unsigned();
            $table->integer('materia_id')->unsigned();

            $table->foreign('licenciatura_id')->references('id')->on('licenciaturas')->onDelete('cascade');
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('licenciatura_materia')->insert([

            //Materias de ing en sistemas computacionales 
            ['licenciatura_id' => '4','materia_id' => '1'],
            ['licenciatura_id' => '4','materia_id' => '2'],
            ['licenciatura_id' => '4','materia_id' => '3'],
            ['licenciatura_id' => '4','materia_id' => '4'],
            ['licenciatura_id' => '4','materia_id' => '5'],
            ['licenciatura_id' => '4','materia_id' => '6'],
            ['licenciatura_id' => '4','materia_id' => '7'],
            ['licenciatura_id' => '4','materia_id' => '8'],
            ['licenciatura_id' => '4','materia_id' => '9'],
            ['licenciatura_id' => '4','materia_id' => '10'],
            ['licenciatura_id' => '4','materia_id' => '11'],
            ['licenciatura_id' => '4','materia_id' => '12'],
            ['licenciatura_id' => '4','materia_id' => '13'],
            ['licenciatura_id' => '4','materia_id' => '14'],
            ['licenciatura_id' => '4','materia_id' => '15'],
            ['licenciatura_id' => '4','materia_id' => '16'],
            ['licenciatura_id' => '4','materia_id' => '17'],
            ['licenciatura_id' => '4','materia_id' => '18'],
            ['licenciatura_id' => '4','materia_id' => '19'],
            ['licenciatura_id' => '4','materia_id' => '20'],
            ['licenciatura_id' => '4','materia_id' => '21'],
            ['licenciatura_id' => '4','materia_id' => '22'],
            ['licenciatura_id' => '4','materia_id' => '23'],
            ['licenciatura_id' => '4','materia_id' => '24'],
            ['licenciatura_id' => '4','materia_id' => '25'],
            ['licenciatura_id' => '4','materia_id' => '26'],
            ['licenciatura_id' => '4','materia_id' => '27'],
            ['licenciatura_id' => '4','materia_id' => '28'],
            ['licenciatura_id' => '4','materia_id' => '29'],
            ['licenciatura_id' => '4','materia_id' => '30'],
            ['licenciatura_id' => '4','materia_id' => '31'],
            ['licenciatura_id' => '4','materia_id' => '32'],
            ['licenciatura_id' => '4','materia_id' => '33'],
            ['licenciatura_id' => '4','materia_id' => '34'],
            ['licenciatura_id' => '4','materia_id' => '35'],
            ['licenciatura_id' => '4','materia_id' => '36'],
            ['licenciatura_id' => '4','materia_id' => '37'],
            ['licenciatura_id' => '4','materia_id' => '38'],
            ['licenciatura_id' => '4','materia_id' => '39'],
            ['licenciatura_id' => '4','materia_id' => '40'],
            ['licenciatura_id' => '4','materia_id' => '41'],
            ['licenciatura_id' => '4','materia_id' => '42'],
            ['licenciatura_id' => '4','materia_id' => '43'],
            ['licenciatura_id' => '4','materia_id' => '44'],
            ['licenciatura_id' => '4','materia_id' => '45'],
            ['licenciatura_id' => '4','materia_id' => '46']
        // Fin de las materias de la licenciatura ingenieria en sistemas computacionales
        ]);    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licenciaturas_materias');
    }
}
