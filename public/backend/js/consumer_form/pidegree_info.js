var nextWizardStep = false;

function check_cpn_usage() {
    if ($("input[name='cpn_usage']:checked").val() == "1") {
        $("#cpn_no_div").show();
        $("#cpn_no").mask("000-00-0000");
        $("#cpn_no").prop("required", true);
    } else {
        $("#cpn_no_div").hide();
        $("#cpn_no").unmask();
        $("#cpn_no").val('');
        $("#cpn_no").prop("required", false);
    }
}

$("#social_security_no").mask("000-00-0000");
$("#verify_social_security_no").mask("000-00-0000");

function checkFieldSetPidegree() {
    if ($("#fieldset_one").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;
    var data = {};
    $("#fieldset_one input").each(function () {
        if ($(this).attr("type") == "radio") {
            console.log('input[name="' + $(this).attr("name") + '"]:checked')
            data[$(this).attr("name")] = document.querySelector(
                'input[name="' + $(this).attr("name") + '"]:checked'
            ).value;
         
        }
        if ($(this).attr("type") == "checkbox") {
            data[$(this).attr("name")] = $(this).is(":checked") ? 1 : 0;
        } if($(this).attr("type") != "radio" && $(this).attr("type") != "checkbox") {
            data[$(this).attr("name")] = $(this).val();
        }
    });
    $("#fieldset_one select").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    $("#fieldset_one textarea").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    data['form_section'] = 'my_pidegree_info';
    
    if (nextWizardStep) {
    store_this_is_me_form_data(data,'my_pidegree_info_button');
    }

    if (nextWizardStep) {
        $("#pedigree_bar").addClass("completed");
        $("#pedigree_bar").children("div").eq(0).addClass("text-white");
        $("#pedigree_bar").removeClass("active");
        $("#find_me_here_bar").addClass("active");
    }
}



function verifySSN(){

    let social_security_no = $('#social_security_no').val();


    if(social_security_no.length >= 11){
        const settings = {
            "async": true,
            "crossDomain": true,
            "url": `https://ssn_validator.p.rapidapi.com/result/?ssn_num=457-55-5462`,
            "method": "GET",
            "useQueryString": true,
            "headers": {
                "X-RapidAPI-Key": "72621fd844msh3e74cbe7427de93p16f872jsn01525e3468c1",
                "X-RapidAPI-Host": "ssn_validator.p.rapidapi.com"
            }
        };
        
        $.ajax(settings).done(function (response) {
            console.log(response);
        });
}
    }