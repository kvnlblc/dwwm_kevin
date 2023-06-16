<?php ob_start() ?>
<?php session_start(); ?>


<title>DK-CASSE | Administration</title>

<a href="gestion_utilisateurs.php">Gestion utilisateurs</a>



<?php $content = ob_get_clean();
require 'template.php' ?>