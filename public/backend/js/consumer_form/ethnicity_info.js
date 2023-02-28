
function checkFieldSetEthnicityInformation()
  {
    if ($("#fieldset_four").find(":input").valid()) {
        nextWizardStep = true;
        
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;
    // console.log(nextWizardStep)

    var data = {};
    $("#fieldset_four input").each(function() {
        data[$(this).attr("name")] = $(this).val();
      });
      console.log(data)

      if (nextWizardStep) {
        $("#enthnicity_bar").addClass("completed");
        $("#enthnicity_bar").children("div").eq(0).addClass("text-white");
        $("#enthnicity_bar").removeClass("active");
        $("#neighborhood_bar").addClass("active");
    }
  }