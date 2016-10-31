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


if (document.getElementById('map-contact')) {
    var map;
    $(document).ready(function () {
        map = new GMaps({
            el: '#map-contact',
            lat: 52.611772,
            lng: 39.5969189,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            rotateControl: false,
            height: '300px',
        });
        map.addMarker({
            lat: 52.611772,
            lng: 39.5969189,
            title: 'Карамельный Штрудель в Филатовке',
            infoWindow: {
                content: '<p>Тут описание?</p>'
            }
        });
    });
}



$(document).ready(function() {
    $('.maps').click(function () {
        $('.maps .gm-style').css("pointer-events", "auto");
    });

    $( ".maps" ).mouseleave(function() {
        $('.maps .gm-style').css("pointer-events", "none");
    });
});



