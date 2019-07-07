var map;

function initMap() {
    // map = new google.maps.Map(document.getElementById('map'), {
    var uluru = {
        lat: 1.1183333333333,
        lng: 104.04805555556
    };
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 14,
            center: uluru
        });
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });

}