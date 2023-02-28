function check_card_has_secondary_auth_user_1()
{
    if ($("input[name='card_has_secondary_auth_user_1']:checked").val() == "1") {
        $("#secondary_card_holder_div_1").show();
     
    } else {
        $("#secondary_card_holder_div_1").hide();
       
    }
}

function check_card_has_secondary_auth_user_2()
{
    if ($("input[name='card_has_secondary_auth_user_2']:checked").val() == "1") {
        $("#secondary_card_holder_div_2").show();
     
    } else {
        $("#secondary_card_holder_div_2").hide();
       
    }
}

function check_card_has_secondary_auth_user_3()
{
    if ($("input[name='card_has_secondary_auth_user_3']:checked").val() == "1") {
        $("#secondary_card_holder_div_3").show();
     
    } else {
        $("#secondary_card_holder_div_3").hide();
       
    }
}

function check_card_has_secondary_auth_user_4()
{
    if ($("input[name='card_has_secondary_auth_user_4']:checked").val() == "1") {
        $("#secondary_card_holder_div_4").show();
     
    } else {
        $("#secondary_card_holder_div_4").hide();
       
    }
}

function check_card_has_secondary_auth_user_5()
{
    if ($("input[name='card_has_secondary_auth_user_5']:checked").val() == "1") {
        $("#secondary_card_holder_div_5").show();
     
    } else {
        $("#secondary_card_holder_div_5").hide();
       
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
    $("#fieldset_seven input").each(function() {
        data[$(this).attr("name")] = $(this).val();
      });
      console.log(data)

      if (nextWizardStep) {
        $("#protect_cards_bar").addClass("completed");
        $("#protect_cards_bar").children("div").eq(0).addClass("text-white");
        $("#protect_cards_bar").removeClass("active");
        // $("#facial_image_upload_bar").addClass("active");
    }
}