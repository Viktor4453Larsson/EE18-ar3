/* Här skriver vi allt som händer innan sidan laddats klart */
/* De element vi behöver */
const eGissning = document.querySelector(".lösen");
const eKorrektSvar = document.querySelector(".svar");
const eKolla = document.querySelector("button");

/* Vilka saker vi behöver hålla reda på */
var gissning = eGissning.value;
var svar = eKorrektSvar.value;
var mobilnummer = "0703334182";
console.log(gissning, svar, mobilnummer);

eGissning.value = gissning;
eKorrektSvar.value = svar;
/* Vad som händer senare på sidan */

eKolla.addEventListener("click", function () {

    /* Titta på värdena */
    eGissning.value = gissning;
    eKorrektSvar.value = svar;

    /* Räkna ut vad 12 - 3 blir */
    if (svar.value == 9) {
        /* Om svaret är korrekt det vill säga "9" då skriver vi ut ett telefonummer */
        svar = eKorrektSvar.textContent = "0703334182";
    } else {
        /* Om svartet är inkorrekt skriv "Att du är en robot" */
        svar.innerHTML = mobilnummer;
    }
});





