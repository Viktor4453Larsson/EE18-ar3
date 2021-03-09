const eTable = document.querySelector("table");

// De som gör att min karta tas fram
mapboxgl.accessToken = 'pk.eyJ1IjoidmlrdG9ybGFyc3NvbjgiLCJhIjoiY2tsNmRzZjNzMjgwMTJubGI2Z2pwdjZrbSJ9.mDPInUCth6o7-VU2tAzFQw'; // replace this with your access token

// Här skapas kartan
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/viktorlarsson8/ckm1xfz2r0dmc17k5qezqk31l', // replace this with your style URL
    center: [16.184097, 58.596887], //Långetud och Latitude
    zoom: 7.7
});

// Själv kunna lägga till markeringar på en karta
map.on("click", function (e) {
    console.log("Du har klickat på en karta!", );

    // Infogga en markerare
    var marker = new mapboxgl.Marker()
       .setLngLat(e.lngLat)
       .addTo(map);

       // Infogga rader i tabellen
      var newRow = eTable.insertRow();
      newRow.insertCell().innerText = e.lngLat.lng;
      newRow.insertCell().innerText = e.lngLat.lng;
      newRow.insertCell().innerText = e.lngLat.lng;
      newRow.insertCell().innerText = e.lngLat.lng;

});

