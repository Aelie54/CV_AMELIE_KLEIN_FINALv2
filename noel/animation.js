
var scene = document.getElementById('playsong');
var song = document.getElementById('mysong');

scene.onclick = function(){ // lorsque le div est survolé
  song.play(); // on joue le son
};