function submitAttestation()
{
    
    if ($("#fieldset_eleven").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    nextWizardStep = true;

    var data = {};
    $("#fieldset_seventeen input").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    console.log(data);

    if (nextWizardStep) {
        $("#attestation_bar").addClass("completed");
        $("#attestation_bar").children("div").eq(0).addClass("text-white");
        $("#attestation_bar").removeClass("active");
       
    }
}