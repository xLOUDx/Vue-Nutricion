<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinnaclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binnacles', function (Blueprint $table) {
            $table->increments('id')->unique();

            $table->string('weight', 25);
            $table->string('imc', 25);
            $table->string('anxiety', 25);
            $table->string('exercise', 25);
            $table->string('digestion', 25);
            $table->string('liquids', 25);

            $table->string('size_t2', 25);
            $table->string('desired_weight', 25);
            $table->string('mg_normal', 25);
            $table->string('kg_km', 25);
            $table->string('projection_treatment', 50);

            $table->string('se', 25);
            $table->string('tri', 25);
            $table->string('bi', 25);
            $table->string('si', 25);
            $table->string('total', 25);
            $table->string('mg', 25);
            $table->string('waist', 25);
            $table->string('hip', 25);
            $table->string('thigh', 25);
            $table->string('braq', 25);
            $table->string('wrist', 25);

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
        Schema::dropIfExists('binnacles');
    }

}
