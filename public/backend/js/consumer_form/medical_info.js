$("#medical_state").change(function () {
    var state = $(this).val();
    var cities = cities_by_state[state];
console.log(cities)
    // Clear the city select and add the default option
    $("#medical_city")
        .empty()
        .append('<option value="">Select a city</option>');

    // Populate the city select with options based on the selected state

    $.each(cities, function (index, city) {
        $("#medical_city").append(
            `<option value="${city}">` + city + "</option>"
        );
    });
});

function checkFieldSetMedicalInfo()
{
    if ($("#fieldset_fourteen").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    nextWizardStep = true;

    var data = {};
    $("#fieldset_fourteen input").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    console.log(data);

    if (nextWizardStep) {
        $("#medical_info_bar").addClass("completed");
        $("#medical_info_bar").children("div").eq(0).addClass("text-white");
        $("#medical_info_bar").removeClass("active");
        $("#family_history_bar").addClass("active");
    }
}