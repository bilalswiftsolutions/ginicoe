<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenderIdentityInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gender_identity_information', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('consumer_id');
            $table->string('sex_at_birth');
            $table->string('legal_sex');
            $table->string('self_identify_sex');
            
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
        Schema::dropIfExists('gender_identity_information');
    }
}
