<?php
session_start();

class ContactPage
{
    private $nom;
    private $email;
    private $message;

    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->nom = $_POST['nom'] ?? '';
            $this->email = $_POST['email'] ?? '';
            $this->message = $_POST['message'] ?? '';
            $this->traiterFormulaire();
        }
    }

    private function traiterFormulaire()
    {
        // Valider et traiter les données du formulaire de contact
        // Ajoutez votre code de traitement ici
    }

    public function afficherPage()
    {
        ob_start();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>DK-CASSE | Nous contacter</title>
        </head>
        <body>
            <div class="d-flex align-items-center flex-column">
                <h1 class="mt-5">Nous contacter</h1>

                <div class="card mt-5 mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control border border-dark" id="nom" name="nom" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control border border-dark" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control border border-dark" id="message" name="message" rows="5" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>

        </body>
        </html>

        <?php
        $content = ob_get_clean();
        require 'template.php';
    }
}

$contactPage = new ContactPage();
$contactPage->afficherPage();
?>
