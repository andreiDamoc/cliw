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
        toLoadOrNotToLoad();
        localStorage.setItem('poze', JSON.stringify(poze));
        console.log('saved ' + lat + ' ' + lng);
        localStorage.setItem('lng', lng);
        localStorage.setItem('lat', lat);
    }

});
$("#restore_state").on('click', function () {
    lng = localStorage.getItem('lng');
    lat = localStorage.getItem('lat');
    map.setCenter(new google.maps.LatLng(lat,lng));
    console.log('restored ' + lat + ' ' + lng);
    var poze = JSON.parse(localStorage.getItem('poze'));
    var $instagram = $('#jjjj');
    $("#jjjj").html('');
    for(var i = 0;i < poze.length;i++){
        $instagram.append('<li><a class="fancybox" href="' + poze[i] + '"> <img style="display:block" width="40px" height= "45px" width="100px" src="' + poze[i] + '"/> </a></li>');
    }

    $('.jcarousel').jcarousel('reload');

});
$("#clear_state").on('click', function () {
    console.log('cleared lat&long' + localStorage.getItem('lat'));
    localStorage.removeItem('lng');
    localStorage.removeItem('lat');
    localStorage.removeItem('poze');
    $('#restore_state').toggle('hide');
    $('#clear_state').toggle('hide');
});
