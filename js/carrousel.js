(function () {
  let carrousel = document.querySelector(".carrousel");
  let carrousel__bouton = document.querySelector(".carrousel__bouton");
  let carrousel__x = document.querySelector(".carrousel__x");
  let carrousel__image = document.querySelector(".carrousel__image");
  let carrousel__figure = document.querySelector(".carrousel__figure");
  let galerie = document.querySelector(".galerie");
  let galerie__img = document.querySelectorAll(".galerie img");
  console.log(galerie__img.length);
  

  function remplirCarrousel(){
    for(element of galerie__img){
      console.log(element.src);
      let img = document.createElement("img");
      img.src = element.src; //copie une image de la galerie vers le carrousel
      img.classList.add("carrousel__img");
      carrousel__figure.appendChild(img);
    }
  }

  carrousel__bouton.addEventListener("click", function () {
    
    // mettre une condition "Si la boite modale ou figure??? est vide"
    if (carrousel__figure.innerHTML == ""){
      remplirCarrousel();
    }
    afficherImage(4);
    carrousel.classList.add("carrousel--ouvrir");
  });

  carrousel__x.addEventListener("click", function () {
    carrousel.classList.remove("carrousel--ouvrir");

  });

  function afficherImage(index){
    let carrousel__img = document.querySelectorAll(".carrousel__img");
    for (let i = 0; i < carrousel__img.length; i++){
      carrousel__img[i].classList.remove("carrousel__img--visible");
    }
    carrousel__img[index].classList.add("carrousel__img--visible");
  }
})();
