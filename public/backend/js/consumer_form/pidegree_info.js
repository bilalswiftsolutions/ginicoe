var nextWizardStep = false;
function check_cpn_usage() {
    if ($("input[name='cpn_usage']:checked").val() == "1") {
        $("#cpn_no_div").show();
        $("#cpn_no").mask("000-00-0000");
        $("#cpn_no").prop("required", true);
    } else {
        $("#cpn_no_div").hide();
        $("#cpn_no").unmask();
        $("#cpn_no").prop("required", false);
    }
}

$("#social_security_no").mask("000-00-0000");
$("#verify_social_security_no").mask("000-00-0000");

function checkFieldSetPidegree() {
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
        $("#pedigree_bar").addClass("completed");
        $("#pedigree_bar").children("div").eq(0).addClass("text-white");
        $("#pedigree_bar").removeClass("active");
        $("#find_me_here_bar").addClass("active");
    }
}
