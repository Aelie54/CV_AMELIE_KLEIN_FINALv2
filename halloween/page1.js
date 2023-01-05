var clown = document.getElementById('monstre'); // on récupère l'élément qui sera survolé pour jouer le son

var sonclown = document.getElementById('son_clown');
 
clown.onmouseover = function(){ // lorsque le div est survolé
    sonclown.play(); // on joue le son
};

