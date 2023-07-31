document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("quiz-form");
  const resultDiv = document.getElementById("result");
  const resultMessage = document.getElementById("result-message");
  const retryButton = document.getElementById("retry-button");

  const correctAnswers = ["pichu", "gruikui", "pyroli"];

  form.addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(form);
    const userAnswers = [];
    let score = 0;

    formData.forEach((value) => {
      userAnswers.push(value);
    });

    for (let i = 0; i < correctAnswers.length; i++) {
      if (userAnswers[i] === correctAnswers[i]) {
        score++;
      }
    }

    displayResult(score);
  });

  function displayResult(score) {
    resultMessage.textContent = `Votre score est de ${score} sur ${correctAnswers.length}.`;

    // Customize the messages based on the score
    if (score === correctAnswers.length) {
      resultMessage.textContent += " Félicitations, vous avez tout juste !";
    } else if (score === 0) {
      resultMessage.textContent += " Vous n'avez aucune réponse correcte. Révisez vos connaissances Pokémon.";
    } else {
      resultMessage.textContent += " Pas mal, mais vous pouvez faire mieux !";
    }

    // Customize colors based on the score
    if (score === correctAnswers.length) {
      resultDiv.style.backgroundColor = "#4caf50"; // Green
    } else if (score === 0) {
      resultDiv.style.backgroundColor = "#f44336"; // Red
    } else {
      resultDiv.style.backgroundColor = "#ffeb3b"; // Yellow
    }

    // Show the result section
    resultDiv.classList.remove("hidden");
  }

  retryButton.addEventListener("click", function() {
    // Hide the result section and reset the form
    resultDiv.classList.add("hidden");
    form.reset();
  });
});
