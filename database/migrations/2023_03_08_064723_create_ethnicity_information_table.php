<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEthnicityInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ethnicity_information', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('consumer_id');
            $table->string('race');
            $table->string('marital_status');
            $table->string('complexion');
            $table->string('weight');
            $table->string('height');            
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
        Schema::dropIfExists('ethnicity_information');
    }
}
