function checkFieldSetTravelInfo()
{
    if ($("#fieldset_sixteen").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;
    // console.log(nextWizardStep)

    var data = {};
    $("#fieldset_sixteen input").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    console.log(data);

    if (nextWizardStep) {
        $("#travel_info_bar").addClass("completed");
        $("#travel_info_bar").children("div").eq(0).addClass("text-white");
        $("#travel_info_bar").removeClass("active");
        $("#attestation_bar").addClass("active");
    }
}