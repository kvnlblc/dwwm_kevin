<?php ob_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Erreur 404 - Page non trouvée</title>
</head>
<body>
    <h1>Erreur 404 - Page non trouvée</h1>
    <p>Désolé, la page que vous recherchez n'a pas été trouvée.</p>
    <p>Veuillez vérifier l'URL ou retourner à la <a href="<?php echo URL; ?>accueil">page d'accueil</a>.</p>
</body>
</html>

<?php $content = ob_get_clean();
require 'template.php' ?>