<?php ob_start() ?>
<?php session_start() ?>

<center>
<form id='frm' name='frm' method='post' action='traducteur.php'>
    <button name="btn1" value="btn1" class="border-0">
        <img src="/images/france.jpg" alt="" height="50px">
    </button>
    <button name="btn2" value="btn2" class="border-0">
        <img src="/images/espagnol.png" alt="" height="50px">
    </button>
    <button name="btn3" value="btn3" class="border-0">
        <img src="/images/usa.png" alt="" height="50px">
    </button>
</form>
</center>


<?php
$action = '';
if (isset($_POST['btn1']))
    $action = 'action1';
elseif (isset($_POST['btn2']))
    $action = 'action2';
elseif (isset($_POST['btn3']))
    $action = 'action3';

switch ($action) {
    case "action1":
        echo "<h1 class='text-center'>Bienvenue sur mon site web</h1><br><p class='text-center'>Je suis en formation développeur web</p>";
        break;
    case "action2":
        echo "<h1 class='text-center'>Bienvenido a mi sitio web</h1><br><p class='text-center'>Me estoy formando para ser desarrollador web</p>";
        break;
    case "action3":
        echo "<h1 class='text-center'>Welcome to my website</h1><br><p class='text-center'>I am training to be a web developer</p>";
        break;

}

?>

<?php
$content = ob_get_clean();
require "template.php";

?>