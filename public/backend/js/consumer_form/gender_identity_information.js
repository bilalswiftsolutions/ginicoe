function checkFieldSetGenderIdentityInformation() {
    if ($("#fieldset_three").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;
    // console.log(nextWizardStep)

    var data = {};
    $("#fieldset_three input").each(function () {
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
    $("#fieldset_three select").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    $("#fieldset_three textarea").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    data["form_section"] = "gender_identity_info";
    console.log(data);
    if (nextWizardStep) {
        store_this_is_me_form_data(data, "gender_identity_info_button");

        $("#gender_identity_bar").addClass("completed");
        $("#gender_identity_bar").children("div").eq(0).addClass("text-white");
        $("#gender_identity_bar").removeClass("active");
        $("#enthnicity_bar").addClass("active");
    }
}
