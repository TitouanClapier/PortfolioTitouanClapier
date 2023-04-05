////// Fonction permettant de changer la variable GET dans l'url //////

    function changeDiv(cible) {
        let URL = document.location.href;
        let objPage = {page: cible, url:URL.split("?")[0]+"?page="+cible};
        history.pushState(objPage, objPage.page, objPage.url);
    }



////// Localisation des bouttons et des images du carousel //////

    ////// Boutons //////

    let home = document.getElementById("homeButtonMenu");
    let cardio = document.getElementById("cardioButtonMenu");
    let stress = document.getElementById("stressButtonMenu");
    let devperso = document.getElementById("devpersoButtonMenu");
    let presentation = document.getElementById("presentationButtonMenu");
    let rendezvous = document.getElementById("rendezvousButtonMenu");
    let questions = document.getElementById("questionsButtonMenu");
    let def = document.getElementById("defButtonMenu");
    let cible = document.getElementById("pourquiButtonMenu");
    let complementaire = document.getElementById("therapcomplButtonMenu");
    let derouleseance = document.getElementById("deroulseanceButtonMenu");
    let buttonLegal = document.getElementById("buttonLegalNotice")

    let imgSophDef = document.getElementById("imgSophDef")
    let imgSophQui = document.getElementById("imgSophQui")
    let imgStress = document.getElementById("imgStress")
    let imgCardio = document.getElementById("imgCardio")
    let imgDevSport = document.getElementById("imgDevSport")
    let imgCabinet = document.getElementById("imgCabinet")



////// Appel de la fonction changeDiv au clique d'un bouton ou d'une image du carousel //////

    ////// Boutons //////

    home.addEventListener("click", function() {
        changeDiv("home");
    })

    cardio.addEventListener("click", function() {
        changeDiv("cardio");
    })

    stress.addEventListener("click", function() {
        changeDiv("stress");
    })

    devperso.addEventListener("click", function() {
        changeDiv("devperso");
    })

    presentation.addEventListener("click", function() {
        changeDiv("presentation");
    })

    rendezvous.addEventListener("click", function() {
        changeDiv("rendezvous");
    })

    questions.addEventListener("click", function() {
        changeDiv("questions");
    })

    def.addEventListener("click", function() {
        changeDiv("def");
    })

    cible.addEventListener("click", function() {
        changeDiv("cible");
    })

    complementaire.addEventListener("click", function() {
        changeDiv("complementaire");
    })

    derouleseance.addEventListener("click", function() {
        changeDiv("derouleseance");
    })

    buttonLegal.addEventListener("click", function() {
        changeDiv("legal");
    })

    ////// Images //////

    imgSophDef.addEventListener("click", function(){
        changeDiv("def");
    })

    imgSophQui.addEventListener("click", function(){
        changeDiv("cible");
    })

    imgStress.addEventListener("click", function(){
        changeDiv("stress");
    })

    imgCardio.addEventListener("click", function(){
        changeDiv("cardio");
    })

    imgDevSport.addEventListener("click", function(){
        changeDiv("devperso");
    })

    imgCabinet.addEventListener("click", function(){
        changeDiv("rendezvous");
    })