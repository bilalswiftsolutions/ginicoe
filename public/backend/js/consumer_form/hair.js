function checkFieldSetHair() {
    if ($("#fieldset_ten").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    nextWizardStep = true;

    var data = {};
    $("#fieldset_ten input").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    console.log(data);

    if (nextWizardStep) {
        $("#hair_bar").addClass("completed");
        $("#hair_bar").children("div").eq(0).addClass("text-white");
        $("#hair_bar").removeClass("active");
        // $("#employment_bar").addClass("active");
    }
}