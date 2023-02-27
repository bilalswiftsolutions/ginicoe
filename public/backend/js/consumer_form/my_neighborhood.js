function get_nearest_neghbor_address() {

    if ($("input[name='provide_neigborhood_address']:checked").val() == "1") {
        $("#neighborhood_address_div").show();
     
    } else {
        $("#neighborhood_address_div").hide();
       
    }
}

$("#neighborhood_state").change(function () {
    var state = $(this).val();
    var cities = cities_by_state[state];

    // Clear the city select and add the default option
    $("#neighborhood_city").empty().append('<option value="">Select a city</option>');

    // Populate the city select with options based on the selected state
    // $("#city").append("<option selected></option>");
    $.each(cities, function (index, city) {
        $("#neighborhood_city").append(`<option value="${city}">` + city + "</option>");
    });
});