document.addEventListener("DOMContentLoaded", function() {
  var result = document.getElementById("result"); // Récupère l'élément avec l'ID "result" pour afficher le résultat
  var history = document.getElementById("history"); // Récupère l'élément avec l'ID "history" pour afficher l'historique
  var buttons = document.getElementsByClassName("button"); // Récupère tous les éléments avec la classe "button" pour les boutons

  var calculations = []; // Tableau pour stocker les calculs

  // Ajoute un gestionnaire d'événement de clic à chaque bouton
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", handleClick);
  }

  function handleClick() {
    var buttonValue = this.innerText; // Récupère la valeur du bouton cliqué
    handleButtonPress(buttonValue);
  }

  // Ajoute un gestionnaire d'événement de clavier
  document.addEventListener("keydown", function(event) {
    var key = event.key;
    // Vérifie si la touche est un chiffre, un opérateur ou une touche d'effacement
    if (/[0-9+\-*/.=]|Backspace|Delete/.test(key)) {
      event.preventDefault(); // Empêche le comportement par défaut des touches (par exemple, défilement de la page avec les flèches)
      handleButtonPress(key);
    }
  });

  function handleButtonPress(value) {
    var currentValue = result.innerText; // Récupère la valeur actuelle affichée dans le résultat

    switch (value) {
      case "C":
        result.innerText = "0"; // Réinitialise le résultat à zéro
        break;
      case "=":
        try {
          var answer = eval(currentValue); // Évalue l'expression mathématique dans currentValue
          result.innerText = answer; // Affiche le résultat de l'évaluation
          addCalculation(currentValue, answer); // Ajoute le calcul à l'historique avec le résultat
        } catch (error) {
          result.innerText = "Erreur"; // Affiche "Erreur" en cas d'erreur lors de l'évaluation
          addCalculation(currentValue, "Erreur"); // Ajoute le calcul avec une erreur à l'historique
          alert("Une erreur s'est produite lors du calcul. Veuillez vérifier votre expression.");
        }
        break;
      case "Backspace":
      case "Delete":
        if (currentValue.length === 1 || currentValue === "Erreur") {
          result.innerText = "0"; // Réinitialise le résultat à zéro si la longueur est de 1 ou s'il y a une erreur
        } else {
          result.innerText = currentValue.slice(0, -1); // Supprime le dernier caractère de la valeur actuelle
        }
        break;
      default:
        if (currentValue === "0" || currentValue === "Erreur") {
          result.innerText = value; // Remplace la valeur actuelle par la valeur du bouton si elle est "0" ou "Erreur"
        } else {
          result.innerText += value; // Ajoute la valeur du bouton à la fin de la valeur actuelle
        }
        break;
    }
  }

  function addCalculation(expression, result) {
    calculations.push(expression + " = " + result); // Ajoute le calcul à la fin du tableau

    if (calculations.length > 10) {
      calculations.shift(); // Supprime le premier élément du tableau si sa taille dépasse 10
    }

    history.innerText = calculations.join("\n"); // Met à jour l'historique en joignant les calculs avec un saut de ligne
  }
});
