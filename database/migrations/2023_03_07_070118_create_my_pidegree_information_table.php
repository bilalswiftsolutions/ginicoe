<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyPidegreeInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_pidegree_information', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('consumer_id');
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('middle_initial',50);
            $table->string('suffix',50);
            $table->string('nick_name',50);
            $table->date('date_of_birth',50);
            $table->string('social_security_no',50);
            $table->string('cpn_no',50)->nullable();
            $table->boolean('us_vetran')->default(0);
            $table->boolean('consumer_presently_incarcerated')->default(0);
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
        Schema::dropIfExists('my_pidegree_information');
    }
}
