const eTable = document.querySelector("table");
const eSamlaData = document.querySelector("button");




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
    console.log("Du har klickat på en karta!", e.lngLat);

    // Infogga en markerare
    var marker = new mapboxgl.Marker()
        .setLngLat(e.lngLat)
        .addTo(map);



    // Infogga rader i tabellen
    var newRow = eTable.insertRow();
    newRow.insertCell().innerText = e.lngLat.lng;
    newRow.insertCell().innerText = e.lngLat.lng;
    var lastCell = newRow.insertCell();
    lastCell.contentEditable = "true";
    lastCell.innerText = "...";



});

eSamlaData.addEventListener("click", function () {
    console.log(eSamlaData);
    // Hitta första cellen
    const eCell = document.querySelector("td");
    //Läsa av innehållet
    console.log(eCell.textContent);

    // Hitta ALLA celler
    const eCeller = document.querySelectorAll("td");
    // Loopar igenom en array
    // Loppa igenom alla celler
    eCeller.forEach(cell => {
        console.log(cell.innerText);

        var formData = new FormData();
        formData.append("texten", eCell.textContent)

        eCell.innerHTML = "<table>" +
         "<tr>" 
               + "<th></th>"
               + "<th></th>"
               + "<th></th>"
           + "</tr>"
        + "</table>"
        
        // Skicka en tabell istället för psvbvshd1

        // Få eTable att visas

        // Använd cellRow och InsertCell

        //Få den att läsas i textdokument.txt

        fetch("mapbox.php", {
            method: "post",
            body: formData
        })
            .then(response => response.text())
    });
})


