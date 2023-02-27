
function checkFieldSetEthnicityInformation()
  {
    if ($("#fieldset_four").find(":input").valid()) {
        nextWizardStep = true;
        
    } else {
        nextWizardStep = false;
    }
    nextWizardStep = true;
    console.log(nextWizardStep)

    var data = {};
    $("#fieldset_four input").each(function() {
        data[$(this).attr("name")] = $(this).val();
      });
      console.log(data)
  }