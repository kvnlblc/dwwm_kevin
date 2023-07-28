<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Pokémon</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="quiz-container">
    <h1>Quiz Pokémon</h1>
    <form id="quiz-form">
  <h2>Question 1: Quel Pokémon évolue en Pikachu ?</h2>
  <label>
    <input type="radio" name="q1" value="bulbasaur">Bulbasaur
  </label>
  <label>
    <input type="radio" name="q1" value="pichu">Pichu
  </label>
  <label>
    <input type="radio" name="q1" value="squirtle">Squirtle
  </label>
  <label>
    <input type="radio" name="q1" value="charmander">Charmander
  </label>

  <h2>Question 2: Quel Pokémon est aussi connu sous le nom de Gruikui ?</h2>
  <label>
    <input type="radio" name="q2" value="chimchar">Chimchar
  </label>
  <label>
    <input type="radio" name="q2" value="piplup">Piplup
  </label>
  <label>
    <input type="radio" name="q2" value="oshawott">Oshawott
  </label>
  <label>
    <input type="radio" name="q2" value="tepig">Tepig
  </label>

  <h2>Question 3: Lequel de ces Pokémon est un type Feu ?</h2>
  <label>
    <input type="radio" name="q3" value="vaporeon">Vaporeon
  </label>
  <label>
    <input type="radio" name="q3" value="flareon">Flareon
  </label>
  <label>
    <input type="radio" name="q3" value="jolteon">Jolteon
  </label>
  <label>
    <input type="radio" name="q3" value="espeon">Espeon
  </label>

  <!-- Add more questions here -->

  <button type="submit">Valider</button>
</form>


    <div id="result" class="hidden">
      <h3>Résultat</h3>
      <p id="result-message"></p>
      <button id="retry-button">Réessayer</button>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
