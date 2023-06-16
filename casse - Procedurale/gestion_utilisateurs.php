<?php ob_start() ?>
<?php session_start(); ?>


<?php
// Vérifier si l'utilisateur est connecté et a le grade d'administrateur
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true || $_SESSION['grade'] !== 1) {
    // Rediriger vers une page d'erreur ou de connexion
    header("Location: index.php");
    exit;
}

// Inclure le fichier de connexion à la base de données
include('bdd.php');

// Vérifier si le formulaire de modification a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si l'action est une modification de grade
    if (isset($_POST['action']) && $_POST['action'] === 'modify_grade') {
        // Récupérer les données du formulaire
        $userId = $_POST['user_id'];
        $newGrade = $_POST['new_grade'];
        
        // Mettre à jour le grade de l'utilisateur dans la base de données
        $sql = "UPDATE utilisateurs SET grade = '$newGrade' WHERE id = '$userId'";
        if ($conn->query($sql) === true) {
            echo "Le grade de l'utilisateur a été modifié avec succès.";
        } else {
            echo "Erreur lors de la modification du grade de l'utilisateur : " . $conn->error;
        }
    }
    
    // Vérifier si l'action est une suppression d'utilisateur
    if (isset($_POST['action']) && $_POST['action'] === 'delete_user') {
        // Récupérer l'ID de l'utilisateur à supprimer
        $userId = $_POST['user_id'];
        
        // Supprimer l'utilisateur de la base de données
        $sql = "DELETE FROM utilisateurs WHERE id = '$userId'";
        if ($conn->query($sql) === true) {
            echo "L'utilisateur a été supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression de l'utilisateur : " . $conn->error;
        }
    }
}

// Requête SQL pour récupérer tous les utilisateurs
$sql = "SELECT id, nom, prenom, email, grade FROM utilisateurs";
$result = $conn->query($sql);

// Vérifier si des utilisateurs sont présents
if ($result->num_rows > 0) {
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Parcourir les utilisateurs et afficher les informations dans le tableau
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <form method="POST" action="gestion_utilisateurs.php">
                        <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                        <div class="input-group">
                            <select class="form-select" name="new_grade">
                                <option value="0" <?php if ($row['grade'] == 0) echo 'selected'; ?>>Utilisateur</option>
                                <option value="1" <?php if ($row['grade'] == 1) echo 'selected'; ?>>Administrateur</option>
                            </select>
                            <button class="btn btn-primary" type="submit" name="action" value="modify_grade">Modifier</button>
                        </div>
                    </form>
                    <form method="POST" action="gestion_utilisateurs.php" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                        <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                        <button class="btn btn-danger" type="submit" name="action" value="delete_user">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <?php
} else {
    echo "Aucun utilisateur trouvé.";
}

// Fermer la connexion à la base de données
$conn->close();
?>









<?php $content = ob_get_clean();
require 'template.php' ?>