/* Här skriver vi ut alla element som vi använder */
/* Vi behöver kunna läsa av promenad, jogging, styrketräning och trappor inputsen samt knappen */
const ePromenad = document.querySelector(".promenad");
const eJoggning = document.querySelector(".jogging");
const eStyrketraning = document.querySelector(".styrka");
const eTrappor = document.querySelector(".trappor");
const eKnapp = document.querySelector("#knapp1");
const eLista1 = document.querySelector(".lista1");
const eLista2 = document.querySelector(".lista2");
const eTyngsta = document.querySelector(".tyngsta");

eKnapp.addEventListener("click", function () {

  var tidPromenad = Number(ePromenad.value);  
  var tidJogging = Number(eJoggning.value);  
  var tidStyrka = Number(eStyrketraning.value);  
  var tidTrappor = Number(eTrappor.value);  

  /* Få ut den totala tiden */
  var totalTid = (tidPromenad + tidJogging + tidStyrka + tidTrappor) * 30;
  eLista1.textContent = totalTid;
  /* Skriv ut antal kcal */
  var totalKcal = (tidPromenad * 107 + tidJogging * 240 + tidStyrka * 350 + tidTrappor * 540);
  eLista2.textContent = totalKcal;

  /* Skriv ut den aktivitet  */
  var maxKalorie = Math.max(tidPromenad * 107, tidJogging * 240, tidStyrka * 350, tidTrappor * 540);

if (maxKalorie == tidPromenad * 107) {
    eTyngsta.textContent = "Promenad";
}
if (maxKalorie == tidJogging * 240) {
    eTyngsta.textContent = "Jogging";
} 
if (maxKalorie == tidStyrka * 350 ) {
    eTyngsta.textContent = "Styrka";
}
if (maxKalorie == tidTrappor * 540) {
    eTyngsta.textContent = "Trappor"
}
})