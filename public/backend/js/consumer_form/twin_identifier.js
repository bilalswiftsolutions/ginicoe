function checkFieldSetTwinIdentifier()
{
    if ($("#fieldset_twelve").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;

    var data = {};
    $("#fieldset_twelve input").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    console.log(data);

    if (nextWizardStep) {
        $("#twin_identifier_bar").addClass("completed");
        $("#twin_identifier_bar").children("div").eq(0).addClass("text-white");
        $("#twin_identifier_bar").removeClass("active");
        $("#open_bar").addClass("active");
    }
}