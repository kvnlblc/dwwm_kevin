<?php ob_start() ?>
<?php session_start() ?>


<?php


if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'fr';
}

if (isset($_POST['lang'])) {
    setcookie('lang', $_POST['lang'], time() + 365 * 24 * 60 * 60);
    header('Location: index.php');
    exit();
}
?>


<center>
<?php
if ($lang == 'fr') {
    include "francais.php";
} elseif ($lang == 'en') {
    include "anglais.php";
} elseif ($lang == 'es') {
    include "espagnol.php";
}
?>


<form method="post">
    <label for="lang">Langues :</label>
    <select name="lang" id="lang">
        <option value="fr" <?php if ($lang == 'fr') ?>>Français</option>
        <option value="en" <?php if ($lang == 'en') ?>>Anglais</option>
        <option value="es" <?php if ($lang == 'es') ?>>Español</option>
    </select>
    <button type="submit" class="btn btn-success">Sauvegarder</button>
</form>


</center>


<?php
$content = ob_get_clean();
require "template.php";

?>