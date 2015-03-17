$(document).ready(function () {
    var churchMap = new GMaps({
        div: '#church_map',
        lat: 25.776188,
        lng: -80.140025
    });

    churchMap.addMarker({
        lat: 25.776188,
        lng: -80.140025,
        title: 'St. Francis De Sales Catholic Church',
        infoWindow: {
            content: '<p>St. Francis De Sales Catholic Church<br>600 Lenox Ave <br>Miami Beach, FL 33139</p>'
        }
    });

    var receptionMap = new GMaps({
        div: '#reception_map',
        lat: 25.762746,
        lng: -80.190484
    });

    receptionMap.addMarker({
        lat: 25.762746,
        lng: -80.190484,
        title: 'Sabadell Financial Center - Lobby',
        infoWindow: {
            content: '<p>Sabadell Financial Center - Lobby<br>1111 Brickell Ave<br>Miami, FL 33131</p>'
        }
    });
$('.navigation').horizontalNav();

});