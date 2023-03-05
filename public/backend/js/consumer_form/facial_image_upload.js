
function checkFieldSetFacialImageUpload() {
    if ($("#fieldset_one").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;
    // console.log(nextWizardStep)

    var data = {};
    $("#fieldset_one input").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    console.log(data);

    if (nextWizardStep) {
        $("#facial_image_upload_bar").addClass("completed");
        $("#facial_image_upload_bar").children("div").eq(0).addClass("text-white");
        $("#facial_image_upload_bar").removeClass("active");
        $("#head_n_face_bar").addClass("active");
    }
}