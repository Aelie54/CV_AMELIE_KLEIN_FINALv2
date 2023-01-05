//faire apparaitre la tete en appuyant sur le bouton
function play() { 
     document.getElementById("IT").style.animation = '12s move linear infinite alternate';
     document.getElementById("IT").style.display = "block" ;
     applause.play();
}

//jeu 
let lifenumber = 3;

function reduce(){

     if(lifenumber==3) {
          document.getElementById("IT").style.height = "1750px";
          document.getElementById("vies3").style.display = "none";
     }

     if(lifenumber==2) {
          document.getElementById("IT").style.height = "125px";     
          document.getElementById("vies2").style.display = "none";
     }

     if(lifenumber==1) {
          document.getElementById("IT").style.height = "75px";
          document.getElementById("vies1").style.display = "none";
          document.getElementById("mechant").style.display = "none";     
     }

     if(lifenumber==0) {
          document.getElementById("IT").style.height = "0px";
          document.getElementById("liencacher").style.display = "block";
     }

      lifenumber = lifenumber-1;
      //alert(`nombre de vies: ${lifenumber}` );
      return lifenumber ; 

}

//=> s'affiche quand on clic dessus : https://developer.mozilla.org/fr/docs/Learn/JavaScript/Building_blocks/Return_values