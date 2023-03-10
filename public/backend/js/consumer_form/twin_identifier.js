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
    $("#fieldset_twelve select").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    $("#fieldset_twelve textarea").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    data["form_section"] = "twin_identifier_information";

    if (nextWizardStep) {
      store_this_is_me_form_data(data, "twin_identifier_information_button");

        $("#twin_identifier_bar").addClass("completed");
        $("#twin_identifier_bar").children("div").eq(0).addClass("text-white");
        $("#twin_identifier_bar").removeClass("active");
        $("#open_bar").addClass("active");
    }
}