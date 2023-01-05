var lien = document.getElementById("liencacher");



function myFunction(val) {
  if (val == 6666)
 {    
   liencacher.style.display='block';
   //alert("GAGNE" + val); //marche donc condition OK
  }
  else {
   alert("la chance n'est pas possible (bien tenté!). Alors recommence! tu as entré le code : " + val); //marche donc fonction et condition OK
  }
  
}