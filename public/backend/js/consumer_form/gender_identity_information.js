
function checkFieldSetGenderIdentityInformation()
  {
    if ($("#fieldset_three").find(":input").valid()) {
        nextWizardStep = true;
        
    } else {
        nextWizardStep = false;
    }
    nextWizardStep = true;
    console.log(nextWizardStep)

    var data = {};
    $("#fieldset_three input").each(function() {
        data[$(this).attr("name")] = $(this).val();
      });
      console.log(data)
  }