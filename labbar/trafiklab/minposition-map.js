/* Hitta alla element som vi använder */
const eP = document.querySelector("p");
 

/* Har vi på geolocation? */
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(visaPosition);
} else {
    eP.textContent = "Geolocation hittades inte för gammal webbläsare!";
}

/* Skriv ut din position */
/* En callback funktion */
function visaPosition(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;

    eP.textContent = "Din position är: latitude = " + latitude + ", longitude = " + longitude;
}

  // Min personliga access-token
        // De som gör att min karta tas fram
        mapboxgl.accessToken = 'pk.eyJ1IjoidmlrdG9ybGFyc3NvbjgiLCJhIjoiY2tsNmRzZjNzMjgwMTJubGI2Z2pwdjZrbSJ9.mDPInUCth6o7-VU2tAzFQw'; // replace this with your access token

        // Här skapas kartan
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/viktorlarsson8/ckm1xfz2r0dmc17k5qezqk31l', // replace this with your style URL
            center: [16.184097, 58.596887], //Långetud och Latitude
            zoom: 7.7
        });

        // Här skapar vi alla popups    
        var popupTraffik = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<En traffikolycka är i området  😎 >'
        );
        var popupLångsamTraffik = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<Traffiken är extra långsam   😺  >'
        );
        var popupTraffik2 = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<En snabbare vägg   🤠  >'
        );
        var polis = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<h3>Polis patrull</h3> <img src="./bild/polis.jfif" alt="Polis">  '
        );

        //Här lägger vi en markerare
        var marker1 = new mapboxgl.Marker()
            .setLngLat([16.0, 59.37])
            .setPopup(popupLångsamTraffik)
            .addTo(map);

        var marker2 = new mapboxgl.Marker()
            .setLngLat([14.0, 59.42])
            .setPopup(popupTraffik)
            .addTo(map);

        var marker3 = new mapboxgl.Marker()
            .setLngLat([17.0, 59.42])
            .setPopup(popupTraffik2)
            .addTo(map);

        var marker4 = new mapboxgl.Marker()
            .setLngLat([15.0, 59.42])
            .setPopup(polis)
            .addTo(map);