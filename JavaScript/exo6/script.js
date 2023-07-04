// Récupérer les éléments du formulaire
var motDePasseInput = document.getElementById("motDePasse");
var emailInput = document.getElementById("email");
var resultat = document.getElementById("resultat");
var messages = [];

// Ajouter les écouteurs d'événements "input" pour les champs de saisie
motDePasseInput.addEventListener("input", verifierMotDePasse);
emailInput.addEventListener("input", verifierMotDePasse);

// Fonction de vérification du mot de passe et de l'e-mail
function verifierMotDePasse() {
  var motDePasse = motDePasseInput.value;
  var email = emailInput.value;
  messages = [];

  if (motDePasse.length < 8) {
    messages.push("<div class='message'>Le mot de passe doit contenir au moins 8 caractères");
  } else {
    messages.push("<div class='message-ok'>Le mot de passe doit contenir au moins 8 caractères");
  }

  if (!/[A-Z]/.test(motDePasse) || !/[a-z]/.test(motDePasse)) {
    messages.push("<div class='message'>Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule");
  } else {
    messages.push("<div class='message-ok'>Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule");
  }

  if (!/\d/.test(motDePasse)) {
    messages.push("<div class='message'>Le mot de passe doit contenir au moins un chiffre");
  } else {
    messages.push("<div class='message-ok'>Le mot de passe doit contenir au moins un chiffre");
  }

  if (!/[^A-Za-z0-9]/.test(motDePasse)) {
    messages.push("<div class='message'>Le mot de passe doit contenir au moins un caractère spécial");
  } else {
    messages.push("<div class='message-ok'>Le mot de passe doit contenir au moins un caractère spécial");
  }

  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    messages.push("<div class='message'>Veuillez entrer une adresse e-mail valide");
  } else {
    messages.push("<div class='message-ok'>L'adresse e-mail est valide");
  }

  if (messages.length === 0) {
    messages.push("<div class='message-ok'>Mot de passe et adresse e-mail valides");
  }

  resultat.innerHTML = messages.join("<br>");
}







// // Récupérer les éléments du formulaire
// var motDePasseInput = document.getElementById("motDePasse");
// var emailInput = document.getElementById("email");
// var resultat = document.getElementById("resultat");
// var messages = [];

// // Ajouter les écouteurs d'événements "input" pour les champs de saisie
// motDePasseInput.addEventListener("input", verifierMotDePasse);
// emailInput.addEventListener("input", verifierMotDePasse);

// // Fonction de vérification du mot de passe et de l'e-mail
// function verifierMotDePasse() {
//     var motDePasse = motDePasseInput.value;
//     var email = emailInput.value;
//     messages = [];

//     if (motDePasse.length < 8) {
//         messages.push("- Le mot de passe doit contenir au moins 8 caractères");
//     }

//     if (!/[A-Z]/.test(motDePasse) || !/[a-z]/.test(motDePasse)) {
//         messages.push("- Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule");
//     }

//     if (!/\d/.test(motDePasse)) {
//         messages.push("- Le mot de passe doit contenir au moins un chiffre");
//     }

//     if (!/[^A-Za-z0-9]/.test(motDePasse)) {
//         messages.push("- Le mot de passe doit contenir au moins un caractère spécial");
//     }

//     if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
//         messages.push("- Veuillez entrer une adresse e-mail valide");
//     }

//     if (messages.length === 0) {
//         resultat.innerHTML = "<div class='resultat-ok'>✅ Mot de passe et adresse e-mail valides</div>";
//     } else {
//         resultat.innerHTML = "<div class='resultat-error'>" + messages.join("<br>") + "</div>";
//     }
// }
