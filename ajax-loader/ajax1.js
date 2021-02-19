/* Element som vi vill använda */
const eKnappHamta = document.querySelector("button");
const eGrid = document.querySelector(".grid-6");

/* Vår funktion för att ladda in bilderna när vi trycker på -> Hämta flaggor */
eKnappHamta.addEventListener("click", function () {
    /* För att testa knappen */
    //console.log("Hämta");
    fetch("./ajax/skicka-flaggor.php")
    .then(response => response.text())
    .then(data => {
        //console.log(data);

        /* Fyll hela griden med bilder */
        eGrid.innerHTML += data;
    })
})