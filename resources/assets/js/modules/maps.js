if (document.getElementById('map-event')) {
    var map;
    $(document).ready(function () {
        map = new GMaps({
            el: '#map-event',
            lat: 52.3950022,
            lng: 38.9151435,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            rotateControl: false,
            height: '500px',
        });
        map.addMarker({
            lat: 52.3913599,
            lng: 38.9178112,
            title: 'Карамельный Штрудель в Филатовке',
            infoWindow: {
                content: '<p>Тут описание?</p>'
            }
        });
    });
}

$(document).ready(function() {
    $('.maps').click(function () {
        $('.maps iframe').css("pointer-events", "auto");
    });

    $( ".maps" ).mouseleave(function() {
        $('.maps iframe').css("pointer-events", "none");
    });
});