


$("#birth_state").change(function () {
    var state = $(this).val();
    var cities = cities_by_state[state];

    // Clear the city select and add the default option
    $("#birth_city").empty().append('<option value="">Select a city</option>');

    // Populate the city select with options based on the selected state
    // $("#city").append("<option selected></option>");
    $.each(cities, function (index, city) {
        $("#birth_city").append(`<option value="${city}">` + city + "</option>");
    });
});

function checkFieldSetFamilyAndMedicalHistory()
{
    if ($("#fieldset_fifteen").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;
    // console.log(nextWizardStep)

    var data = {};
    $("#fieldset_fifteen input").each(function () {
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
    $("#fieldset_fifteen select").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    $("#fieldset_fifteen textarea").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });

    if (nextWizardStep) {
        $("#family_history_bar").addClass("completed");
        $("#family_history_bar").children("div").eq(0).addClass("text-white");
        $("#family_history_bar").removeClass("active");
        $("#travel_info_bar").addClass("active");
    }
}