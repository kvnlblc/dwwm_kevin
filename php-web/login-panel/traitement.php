<? ob_start() ?>

<?php


$mail = $_POST["mail"];
$password = $_POST["password"];
$pattern_mail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
$pattern_mdp = "/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,}$/";

?>

<div class="card mt-5" style="width: 18rem;">
    <div class="card-body">
        <h1>Panel de connexion</h1>
        <form action="traitement.php" method="POST">
            <div class="mb-3">
                <label for="mail">Email</label>
                <input type="mail" class="form-control" placeholder="Entrer votre Email" id="mail" name="mail">
            </div>
            <div class="mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" placeholder="Entrer votre mot de passe" id="password"
                    name="password">
            </div>
            <button type="submit" value="connexion" class="btn btn-primary">Connexion</button>
            <?php if (preg_match($pattern_mail, $mail) && preg_match($pattern_mdp, $password)) {
                echo '<br><br><div class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Bravo !</strong> Connexion réussi.
                  </div>';
                $time_out = 2;
                header("refresh: $time_out; url=https://google.fr");
            } else {
                echo '<br><br><div class="alert alert-dismissible alert-danger">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Erreur !</strong> L\'adresse mail ou le mot de passe est incorrect !
                      </div>';
            } ?>


        </form>
    </div>
</div>


<?php $content = ob_get_clean();
require "template.php";
?>