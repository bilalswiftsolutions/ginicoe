
function checkFieldSetGenderIdentityInformation()
  {
    if ($("#fieldset_three").find(":input").valid()) {
        nextWizardStep = true;
        
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;
    // console.log(nextWizardStep)

    var data = {};
    $("#fieldset_three input").each(function() {
        data[$(this).attr("name")] = $(this).val();
      });
      console.log(data)

      if (nextWizardStep) {
        $("#gender_identity_bar").addClass("completed");
        $("#gender_identity_bar").children("div").eq(0).addClass("text-white");
        $("#gender_identity_bar").removeClass("active");
        $("#enthnicity_bar").addClass("active");
    }
  }