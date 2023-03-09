<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyNeighborhoodInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_neighborhood_information', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('consumer_id');
            $table->string('neighborhood_race_right');
            $table->string('name_of_neighborhood_household_head_right');
            $table->string('neighborhood_guid_right');
            $table->boolean('provide_neigborhood_address_right')->default(0);
            $table->string('neighborhood_house_address_right');
            $table->string('neighborhood_urbanization_name_right');
            $table->string('neighborhood_zipcode_right');
            $table->string('neighborhood_state_right');
            $table->string('neighborhood_city_right');

            $table->string('neighborhood_race_left');
            $table->string('name_of_neighborhood_household_head_left');
            $table->string('neighborhood_guid_left');
            $table->boolean('provide_neigborhood_address_left')->default(0);
            $table->string('neighborhood_house_address_left');
            $table->string('neighborhood_urbanization_name_left');
            $table->string('neighborhood_zipcode_left');
            $table->string('neighborhood_state_left');
            $table->string('neighborhood_city_left');


            $table->string('neighborhood_race_front');
            $table->string('name_of_neighborhood_household_head_front');
            $table->string('neighborhood_guid_front');
            $table->boolean('provide_neigborhood_address_front')->default(0);
            $table->string('neighborhood_house_address_front');
            $table->string('neighborhood_urbanization_name_front');
            $table->string('neighborhood_zipcode_front');
            $table->string('neighborhood_state_front');
            $table->string('neighborhood_city_front');


            $table->string('neighborhood_race_back');
            $table->string('name_of_neighborhood_household_head_back');
            $table->string('neighborhood_guid_back');
            $table->boolean('provide_neigborhood_address_back')->default(0);
            $table->string('neighborhood_house_address_back');
            $table->string('neighborhood_urbanization_name_back');
            $table->string('neighborhood_zipcode_back');
            $table->string('neighborhood_state_back');
            $table->string('neighborhood_city_back');
           
            
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
        Schema::dropIfExists('my_neighborhood_information');
    }
}
