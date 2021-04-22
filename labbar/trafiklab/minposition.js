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