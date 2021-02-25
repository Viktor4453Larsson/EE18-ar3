/* Det som händer när programet startar */
/* Här lägger vi in alla element som vi vill använda */

const eSubtraheraKnapp = document.querySelector(".minus");
const eAdderaKnapp = document.querySelector(".plus");
const rutaAntal = document.querySelector(".antal");
const eSumma = document.querySelector(".pris");
const rutaSumma = document.querySelector(".summa");

/* Skapa en funktion som räknar tar pris 49 och lägger på 49 med antalet + man trycker */

/* Tre globala variabler för att hålla koll på pris, antal och summa */
var antal = 1;
var pris = eSumma.textContent;
var summa = pris * antal;
console.log(pris, antal, summa);

/* Vad som händer efter att programet startat när vi klickar på något */
rutaAntal.value = antal;
rutaSumma.textContent = summa;

/* När vi vill trycka på addera knappen */
eAdderaKnapp.addEventListener("click", function () {
    antal++;
    console.log(antal);
    rutaAntal.value = antal;
    rutaSumma.textContent = pris * antal;
})

/* När man trycker på subtraktion knappen */
eSubtraheraKnapp.addEventListener("click", function () {
    if (antal > 0) {
        antal--;
        console.log(antal);
        rutaAntal.value = antal;
        rutaSumma.textContent = pris * antal;
    }

})

/* Den totala rutan */
rutaAntal.addEventListener("input", function () {
 antal = rutaAntal.value;
 rutaSumma.textContent = pris * antal;
})