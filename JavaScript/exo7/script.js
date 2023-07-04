document.addEventListener("DOMContentLoaded", function() {
  var result = document.getElementById("result"); // Récupère l'élément avec l'ID "result" pour afficher le résultat
  var history = document.getElementById("history"); // Récupère l'élément avec l'ID "history" pour afficher l'historique
  var buttons = document.getElementsByClassName("button"); // Récupère tous les éléments avec la classe "button" pour les boutons

  // Ajoute un gestionnaire d'événement de clic à chaque bouton
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", handleClick);
  }

  function handleClick() {
    var buttonValue = this.innerText; // Récupère la valeur du bouton cliqué
    var currentValue = result.innerText; // Récupère la valeur actuelle affichée dans le résultat

    switch (buttonValue) {
      case "C":
        result.innerText = "0"; // Réinitialise le résultat à zéro
        break;
      case "=":
        try {
          var answer = eval(currentValue); // Évalue l'expression mathématique dans currentValue
          result.innerText = answer; // Affiche le résultat de l'évaluation
          history.innerText += currentValue + " = " + answer + "\n"; // Ajoute le calcul à l'historique avec le résultat
        } catch (error) {
          result.innerText = "Erreur"; // Affiche "Erreur" en cas d'erreur lors de l'évaluation
          history.innerText += currentValue + " = Erreur" + "\n"; // Ajoute le calcul avec une erreur à l'historique
        }
        break;
      default:
        if (currentValue === "0" || currentValue === "Erreur") {
          result.innerText = buttonValue; // Remplace la valeur actuelle par la valeur du bouton si elle est "0" ou "Erreur"
        } else {
          result.innerText += buttonValue; // Ajoute la valeur du bouton à la fin de la valeur actuelle
        }
        break;
    }
  }
});
