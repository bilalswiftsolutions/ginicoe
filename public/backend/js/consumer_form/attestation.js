function submitAttestation() {
    if ($("#fieldset_seventeen").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;

    var data = {};
    $("#fieldset_seventeen input").each(function () {
        if ($(this).attr("type") == "radio") {
            data[$(this).attr("name")] = document.querySelector(
                'input[name="' + $(this).attr("name") + '"]:checked'
            ).value;
            console.log(
                $(this).attr("name"),
                document.querySelector(
                    'input[name="' + $(this).attr("name") + '"]:checked'
                ).value
            );
        }
        if ($(this).attr("type") == "checkbox") {
            data[$(this).attr("name")] = $(this).is(":checked") ? 1 : 0;
        }
        if (
            $(this).attr("type") != "radio" &&
            $(this).attr("type") != "checkbox"
        ) {
            data[$(this).attr("name")] = $(this).val();
        }
    });
    $("#fieldset_seventeen select").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    $("#fieldset_seventeen textarea").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    data["form_section"] = "attestation_information";

    if (nextWizardStep) {
        store_this_is_me_form_data(data, "attestation_information_button");

        $("#attestation_bar").addClass("completed");
        $("#attestation_bar").children("div").eq(0).addClass("text-white");
        $("#attestation_bar").removeClass("active");
        toastr.success("Form Completed");
       setTimeout(()=>{
        location.reload();

       },5000)
    }
}

function review_form() {
    $("fieldset").removeClass("show");
    $("fieldset").addClass("show");
    $(".clearfix").hide();
    $("#all_form_submit").show();
}
function submit_full_form() {
    if ($("fieldset").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    console.log(nextWizardStep);
    $("fieldset").find(":input").each(function() {
        if (!$(this).valid()) {

          console.log("Field not valid: " + $(this).attr("name"));
        }
      });
    if (!nextWizardStep) {
        toastr.error("Please check form some fields are not valid");
    }else{
        checkFieldSetPidegree();
        checkFieldSetThisIsMe();
        checkFieldSetGenderIdentityInformation();
        checkFieldSetEthnicityInformation();
        checkFieldSetNeighborhood();
        checkFieldSetEmploymentInformation();
        checkFieldSetChargesCard();
        checkFieldSetFacialImageUpload();
        checkFieldSetHeadAndFace();
        checkFieldSetHair();
        checkFieldSetDistinguishIdentifier();
        checkFieldSetTwinIdentifier();
        checkFieldSetMedicalInfo();
        checkFieldSetFamilyAndMedicalHistory();
        checkFieldSetTravelInfo();
        submitAttestation();
    }
   
}
