$(document).ready(function() {
    // Apply the plugin to the element
    $("#noUiSlider").noUiSlider({
        start: 40,
        connect: "lower",
        range: {
            'min': 0,
            'max': 100
        }
    });
});
