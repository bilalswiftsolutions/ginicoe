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
            maxlength: 256,
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
            maxlength: 256,
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
        },
        primary_mobile_number: {
            required: true,
        },
        neighborhood_race_right: {
            required: true,
        },
        name_of_neighborhood_household_head_right: {
            required: true,
        },
        neghborhood_guid_right: {
            required: true,
        },

        neighborhood_race_left: {
            required: true,
        },
        name_of_neighborhood_household_head_left: {
            required: true,
        },
        neghborhood_guid_left: {
            required: true,
        },

        neighborhood_race_back: {
            required: true,
        },
        name_of_neighborhood_household_head_back: {
            required: true,
        },
        neghborhood_guid_back: {
            required: true,
        },

        neighborhood_race_front: {
            required: true,
        },
        name_of_neighborhood_household_head_front: {
            required: true,
        },
        neghborhood_guid_front: {
            required: true,
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
        },
        labor_union_name: {
            required: false,
            maxlength: 16,
        },
        your_union_membership_number: {
            required: false,
            maxlength: 16,
        },


        charge_card_to_protect_1:{
            required: true,
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
            required: false,
            maxlength: 20
        },
        secondary_last_name_1:{
            required: false,
            maxlength:20,
        },
        secondary_mi_1:{
            required: false,
            maxlength:20,
        },
        secondary_card_holder_relationship_1:{
            required: false,
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
            required: false,
            maxlength: 20
        },
        secondary_last_name_3:{
            required: false,
            maxlength:20,
        },
        secondary_mi_3:{
            required: false,
            maxlength:20,
        },
        secondary_card_holder_relationship_3:{
            required: false,
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
            required: false,
            maxlength: 20
        },
        secondary_last_name_2:{
            required: false,
            maxlength:20,
        },
        secondary_mi_2:{
            required: false,
            maxlength:20,
        },
        secondary_card_holder_relationship_2:{
            required: false,
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
            required: false,
            maxlength: 20
        },
        secondary_last_name_5:{
            required: false,
            maxlength:20,
        },
        secondary_mi_5:{
            required: false,
            maxlength:20,
        },
        secondary_card_holder_relationship_5:{
            required: false,
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
            required: false,
            maxlength: 20
        },
        secondary_last_name_4:{
            required: false,
            maxlength:20,
        },
        secondary_mi_4:{
            required: false,
            maxlength:20,
        },
        secondary_card_holder_relationship_4:{
            required: false,
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
        },
        eyes_description:{
            required: true,
        },
        hair_description:{
            required: true,
        },
        mouth_description:{
            required: true,
        },
        hair_description:{
            required: true,
        },
        eyeware_prescription:{
            required: true,
        },
        
        dominant_hand_writing_side:{
            required:true,
        },
        are_you_twin:{
            required:true,
        },
        twin_type:{
            required:false,
        },

        twin_first_name:{
            required:false,
            maxlength: 20,
        },
        twin_mi :{
            required:false,
            maxlength:1,
        },

        twin_last_name:{
            required:false,
            maxlength:20,
        },
        twin_difference_description :{
            required:false,
            maxlength: 150,
        },
        birth_mark_located :{
            required:false,
        },

        twin_birth_mark_located:{
            required:false,
        },
        my_freckles_located :{
            required:false,
        },
        twin_freckles_located:{
            required:false,
        },
        my_moles_located :{
            required:false,
        },
        twin_moles_located :{
            required:false,
        },
        hair_are_different:{
            required:false,
        },
        my_eye_color :{
            required:false,
        },
        twin_eye_color:{
            required:false,
        },
        my_hair_color:{
            required:false,
        },
        twin_hair_color :{
            required:false,
        },
        facial_surgery_date:{
            required: false,
            maxlength:20,
        }




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