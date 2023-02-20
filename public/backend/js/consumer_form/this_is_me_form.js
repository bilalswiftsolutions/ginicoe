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
        lname:{
            required: true,
            minlength: 2,
            maxlength: 32,
            no_space: true,
        },
        middle_initial:{
            required: true,
            minlength: 1,
            maxlength: 1,
            no_space: true,
        },
        suffix:{
            required: true,
            minlength: 2,
            maxlength: 8,
            no_space: true,
        },
        email:{
            required: true,
            email: true,
            minlength: 8,
            maxlength: 32,
        },
        nick_name:{
            required: true,
            minlength: 8,
            maxlength: 32,
        },
        date_of_birth:{
            required: true,
            date: true,
        },
        social_security_no:{
            required: true,
            minlength: 11,
            maxlength:11,
        },
        verify_social_security_no:{
            required: true,
            equalTo:"#social_security_no"
        },
     
    },
    messages: {},
});