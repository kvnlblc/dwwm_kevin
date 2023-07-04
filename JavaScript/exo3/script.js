var compteurValue = 0;
  
  function buttonClick() {
    compteurValue++; 
    document.getElementById("compteur").textContent = compteurValue; 

    document.querySelector("h2").innerHTML = "Vous avez cliquer " + compteurValue + " fois";
  }