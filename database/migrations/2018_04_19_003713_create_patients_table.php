<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id')->unique();

            $table->string('name', 25);
            $table->string('reference', 25);
            $table->string('last_name_pat', 25);
            $table->string('last_name_mat', 25);
            $table->string('email', 25);
            $table->string('run', 13)->unique();
            $table->string('prevision', 25);
            $table->string('address', 50);
            $table->string('job', 25);
            $table->string('phone', 25);
            $table->integer('age');
            $table->float('size', 25);
            $table->float('acept_size', 25);
            $table->string('t2', 25);
            $table->integer('imc_25');
            $table->string('sra',50)->nullable();

            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
