function distinguish_identifier_check() {
    if (
        $("input[name='facial_neck_scars']:checked").val() ==
        "1"
    ) {
        $("#facial_neck_scars_description_div").show();
    } else {
        $("#facial_neck_scars_description_div").hide();
    }
}

function facial_neck_tattoos_check() {
    if (
        $("input[name='facial_or_neck_tattoos']:checked").val() ==
        "1"
    ) {
        $("#facial_or_neck_tattoos_description_div").show();
    } else {
        $("#facial_or_neck_tattoos_description_div").hide();
    }
}
function facial_plastic_surgery_check()
{
    if (
        $("input[name='facial_plastic_surgery']:checked").val() ==
        "1"
    ) {
        $("#facial_plastic_surgery_description_div").show();
    } else {
        $("#facial_plastic_surgery_description_div").hide();
    }  
}

$("#surgeon_state").change(function () {
    var state = $(this).val();
    var cities = cities_by_state[state];

    // Clear the city select and add the default option
    $("#surgeon_city").empty().append('<option value="">Select a city</option>');

    // Populate the city select with options based on the selected state
    // $("#city").append("<option selected></option>");
    $.each(cities, function (index, city) {
        $("#surgeon_city").append(`<option value="${city}">` + city + "</option>");
    });
});

function checkFieldSetDistinguishIdentifier()
{
    if ($("#fieldset_eleven").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    nextWizardStep = true;

    var data = {};
    $("#fieldset_eleven input").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    console.log(data);

    if (nextWizardStep) {
        $("#distinguish_bar").addClass("completed");
        $("#distinguish_bar").children("div").eq(0).addClass("text-white");
        $("#distinguish_bar").removeClass("active");
        $("#twin_identifier_bar").addClass("active");
    }
}