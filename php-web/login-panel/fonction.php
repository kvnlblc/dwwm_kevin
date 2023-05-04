<?php

function isUserID($mail) {
    if (preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $mail)) {
      echo "Vous êtes connecté à " .$mail;
    } else {
      echo "Erreur de login";
    }
  }   

?>