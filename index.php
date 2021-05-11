<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
    <style>
        #mapid {
            height: 100%;
        }
    </style>    
    <title>Document</title>
</head>
<body>
<div id="mapid"></div>
</body>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
<script>
    var mymap = L.map('mapid').setView([-5.1147673,105.3060623], 15);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);
    
    var marker = L.marker([-5.1147673,105.3060623]).addTo(mymap);

    var circle = L.circle([-5.115993, 105.310607], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 150
    }).addTo(mymap);

    var polygon = L.polygon([
        [-5.113428, 105.308118],
        [-5.108384, 105.308032],
        [-5.106846, 105.313697]
    ]).addTo(mymap);

    marker.bindPopup("<b>Hello World!</b><br>I am a popup.").openPopup();
    circle.bindPopup("I am a circle.");
    polygon.bindPopup("I am a polygon.");
    
    var popup = L.popup()

    function onMapClick(e) {
        alert("You clicked the map at " + e.latlng);
    }

    mymap.on('click', onMapClick);
    
</script>

</html>