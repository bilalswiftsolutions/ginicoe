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
            required: true,
            zipcode: true,
        },
        area_code: {
            required: true,
            minlength: 3,
            maxlength: 3,
        },
        alternate_area_code: {
            required: true,
            minlength: 3,
            maxlength: 3,
        },
        alternate_mobile_number: {
            required: true,
        },
        mobile_number: {
            required: true,
        },
    },
    messages: {},
});
