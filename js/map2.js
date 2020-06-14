// var map = L.map('map').setView([-1.2490800, -78.6167500], 15);

var tileLayer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    'attribution': 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
});

var map = new L.Map('map', {
    'center': [-1.2490800, -78.6167500],
    'zoom': 13,
    'layers': [tileLayer]
});


let iconMarker = L.icon({
    iconUrl: '../Imagenes/marker.png',
    iconSize: [60, 60],
    iconAnchor: [30, 60]
});
L.control.scale().addTo(map);
L.marker([longitud, latitud]).addTo(map).bindPopup('<h3>CIUDAD AMBATO</<h3>');



