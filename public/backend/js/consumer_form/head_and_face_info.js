function checkFieldSetHeadAndFace() {
    if ($("#fieldset_nine").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;

    var data = {};
    $("#fieldset_nine input").each(function () {
        if ($(this).attr("type") == "radio") {
            data[$(this).attr("name")] = document.querySelector(
                'input[name="' + $(this).attr("name") + '"]:checked'
            ).value;
        } else {
            data[$(this).attr("name")] = $(this).val();
        }
    });
    $("#fieldset_nine select").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    data["form_section"] = "head_and_face_information";

    if (nextWizardStep) {
      store_this_is_me_form_data(data, "head_and_face_information_button");

        $("#head_n_face_bar").addClass("completed");
        $("#head_n_face_bar").children("div").eq(0).addClass("text-white");
        $("#head_n_face_bar").removeClass("active");
        $("#hair_bar").addClass("active");
    }
}