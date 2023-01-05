var ghost=document.getElementById("fantome");
var lien = document.getElementById("liencacher");
var timer=setInterval("cherche()", 900);

function cherche (fantome) {
/*console.log("VAR: ", ghost)*/
  if (window.getComputedStyle(ghost).opacity <= 0.75) 
  {
lien.style.display='none';
 } 
    else {
lien.style.display='block';
 }

}

//pour jouer des sons au survol de chaque image

var fant = document.getElementById('fantome'); // on récupère l'élément qui sera survolé pour jouer le son
var sorciere = document.getElementById('witch');
var loup = document.getElementById('loup');
var cannibal = document.getElementById('hannibal');

var sonloup = document.getElementById('son_loup'); // on récupère l'élément <audio>
var sonwitch = document.getElementById('son_witch');
var songhost = document.getElementById('son_ghost');
var sonmiam = document.getElementById('son_miam');
 
fant.onmouseover = function(){ // lorsque le div est survolé
    songhost.play(); // on joue le son
};

sorciere.onmouseover = function(){ // lorsque le div est survolé
  sonwitch.play(); // on joue le son
};

loup.onmouseover = function(){ // lorsque le div est survolé
  sonloup.play(); // on joue le son
};

cannibal.onmouseover = function(){ // lorsque le div est survolé
  sonmiam.play(); // on joue le son
};

