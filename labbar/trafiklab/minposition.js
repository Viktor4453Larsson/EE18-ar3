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

    /* Omvandla lat & lon till ett POST-paket, simulerar ett slags formulär */
    var postData = new FormData();
    postData.append("lat", latitude);
    postData.append("lon", longitude);

    /* Skicka data lat och lon till backend.php */
    fetch("./backend.php", {
        method: "POST",
        body: postData
    })
    .then(response => response.json()) /* Vi väljer att ta emot ett JSON packet */
    .then(stops => {
        /* Loopa igenom en array som heter stops */
        stops.forEach(stop => {
            console.log(stop.name, stop.lat, stop.lon);
            eP.innerHTML += stop.name + ": " + stop.lat + ", " +  stop.lon + "<br>";
        });
    }) /* Hållplatserna */
}