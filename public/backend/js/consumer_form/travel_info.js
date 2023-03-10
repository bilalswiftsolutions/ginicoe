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
        if ($(this).attr("type") == "radio") {
            data[$(this).attr("name")] = document.querySelector(
                'input[name="' + $(this).attr("name") + '"]:checked'
            ).value;
            console.log($(this).attr("name"),document.querySelector(
                'input[name="' + $(this).attr("name") + '"]:checked'
            ).value)
        }
        if ($(this).attr("type") == "checkbox") {
            data[$(this).attr("name")] = $(this).is(":checked") ? 1 : 0;
        } if($(this).attr("type") != "radio" && $(this).attr("type") != "checkbox") {
            data[$(this).attr("name")] = $(this).val();
        }
    });
    $("#fieldset_sixteen select").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    $("#fieldset_sixteen textarea").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });

    if (nextWizardStep) {
        $("#travel_info_bar").addClass("completed");
        $("#travel_info_bar").children("div").eq(0).addClass("text-white");
        $("#travel_info_bar").removeClass("active");
        $("#attestation_bar").addClass("active");
    }
}