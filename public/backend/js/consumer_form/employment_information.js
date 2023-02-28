
function are_you_active_memeber_of_labour_union_check()
{
    
    if ($("input[name='are_you_active_memeber_of_labour_union']:checked").val() == "1") {
        $("#are_you_active_memeber_of_labour_union_div").show();
     
    } else {
        $("#are_you_active_memeber_of_labour_union_div").hide();
       
    }
}

function checkFieldSetEmploymentInformation()
{
    if ($("#fieldset_six").find(":input").valid()) {
        nextWizardStep = true;
        
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;
  

    var data = {};
    $("#fieldset_six input").each(function() {
        data[$(this).attr("name")] = $(this).val();
      });
      console.log(data)
}