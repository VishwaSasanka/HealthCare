<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->string('Doctor_ID');
            $table->string('Specialization');
            $table->string('Doctor_Name');
            $table->string('Available_time_slot');
            $table->string('Period_ID');
            $table->integer('No_of_Patients');
            $table->primary('Doctor_ID');
            $table->string('Docim')->nullable();
            $table->foreign('Period_ID')->references('Period_ID')->on('periods');
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
        Schema::dropIfExists('doctors');
    }
}
