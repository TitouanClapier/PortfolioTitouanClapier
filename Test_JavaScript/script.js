// on cible notre lien "Cliquez ici !"
var button = document.querySelector("#button");
// on clible notre titre h1
var title = document.querySelector("h1");
// on clible le paragraphe
var text = document.querySelector(".text");
// on clible le bouton de suppression de couleur
var uncolorizeButton = document.querySelector("#decolorizeButton");
var message = "";
/*
console.log(button);
console.log(title);
console.log(text);
*/
console.log(uncolorizeButton);

var nom = prompt("Quel est ton nom ?");
var age = prompt("Quel est ton âge ?");

if (age >= 18) {
  // si age >= 18, on execute ces instructions
  message = " OK, tu peux conduire !";
} else {
  // sinon on execute ces instructions
  message = " OUPS ! Tu es trop jeune pour conduire !";
}

text.textContent = "Bonjour " + nom + message;

// écouteur d'événement (click) sur l'élément button
button.addEventListener("click", function() {
  // tout le code ci-dessous sera executé si un clic sur le bouton est detecté
  console.log("Tu as cliqué sur le bouton !");
  // on ajoute la classe "red" sur le h1
  title.classList.add("red");
  text.textContent = "Ton titre est jaune !";
});

uncolorizeButton.addEventListener("click", function() {
  // on supprime la classe "red" de l'élément h1
  title.classList.remove("red");
  text.textContent = "Ton titre est noir !";
});

// console.log("Coucou !");
// console.log("ça va ?");

// Déclaration de la variable name
// var name = "Thomas";
// var age = prompt("Donnes-moi un âge");
// var autreAge = prompt("Donnes-moi un autre âge");

// name = name + " Dodo";

// console.log("Coucou ! Je suis " + name + " et j'ai " + age + " ans !");

/* function additionAges(age1, age2) {
  alert(age1 + age2);
} */

// additionAges(5, 6);

// alert(parseInt(age) + parseInt(autreAge));
