window.onload = function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(onSuccess, onError, {
            enableHighAccuracy: true,
            maximumAge: 1000,
            timeout: 5000
        });
    } else {
        document.getElementById(map).innerHTML = "No Support for geolocation services, we cannot show you the map";
    }

    function onSuccess(position) {
        showMap(
            position.coords.latitude,
            position.coords.langitude
        );

    };

    function onError(error) {

    }

}