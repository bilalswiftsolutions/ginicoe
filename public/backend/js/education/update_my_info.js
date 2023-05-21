$("#update_my_info_form").validate({
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

        first_name:{
            required:true,
            maxlength:10,
            
        },
        last_name:{
            required:true,
            maxlength:10,
        },
        email:{
            required:true,
            maxlength:35,
            noemail:true,
        },
        help_description:{
            required:true,
            maxlength:140,
        },
        country_code:{
            maxlength:3,
            required:true,
        },
        telephone_no:{
            maxlength:11,
            required:true,
        }
    },
    messages: {},
});