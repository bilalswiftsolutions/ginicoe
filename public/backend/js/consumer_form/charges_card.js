function check_card_has_secondary_auth_user_1()
{
    if ($("input[name='card_has_secondary_auth_user_1']:checked").val() == "1") {
        $("#secondary_card_holder_div_1").show();
        $('#secondary_first_name_1').prop('required',true)
        $('#secondary_last_name_1').prop('required',true)
        $('#secondary_mi_1').prop('required',true)
        $('#secondary_card_holder_relationship_1').prop('required',true)
        $('#name_of_bank_1').prop('required',true)
        $('#expiry_date_1').prop('required',true)
      
     
    } else {
        $("#secondary_card_holder_div_1").hide();
        $('#secondary_first_name_1').prop('required',false)
        $('#secondary_last_name_1').prop('required',false)
        $('#secondary_mi_1').prop('required',false)
        $('#secondary_card_holder_relationship_1').prop('required',false)
        $('#name_of_bank_1').prop('required',false)
        $('#expiry_date_1').prop('required',false)
    }
}

function check_card_has_secondary_auth_user_2()
{
    if ($("input[name='card_has_secondary_auth_user_2']:checked").val() == "1") {
        $("#secondary_card_holder_div_2").show();
        $('#secondary_first_name_2').prop('required',true)
        $('#secondary_last_name_2').prop('required',true)
        $('#secondary_mi_2').prop('required',true)
        $('#secondary_card_holder_relationship_2').prop('required',true)
        $('#name_of_bank_2').prop('required',true)
        $('#expiry_date_2').prop('required',true)
     
    } else {
        $("#secondary_card_holder_div_2").hide();
        $('#secondary_first_name_2').prop('required',false)
        $('#secondary_last_name_2').prop('required',false)
        $('#secondary_mi_2').prop('required',false)
        $('#secondary_card_holder_relationship_2').prop('required',false)
        $('#name_of_bank_2').prop('required',false)
        $('#expiry_date_2').prop('required',false)
    }
}

function check_card_has_secondary_auth_user_3()
{
    if ($("input[name='card_has_secondary_auth_user_3']:checked").val() == "1") {
        $("#secondary_card_holder_div_3").show();

        $('#secondary_first_name_3').prop('required',true)
        $('#secondary_last_name_3').prop('required',true)
        $('#secondary_mi_3').prop('required',true)
        $('#secondary_card_holder_relationship_3').prop('required',true)
        $('#name_of_bank_3').prop('required',true)
        $('#expiry_date_3').prop('required',true)
     
    } else {
        $("#secondary_card_holder_div_3").hide();
       
        $('#secondary_first_name_3').prop('required',false)
        $('#secondary_last_name_3').prop('required',false)
        $('#secondary_mi_3').prop('required',false)
        $('#secondary_card_holder_relationship_3').prop('required',false)
        $('#name_of_bank_3').prop('required',false)
        $('#expiry_date_3').prop('required',false)
    }
}

function check_card_has_secondary_auth_user_4()
{
    if ($("input[name='card_has_secondary_auth_user_4']:checked").val() == "1") {
        $("#secondary_card_holder_div_4").show();

        $('#secondary_first_name_4').prop('required',true)
        $('#secondary_last_name_4').prop('required',true)
        $('#secondary_mi_4').prop('required',true)
        $('#secondary_card_holder_relationship_4').prop('required',true)
        $('#name_of_bank_4').prop('required',true)
        $('#expiry_date_4').prop('required',true)
     
    } else {
        $("#secondary_card_holder_div_4").hide();
        $('#secondary_first_name_4').prop('required',false)
        $('#secondary_last_name_4').prop('required',false)
        $('#secondary_mi_4').prop('required',false)
        $('#secondary_card_holder_relationship_4').prop('required',false)
        $('#name_of_bank_4').prop('required',false)
        $('#expiry_date_4').prop('required',false)
       
    }
}

function check_card_has_secondary_auth_user_5()
{
    if ($("input[name='card_has_secondary_auth_user_5']:checked").val() == "1") {
        $("#secondary_card_holder_div_5").show();

        $('#secondary_first_name_5').prop('required',true)
        $('#secondary_last_name_5').prop('required',true)
        $('#secondary_mi_5').prop('required',true)
        $('#secondary_card_holder_relationship_5').prop('required',true)
        $('#name_of_bank_5').prop('required',true)
        $('#expiry_date_5').prop('required',true)
     
    } else {
        $("#secondary_card_holder_div_5").hide();
       
        $('#secondary_first_name_5').prop('required',false)
        $('#secondary_last_name_5').prop('required',false)
        $('#secondary_mi_5').prop('required',false)
        $('#secondary_card_holder_relationship_5').prop('required',false)
        $('#name_of_bank_5').prop('required',false)
        $('#expiry_date_5').prop('required',false)
    }
}

function checkFieldSetChargesCard()
{
    if ($("#fieldset_seven").find(":input").valid()) {
        nextWizardStep = true;
        
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;
  

    var data = {};
    $("#fieldset_seven input").each(function () {
        if ($(this).attr("type") == "radio") {
            data[$(this).attr("name")] = document.querySelector(
                'input[name="' + $(this).attr("name") + '"]:checked'
            ).value;
            console.log($(this).attr("name"),document.querySelector(
                'input[name="' + $(this).attr("name") + '"]:checked'
            ).value)
        }
        if ($(this).attr("type") == "checkbox") {
            data[$(this).attr("name")] = $(this).is(":checked") ? 1 : 0;
        } if($(this).attr("type") != "radio" && $(this).attr("type") != "checkbox") {
            data[$(this).attr("name")] = $(this).val();
        }
    });
    $("#fieldset_seven select").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    $("#fieldset_seven textarea").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    data["form_section"] = "charge_card_information";


      if (nextWizardStep) {
      store_this_is_me_form_data(data, "charge_card_information_button");

        $("#protect_cards_bar").addClass("completed");
        $("#protect_cards_bar").children("div").eq(0).addClass("text-white");
        $("#protect_cards_bar").removeClass("active");
        $("#facial_image_upload_bar").addClass("active");
    }
}