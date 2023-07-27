<!DOCTYPE html>
<html>
<head>
  <title>Affichage de la météo</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="loader">Chargement en cours...</div>
  <div id="weather-info" style="display:none;">
    <h2 id="city"></h2><span id="country"></span>
    <p><span id="temperature"></span>°<p>
    <img id="weather-icon">
  </div>
  <div id="error-msg" style="display:none;">Erreur lors de la récupération des données.</div>

  <script src="script.js"></script>
</body>
</html>
