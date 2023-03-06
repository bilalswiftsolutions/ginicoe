$.validator.addMethod(
    "zipcode",
    function (value) {
        return /^\d{5}$/.test(value);
    },
    "Zipcode is not valid"
);

$("#this_is_me_form").validate({
    errorPlacement: function (error, element) {
        error.appendTo(element.siblings("p"));
    },
    onkeyup: function (element) {
        var element_id = $(element).attr("id");
        if (this.settings?.rules[element_id]?.onkeyup !== false) {
            $(element).valid();
        }
    },
    rules: {
        fname: {
            required: true,
            minlength: 2,
            maxlength: 32,
            no_space: true,
        },
        lname: {
            required: true,
            minlength: 2,
            maxlength: 32,
            no_space: true,
        },
        middle_initial: {
            required: true,
            minlength: 1,
            maxlength: 1,
            no_space: true,
        },
        suffix: {
            required: true,
            minlength: 2,
            maxlength: 8,
            no_space: true,
        },
        email: {
            required: true,
            email: true,
            minlength: 8,
            maxlength: 32,
        },
        nick_name: {
            required: true,
            minlength: 8,
            maxlength: 32,
        },
        date_of_birth: {
            required: true,
            date: true,
            maxlength: 32,
        },
        social_security_no: {
            required: true,
            minlength: 11,
            maxlength: 11,
        },
        verify_social_security_no: {
            required: true,
            equalTo: "#social_security_no",
        },
        // Find me here form
        house_address: {
            required: true,
            minlength: 1,
            maxlength: 45,
        },
        building_name: {
            required: true,
            minlength: 3,
            maxlength: 50,
        },
        apartment_no: {
            required: false,
            minlength: 1,
            maxlength: 4,
        },
        street_name: {
            required: true,
            minlength: 5,
            maxlength: 50,
        },
        state: {
            required: true,
        },
        city: {
            required: true,
        },
        town: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },
        township: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },
        parish: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },
        village: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },
        hamlet: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },
        district: {
            required: true,
            minlength: 3,
            maxlength: 30,
        },
        county: {
            required: false,
            minlength: 3,
            maxlength: 30,
        },
        neighborhood_name: {
            required: true,
            minlength: 4,
            maxlength: 30,
        },

        zipcode: {
            required: true,
            minlength: 4,
            maxlength: 30,
        },

        urbanization_name: {
            required: true,
            minlength: 4,
            maxlength: 30,
        },

        house_type: {
            required: true,
        },

        house_number: {
            required: false,
            minlength: 1,
            maxlength: 30,
        },

        building_name: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },

        no_of_floor: {
       
            minlength: 1,
            maxlength: 30,
        },

        your_floor_no: {
          
            minlength: 1,
            maxlength: 30,
        },

        apartment_no: {
        
            minlength: 4,
            maxlength: 30,
        },
        room_no: {
           
            minlength: 1,
            maxlength: 30,
        },
        bed_no: {
           
            minlength: 1,
            maxlength: 30,
        },
        zipcode: {
            required: true,
            zipcode: true,
            
        },
        old_zipcode: {
            required: false,
            zipcode: true,
        },

        neighborhood_house_address_right:{
            maxlength: 30,
        },
        neighborhood_urbanization_name_right:{
            maxlength: 30,
        },
        neighborhood_zipcode_right:{
            zipcode: 30,
        },
        neighborhood_city_right :{
            maxlength: 30,
        },

        neighborhood_house_address_left:{
            maxlength: 30,
        },
        neighborhood_urbanization_name_left:{
            maxlength: 30,
        },
        neighborhood_zipcode_left:{
            zipcode: 30,
        },
        neighborhood_city_left :{
            maxlength: 30,
        },
       

        neighborhood_house_address_front:{
            maxlength: 30,
        },
        neighborhood_urbanization_name_front:{
            maxlength: 30,
        },
        neighborhood_zipcode_front:{
            zipcode: 30,
        },
        neighborhood_city_front :{
            maxlength: 30,
        },


        neighborhood_house_address_back:{
            maxlength: 30,
        },
        neighborhood_urbanization_name_back:{
            maxlength: 30,
        },
        neighborhood_zipcode_back:{
            zipcode: 30,
        },
        neighborhood_city_back :{
            maxlength: 30,
        },


        old_house_address: {
        
            minlength: 1,
            maxlength: 45,
        },
        old_building_name: {
  
            minlength: 3,
            maxlength: 50,
        },
        old_apartment_no: {
           
            minlength: 1,
            maxlength: 4,
        },
        old_street_name: {
         
            minlength: 5,
            maxlength: 32,
        },
        old_state: {
          
        },
        old_city: {
        
        },
        old_town: {
       
            minlength: 4,
            maxlength: 30,
        },
        old_township: {
        
            minlength: 4,
            maxlength: 30,
        },
        old_parish: {
           
            minlength: 4,
            maxlength: 30,
        },
        old_village: {
        
            minlength: 4,
            maxlength: 30,
        },
        old_hamlet: {
        
            minlength: 4,
            maxlength: 30,
        },
        old_district: {
          
            minlength: 3,
            maxlength: 30,
        },
        old_county: {
           
            minlength: 3,
            maxlength: 30,
        },
        old_neighborhood_name: {
         
            minlength: 4,
            maxlength: 30,
        },

       

        old_urbanization_name: {
          
            minlength: 4,
            maxlength: 30,
        },

        old_house_type: {
          
        },

        old_house_number: {
            
            minlength: 1,
            maxlength: 30,
        },

        old_building_name: {
           
            minlength: 4,
            maxlength: 30,
        },

        old_no_of_floor: {
       
            minlength: 1,
            maxlength: 30,
        },

        old_your_floor_no: {
          
            minlength: 1,
            maxlength: 30,
        },

        old_apartment_no: {
        
            minlength: 4,
            maxlength: 30,
        },
        old_room_no: {
           
            minlength: 1,
            maxlength: 30,
        },
        old_bed_no: {
           
            minlength: 1,
            maxlength: 30,
        },
       
        old_zipcode: {
            required: false,
            zipcode: true,
        },


        
        primary_area_code: {
            required: true,
            minlength: 2,
            maxlength: 3,
        },
        alternate_area_code: {
            required: true,
            minlength: 2,
            maxlength: 3,
        },
        alternate_telephone_number: {
            required: true,
            maxlength: 11,
        },
        primary_mobile_number: {
            required: true,
            maxlength: 11,
        },
        neighborhood_race_right: {
            required: true,
            maxlength: 32,
        },
        name_of_neighborhood_household_head_right: {
            required: true,
            maxlength: 32,
        },
        neghborhood_guid_right: {
            required: true,
            maxlength: 32,
        },

        neighborhood_race_left: {
            required: true,
            maxlength: 32,
        },
        name_of_neighborhood_household_head_left: {
            required: true,
            maxlength: 32,
        },
        neghborhood_guid_left: {
            required: true,
            maxlength: 32,
        },

        neighborhood_race_back: {
            required: true,
            maxlength: 32,
        },
        name_of_neighborhood_household_head_back: {
            required: true,
            maxlength: 32,
        },
        neghborhood_guid_back: {
            required: true,
            maxlength: 32,
        },

        neighborhood_race_front: {
            required: true,
            maxlength: 32,
        },
        name_of_neighborhood_household_head_front: {
            required: true,
            maxlength: 32,
        },
        neghborhood_guid_front: {
            required: true,
            maxlength: 32,
        },
        employer_name: {
            required: true,
            maxlength: 26,
        },
        job_title: {
            required: true,
            maxlength: 26,
        },
        employer_identification_number: {
            required: true,
            maxlength: 16,
        },
        anual_salary_last_year: {
            required: true,
            maxlength: 32,
        },
        labor_union_name: {
          
            maxlength: 16,

        },
        your_union_membership_number: {

            maxlength: 16,
        },


        charge_card_to_protect_1:{
            required: true,
            maxlength: 16,
        },
        card_number_1:{
            required:true,
            maxlength:16,
        },
        nickname_1:{
            required: true,
            maxlength:25,
        },
        primary_first_name_1:{
            required: true,
            maxlength:24,
        },
        primary_mi_1:{
            required: true,
            maxlength: 20,
        },
        primary_last_name_1:{
            required: true,
            maxlength: 20,
        },
        secondary_first_name_1:{
      
            maxlength: 20
        },
        secondary_last_name_1:{
          
            maxlength:20,
        },
        secondary_mi_1:{
        
            maxlength:20,
        },
        secondary_card_holder_relationship_1:{
            
        },
        name_of_bank_1:{
            required: true,
            maxlength: true,
        },
        expiry_date_1:{
            required: true,
            maxlength:20,
        },

        charge_card_to_protect_3:{
            required: true,
            maxlength: 16,
        },
        card_number_3:{
            required:true,
            maxlength:16,
        },
        nickname_3:{
            required: true,
            maxlength:25,
        },
        primary_first_name_3:{
            required: true,
            maxlength:24,
        },
        primary_mi_3:{
            required: true,
            maxlength: 20,
        },
        primary_last_name_3:{
            required: true,
            maxlength: 20,
        },
        secondary_first_name_3:{
           
            maxlength: 20
        },
        secondary_last_name_3:{
        
            maxlength:20,
        },
        secondary_mi_3:{
            
            maxlength:20,
        },
        secondary_card_holder_relationship_3:{
        
        },
        name_of_bank_3:{
            required: true,
            maxlength: true,
        },
        expiry_date_3:{
            required: true,
            maxlength:20,
        },


        charge_card_to_protect_2:{
            required: true,
        },
        card_number_2:{
            required:true,
            maxlength:16,
        },
        nickname_2:{
            required: true,
            maxlength:25,
        },
        primary_first_name_2:{
            required: true,
            maxlength:24,
        },
        primary_mi_2:{
            required: true,
            maxlength: 20,
        },
        primary_last_name_2:{
            required: true,
            maxlength: 20,
        },
        secondary_first_name_2:{
          
            maxlength: 20
        },
        secondary_last_name_2:{
        
            maxlength:20,
        },
        secondary_mi_2:{
        
            maxlength:20,
        },
        secondary_card_holder_relationship_2:{
          
        },
        name_of_bank_2:{
            required: true,
            maxlength: true,
        },
        expiry_date_2:{
            required: true,
            maxlength:20,
        },

        charge_card_to_protect_5:{
            required: true,
            maxlength: 16,
        },
        card_number_5:{
            required:true,
            maxlength:16,
        },
        nickname_5:{
            required: true,
            maxlength:25,
        },
        primary_first_name_5:{
            required: true,
            maxlength:24,
        },
        primary_mi_5:{
            required: true,
            maxlength: 20,
        },
        primary_last_name_5:{
            required: true,
            maxlength: 20,
        },
        secondary_first_name_5:{
           
            maxlength: 20
        },
        secondary_last_name_5:{
       
            maxlength:20,
        },
        secondary_mi_5:{
          
            maxlength:20,
        },
        secondary_card_holder_relationship_5:{
      
        },
        name_of_bank_5:{
            required: true,
            maxlength: true,
        },
        expiry_date_5:{
            required: true,
            maxlength:20,
        },



        charge_card_to_protect_4:{
            required: true,
            maxlength: 16,
        },
        card_number_4:{
            required:true,
            maxlength:16,
        },
        nickname_4:{
            required: true,
            maxlength:25,
        },
        primary_first_name_4:{
            required: true,
            maxlength:24,
        },
        primary_mi_4:{
            required: true,
            maxlength: 20,
        },
        primary_last_name_4:{
            required: true,
            maxlength: 20,
        },
        secondary_first_name_4:{
           
            maxlength: 20
        },
        secondary_last_name_4:{
           
            maxlength:20,
        },
        secondary_mi_4:{
           
            maxlength:20,
        },
        secondary_card_holder_relationship_4:{
         
        },
        name_of_bank_4:{
            required: true,
            maxlength: true,
        },
        expiry_date_4:{
            required: true,
            maxlength:20,
        },
        chin_description:{
            required: true,
            maxlength: 50,
        },
        eyes_description:{
            required: true,
            maxlength: 50,

        },
        hair_description:{
            required: true,
            maxlength: 50,

        },
        mouth_description:{
            required: true,
            maxlength: 50,

        },
        hair_description:{
            required: true,
            maxlength: 50,

        },
        eyeware_prescription:{
            required: true,
            maxlength: 50,

        },
        
        dominant_hand_writing_side:{
            required:true,
            maxlength: 50,

        },
        are_you_twin:{
            required:true,
            maxlength: 50,

        },
        twin_type:{
            required:false,
            maxlength: 50,

        },

        twin_first_name:{
         required: true,
            maxlength: 20,
        },
        twin_mi :{
            
            maxlength:1,
        },

        twin_last_name:{
           
            maxlength:20,
        },
        twin_difference_description :{
          
            maxlength: 150,
        },
        birth_mark_located :{
            maxlength:20,
           
        },

        twin_birth_mark_located:{
            maxlength:20,
        
        },
        my_freckles_located :{
            maxlength:20,
           
        },
        twin_freckles_located:{
            maxlength:20,
           
        },
        my_moles_located :{
            maxlength:20,
       
        },
        twin_moles_located :{
            maxlength:20,
      
        },
        hair_are_different:{
            maxlength:20,
       
        },
        my_eye_color :{
            maxlength:20,
         
        },
        twin_eye_color:{
            maxlength:20,
         
        },
        my_hair_color:{
            maxlength:20,
           
        },
        twin_hair_color :{
            maxlength:20,
           
        },
        facial_surgery_date:{
          
            maxlength:20,
        },
    

        medical_house_address:{
            required: true,
            maxlength: 26,
        },

        medical_street:{
            required: true,
            maxlength: 26,
        },

        medical_country:{
            required: false,
            maxlength: 26,
        },
        medical_zipcode:{
            required: true,
            maxlength: 26,
        },
        medical_guid:{
            required: true,
            maxlength: 26,
        },
        number_of_brother :{
            required: false,
            maxlength: 26,  
        },
        olders_brother_name:{
            required: false,
            maxlength: 26,  
        },
        number_of_sister:{
            required: false,
            maxlength: 26,  
        },
        youngest_sister_name :{
            required: false,
            maxlength: 26,  
        },

        name_of_hospital_you_born_in:{
            required: false,
            maxlength: 26,  
        },
        place_of_birth:{
           
            maxlength: 26,  
       
        },
        name_of_mid_wife:{
            required: false,
            maxlength: 26,  
        },
         
        last_name_of_mid_wife:{
            required: false,
            maxlength: 26,  
        } ,
        exact_location_of_first_reponder:{
            required: false,
            maxlength: 26,  
        },
        first_name_of_mid_wife:{
            required: false,
            maxlength: 26,  
        },
        address_description:{
            required: false,
            maxlength: 26,  
        },

        birth_house_address:{
            maxlength: 26,  
        },
        birth_street:{
            maxlength: 26,  
        },

        birth_country:{
            maxlength: 26,  
        },
        birth_city:{
            required: false,
             
        },
        birth_zipcode:{
            maxlength: 26,  
        },

        birth_address_description:{
            maxlength: 26,  
        },
        your_age:{
            maxlength: 26,  
        },
        alien_id_number :{
        maxlength: 26,
      },
      country_of_issuance_foriegn_country :{
        maxlength: 26,
      },
      foreign_passport_number:{
        maxlength: 26,
      },

      passport_number:{
        maxlength: 26,
      },

      country_of_issuance_foreign_passport :{
        maxlength: 26,
      },

      visa_number:{
        maxlength: 26,
      },

      us_permit :{
        maxlength: 26,
      },

      us_govt_id_number :{
        maxlength: 26,
      },
      us_driving_license_number:{
        
        maxlength: 26,
      },

      us_state:{
      
        maxlength: 26,
      },

      foreign_country_driving_license_number:{
      
        maxlength: 26,
      },

      foreign_dl_number :{
    
        maxlength: 26,
      },

      foreign_id_number:{
        
        maxlength: 26,
      },

      us_education_doc :{
        
        maxlength: 26,
      },

      witsec :{
     
        maxlength: 26,
      },

      old_first_name :{
      
        maxlength: 26,
      },

      old_last_name :{
  
        maxlength: 26,
      },

      old_mi :{
      
        maxlength: 1,
      },

      old_spouse_first_name :{
     
        maxlength: 26,
      },
      old_spouse_mi :{
      
        maxlength: 1,
      },

      old_first_name_1st_daughter :{
      
        maxlength: 26,
      },

      old_last_name_1st_daughter :{
    
        maxlength: 26,
      },
      old_mi_1st_daughter :{
   
        maxlength: 1,
      },

      

      old_first_name_2nd_daughter :{
      
        maxlength: 26,
      },

      old_last_name_2nd_daughter :{
    
        maxlength: 26,
      },
      old_mi_2nd_daughter :{
   
        maxlength: 1,
      },


      old_first_name_2nd_son :{
      
        maxlength: 26,
      },

      old_last_name_2nd_son :{
    
        maxlength: 26,
      },
      old_mi_2nd_son :{
   
        maxlength: 1,
      },

      
      old_first_name_1st_son :{
      
        maxlength: 26,
      },

      old_last_name_1st_son :{
    
        maxlength: 26,
      },
      old_mi_1st_son :{
   
        maxlength: 1,
      },

      facial_neck_scars_description_div:{
         maxlength:50,
      },

      facial_surgery_date:{
        maxlength:50,
     },

     number_of_plastic_surgery :{
        maxlength:50,
     },

     plastic_surgeon_name:{
        maxlength:50,
     },
     first_name_of_surgeon:{
        maxlength:50,
     },
     last_name_of_surgeon :{
        maxlength:50,
     }, 
     
     surgeon_house_address:{
        maxlength:50,
     },
     surgeon_street:{
        maxlength:50,
     },
     surgeon_zipcode :{
        zipcode: true,
     },

     surgeon_telephone:{
        maxlength:11,
     },




    },
    messages: {},
});

function move_to_next_step(nextWizardStep,bar_id,next_bar_id) {
    var parentFieldset = $("#find_me_here_next_button").parents(
        ".wizard-fieldset"
    );
    var currentActiveStep = $("#find_me_here_next_button")
        .parents(".form-wizard")
        .find(".form-wizard-steps .active");
    var next = $("#find_me_here_next_button");

    if (nextWizardStep) {
        console.log("HELLO", next);
        next.parents(".wizard-fieldset").removeClass("show", "400");
        currentActiveStep
            .removeClass("active")
            .addClass("activated")
            .next()
            .addClass("active", "400");
        next.parents(".wizard-fieldset")
            .next(".wizard-fieldset")
            .addClass("show", "400");
        parentFieldset.hide();

        next.parents(".wizard-fieldset").next(".wizard-fieldset").show();

        progress_bar = progress_bar + 5.9;
        console.log(progress_bar);
        let text = next
            .parents(".wizard-fieldset")
            .next(".wizard-fieldset")
            .find("h5")
            .text();
        console.log(text);
        $(".progress-bar")
            .css("width", progress_bar + "%")
            .text(text);
        jQuery(document)
            .find(".wizard-fieldset")
            .each(function () {
                if ($("#find_me_here_next_button").hasClass("show")) {
                    var formAtrr = $("#find_me_here_next_button").attr(
                        "data-tab-content"
                    );

                    // jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                    // 	if(jQuery(this).attr('data-attr') == formAtrr){
                    // 		jQuery(this).addClass('active');
                    // 		var innerWidth = jQuery(this).innerWidth();
                    // 		var position = jQuery(this).position();
                    // 		jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                    // 	}else{
                    // 		jQuery(this).removeClass('active');
                    // 	}
                    // });
                }
            });
    }

    if (nextWizardStep) {
        $(`#${bar_id}`).addClass("completed");
        $(`#${bar_id}`).children("div").eq(0).addClass("text-white");
        $(`#${bar_id}`).removeClass("active");
        $(`#${next_bar_id}`).addClass("active");
    }
}


function previousStep(current_bar,previous_bar)
{
    
        $(`#${previous_bar}`).removeClass("completed");
        $(`#${previous_bar}`).children("div").eq(0).removeClass("text-white");
        $(`#${previous_bar}`).addClass("active");
        $(`#${current_bar}`).removeClass("active");
    
}