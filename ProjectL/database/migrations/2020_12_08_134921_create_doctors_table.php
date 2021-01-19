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
        Schema::disableForeignKeyConstraints();
        Schema::create('doctors', function (Blueprint $table) {
            $table->string('Doctor_ID');
            $table->string('Specialization');
            $table->string('Doctor_Name');
            $table->string('Available_time_slot');
          
            $table->integer('No_of_Patients');
            $table->primary('Doctor_ID');
            $table->string('Docim')->nullable();
          
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
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
