function checkFieldSetHeadAndFace() {
    if ($("#fieldset_nine").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    nextWizardStep = true;

    var data = {};
    $("#fieldset_nine input").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    console.log(data);

    if (nextWizardStep) {
        $("#head_n_face_bar").addClass("completed");
        $("#head_n_face_bar").children("div").eq(0).addClass("text-white");
        $("#head_n_face_bar").removeClass("active");
        $("#hair_bar").addClass("active");
    }
}