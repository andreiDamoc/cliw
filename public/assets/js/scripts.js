$(document).ready(function() {
});

function toLoadOrNotToLoad(){
    //ascunde butonul de restore+clear
    if(localStorage.getItem('lat') == null) {
        $('#clear_state').toggle('hide');
        $('#restore_state').toggle('hide');
    }
    console.log('ruleaza');
}

$("#save_state").on('click', function () {
    if(typeof lat == 'undefined')
        alert('No location selected');
    else {
        $('#restore_state').toggle('show');
        $('#clear_state').toggle('show');
        console.log('saved ' + lat + ' ' + lng);
        localStorage.setItem('lng', lng);
        localStorage.setItem('lat', lat);
    }

});
$("#restore_state").on('click', function () {
    lng = localStorage.getItem('lng');
    lat = localStorage.getItem('lat');
    console.log('restored ' + lat + ' ' + lng);
});
$("#clear_state").on('click', function () {
    console.log('cleared lat&long' + localStorage.getItem('lat'));
    localStorage.removeItem('lng');
    localStorage.removeItem('lat');
    $('#restore_state').toggle('hide');
    $('#clear_state').toggle('hide');
});
