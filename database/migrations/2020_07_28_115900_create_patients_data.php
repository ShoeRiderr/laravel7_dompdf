<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('forname');
            $table->string('surname');
            $table->string('pesel');
            $table->string('streetRes');
            $table->string('buildNumRes');
            $table->string('apartNumRes');
            $table->string('cityRes');
            $table->string('provinceRes');
            $table->string('postCodeRes');
            $table->string('streetCor');
            $table->string('buildNumCor');
            $table->string('apartNumCor');
            $table->string('cityCor');
            $table->string('provinceCor');
            $table->string('postCodeCor');
            $table->string('phone');
            $table->string('email');
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
        Schema::dropIfExists('patients_data');
    }
}
