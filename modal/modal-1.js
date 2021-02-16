console.log(document.documentElement.lang);

// Element som vi använder 

const eGdprModal = document.querySelector("#exampleModal2");

/* Se till att modal startar */
var myModal = new bootstrap.Modal(eGdprModal, {
    keyboard: false
})

/* Skriv en GDPR varning på rätt språk */
if (document.documentElement.lang == "sv") {
    myModal.show();
}