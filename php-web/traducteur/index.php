<?php ob_start() ?>
<?php session_start() ?>

<center>
<form id='frm' name='frm' method='post' action='index.php'>
    <button name="btn1" value="btn1" class="border-0">
        <img src="./images/france.jpg" alt="" height="50px">
    </button>
    <button name="btn2" value="btn2" class="border-0">
        <img src="./images/espagnol.png" alt="" height="50px">
    </button>
    <button name="btn3" value="btn3" class="border-0">
        <img src="./images/usa.png" alt="" height="50px">
    </button>
</form>
</center>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Cum mollitia, dicta accusamus a cupiditate quam perspiciatis error voluptate,<br> maxime eius vitae distinctio deserunt! Culpa atque, unde vitae fuga quaerat aperiam!</p>

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
        include "francais.php";
        break;
    case "action2":
        include "espagnol.php";
        break;
    case "action3":
        include "usa.php";
        break;

}

?>


<?php
$content = ob_get_clean();
require "template.php";

?>