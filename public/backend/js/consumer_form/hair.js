function checkFieldSetHair() {
    if ($("#fieldset_ten").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;

    var data = {};

    $("#fieldset_ten input").each(function () {
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
    $("#fieldset_ten select").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    $("#fieldset_ten textarea").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    data["form_section"] = "hair_information";

    if (nextWizardStep) {
      store_this_is_me_form_data(data, "hair_information_button");

        $("#hair_bar").addClass("completed");
        $("#hair_bar").children("div").eq(0).addClass("text-white");
        $("#hair_bar").removeClass("active");
         $("#distinguish_bar").addClass("active");
    }
}