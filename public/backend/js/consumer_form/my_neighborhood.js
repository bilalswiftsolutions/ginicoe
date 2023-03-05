function get_nearest_neghbor_address_right() {
    if (
        $("input[name='provide_neigborhood_address_right']:checked").val() ==
        "1"
    ) {
        $("#neighborhood_address_div_right").show();
        $('#neighborhood_house_address_right').prop('required',true)
        $('#neighborhood_urbanization_name_right').prop('required',true)
        $('#neighborhood_zipcode_right').prop('required',true)
        $('#neighborhood_state_right').prop('required',true)
        $('#neighborhood_city_right').prop('required',true)
       
    } else {
        $("#neighborhood_address_div_right").hide();
        $('#neighborhood_house_address_right').prop('required',false)
        $('#neighborhood_urbanization_name_right').prop('required',false)
        $('#neighborhood_zipcode_right').prop('required',false)
        $('#neighborhood_state_right').prop('required',false)
        $('#neighborhood_city_right').prop('required',false)
    }
}

$("#neighborhood_state_right").change(function () {
    var state = $(this).val();
    var cities = cities_by_state[state];

    // Clear the city select and add the default option
    $("#neighborhood_city_right")
        .empty()
        .append('<option value="">Select a city</option>');

    // Populate the city select with options based on the selected state

    $.each(cities, function (index, city) {
        $("#neighborhood_city_right").append(
            `<option value="${city}">` + city + "</option>"
        );
    });
});

function get_nearest_neghbor_address_left() {
    if (
        $("input[name='provide_neigborhood_address_left']:checked").val() == "1"
    ) {
        $("#neighborhood_address_div_left").show();
        $('#neighborhood_house_address_left').prop('required',true)
        $('#neighborhood_urbanization_name_left').prop('required',true)
        $('#neighborhood_zipcode_left').prop('required',true)
        $('#neighborhood_state_left').prop('required',true)
        $('#neighborhood_city_left').prop('required',true)
    } else {
        $("#neighborhood_address_div_left").hide();
        $('#neighborhood_house_address_left').prop('required',false)
        $('#neighborhood_urbanization_name_left').prop('required',false)
        $('#neighborhood_zipcode_left').prop('required',false)
        $('#neighborhood_state_left').prop('required',false)
        $('#neighborhood_city_left').prop('required',false)
    }
}

$("#neighborhood_state_left").change(function () {
    var state = $(this).val();
    var cities = cities_by_state[state];

    // Clear the city select and add the default option
    $("#neighborhood_city_left")
        .empty()
        .append('<option value="">Select a city</option>');

    // Populate the city select with options based on the selected state

    $.each(cities, function (index, city) {
        $("#neighborhood_city_left").append(
            `<option value="${city}">` + city + "</option>"
        );
    });
});

function get_nearest_neghbor_address_back() {
    if (
        $("input[name='provide_neigborhood_address_back']:checked").val() == "1"
    ) {
        $("#neighborhood_address_div_back").show();
        $('#neighborhood_house_address_back').prop('required',true)
        $('#neighborhood_urbanization_name_back').prop('required',true)
        $('#neighborhood_zipcode_back').prop('required',true)
        $('#neighborhood_state_back').prop('required',true)
        $('#neighborhood_city_back').prop('required',true)
    } else {
        $("#neighborhood_address_div_back").hide();
        $('#neighborhood_house_address_back').prop('required',false)
        $('#neighborhood_urbanization_name_back').prop('required',false)
        $('#neighborhood_zipcode_back').prop('required',false)
        $('#neighborhood_state_back').prop('required',false)
        $('#neighborhood_city_back').prop('required',false)
    }
}

$("#neighborhood_state_back").change(function () {
    var state = $(this).val();
    var cities = cities_by_state[state];

    // Clear the city select and add the default option
    $("#neighborhood_city_back")
        .empty()
        .append('<option value="">Select a city</option>');

    // Populate the city select with options based on the selected state

    $.each(cities, function (index, city) {
        $("#neighborhood_city_back").append(
            `<option value="${city}">` + city + "</option>"
        );
    });
});

function get_nearest_neghbor_address_front() {
    if (
        $("input[name='provide_neigborhood_address_front']:checked").val() ==
        "1"
    ) {
        $("#neighborhood_address_div_front").show();

        $('#neighborhood_house_address_front').prop('required',true)
        $('#neighborhood_urbanization_name_front').prop('required',true)
        $('#neighborhood_zipcode_front').prop('required',true)
        $('#neighborhood_state_front').prop('required',true)
        $('#neighborhood_city_front').prop('required',true)
    } else {
        $("#neighborhood_address_div_front").hide();
        $('#neighborhood_house_address_front').prop('required',false)
        $('#neighborhood_urbanization_name_front').prop('required',false)
        $('#neighborhood_zipcode_front').prop('required',false)
        $('#neighborhood_state_front').prop('required',false)
        $('#neighborhood_city_front').prop('required',false)
    }
}

$("#neighborhood_state_front").change(function () {
    var state = $(this).val();
    var cities = cities_by_state[state];

    // Clear the city select and add the default option
    $("#neighborhood_city_front")
        .empty()
        .append('<option value="">Select a city</option>');

    // Populate the city select with options based on the selected state

    $.each(cities, function (index, city) {
        $("#neighborhood_city_front").append(
            `<option value="${city}">` + city + "</option>"
        );
    });
});

function checkFieldSetNeighborhood() {
    if ($("#fieldset_five").find(":input").valid()) {
        nextWizardStep = true;
    } else {
        nextWizardStep = false;
    }
    // nextWizardStep = true;

    var data = {};
    $("#fieldset_five input").each(function () {
        data[$(this).attr("name")] = $(this).val();
    });
    console.log(data);

    if (nextWizardStep) {
        $("#neighborhood_bar").addClass("completed");
        $("#neighborhood_bar").children("div").eq(0).addClass("text-white");
        $("#neighborhood_bar").removeClass("active");
        $("#employment_bar").addClass("active");
    }
}
