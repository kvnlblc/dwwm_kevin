<?php ob_start() ?>
<?php session_start();

// Supprimer la variable de session
unset($_SESSION['loggedIn']);

// Rediriger l'utilisateur vers une page appropriée (par exemple, la page d'accueil)
header("Location: index.php");
exit;

?>
<?php $content = ob_get_clean();
require 'template.php' ?>