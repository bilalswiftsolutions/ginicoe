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
        house_no: {
            required: true,
            minlength: 1,
            maxlength: 8,
        },
        building_name: {
            required: true,
            minlength: 3,
            maxlength: 50,
        },
        apartment_no: {
            required: true,
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
            required: true,
            minlength: 4,
            maxlength: 30,
        },
        township: {
            required: true,
            minlength: 4,
            maxlength: 30,
        },
        parish: {
            required: true,
            minlength: 4,
            maxlength: 30,
        },
        village: {
            required: true,
            minlength: 4,
            maxlength: 30,
        },
        hamlet: {
            required: true,
            minlength: 4,
            maxlength: 30,
        },
        district: {
            required: true,
            minlength: 4,
            maxlength: 30,
        },
        county: {
            required: true,
            minlength: 4,
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
            minlength: 4,
            maxlength: 30,
        },

        building_name: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },

        no_of_floor: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },

        your_floor_no: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },

        apartment_no: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },
        room_no: {
            required: false,
            minlength: 4,
            maxlength: 30,
        },
        bed_no: {
            required: false,
            minlength: 4,
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
        primary_area_code: {
            required: true,
            minlength: 3,
            maxlength: 3,
        },
        alternate_area_code: {
            required: true,
            minlength: 3,
            maxlength: 3,
        },
        alternate_telephone_number: {
            required: true,
        },
        primary_mobile_number: {
            required: true,
        },
        neighborhood_race_right:{
            required: true,
        },
        name_of_neighborhood_household_head_right:{
            required: true,
        },
        neghborhood_guid_right:{
            required:true,
        }


        ,
        neighborhood_race_left:{
            required: true,
        },
        name_of_neighborhood_household_head_left:{
            required: true,
        },
        neghborhood_guid_left:{
            required:true,
        }

        ,
        neighborhood_race_back:{
            required: true,
        },
        name_of_neighborhood_household_head_back:{
            required: true,
        },
        neghborhood_guid_back:{
            required:true,
        }


        ,
        neighborhood_race_front:{
            required: true,
        },
        name_of_neighborhood_household_head_front:{
            required: true,
        },
        neghborhood_guid_front:{
            required:true,
        }
    },
    messages: {},
});

function move_to_next_step(nextWizardStep)
{
   
    var parentFieldset = $('#find_me_here_next_button').parents(".wizard-fieldset");
    var currentActiveStep = $('#find_me_here_next_button')
        .parents(".form-wizard")
        .find(".form-wizard-steps .active");
    var next = $('#find_me_here_next_button');
  
    if (nextWizardStep) {
        console.log('HELLO',next)
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
        console.log(progress_bar)
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
                if ($('#find_me_here_next_button').hasClass("show")) {
                    var formAtrr = $('#find_me_here_next_button').attr("data-tab-content");

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
}