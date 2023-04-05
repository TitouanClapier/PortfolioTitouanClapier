/*
1. On cible les éléments de la page dont on va avoir besoin (on les me dans des variables)
  - le bouton d'ajout au panier
  - la pastille "nombre de produits dans le panier"
2. On créé une variable qui contiendra le nombre de prduits dans le panier
3. On pose un écouteur d'événement (click) sur le bouton d'ajout au panier
4. Lorsque l'on détecte un click sur le bouton : 
  - on incrémente le compteur (nombre de produits dans le panier)
  - si le compteur a une valeur > 0
    - on utilise la valeur du compteur comme contenu de la pastille
    - on affiche la pastille
*/

var addToBasketButtonElement = document.querySelector("#addToBasketButton");
// console.log(addToBasketButtonElement);
var basketProductQuantityElement = document.querySelector(".basketQuantity");
// console.log(basketProductQuantityElement);
var productQuantity = 0;

if (sessionStorage.getItem("productQuantity")) {
  console.log("j'ai une quantité stockée");
  productQuantity = sessionStorage.getItem("productQuantity");
  basketProductQuantityElement.textContent = productQuantity;
  basketProductQuantityElement.classList.add("showBasketQuantity");
} else {
  console.log("je n'ai pas de quantité stockée");
}

addToBasketButtonElement.addEventListener("click", function(event) {
  event.preventDefault();
  // console.log("clic sur le bouton ajout panier");
  // console.log("avant : " + productQuantity);
  // productQuantity = productQuantity + 1;
  // ou une syntaxe plus simple
  productQuantity++;
  sessionStorage.setItem("productQuantity", productQuantity);
  // console.log(productQuantity);
  if (productQuantity > 0) {
    console.log(productQuantity);
    basketProductQuantityElement.textContent = productQuantity;
    basketProductQuantityElement.classList.add("showBasketQuantity");
  }
});

// Commentaires JD

// 1ère partie où on sélectionne le panier dans la page
// + on met la quantité à 0 par défaut

// 2de partie où on vérifie dans localStorage la quantité mémorisée
// dans le navigateur, si jamais quoi…
// TODO => en tenir compte dans l'affichage initial du panier !!!

// 3ème partie où on pose quoi faire en cas de clic =>
// ça fait augmenter le panier + mémorisation dans localStorage
// de sorte qu'au refresh de la page, le panier soit à jour (cf. 2de partie)
