<?php
require_once 'Task.php';
require_once 'TaskManager.php';

$taskManager = new TaskManager();

// Vérifier si le formulaire a été soumis pour la suppression
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete_tasks'])) {
        $tasksToDelete = $_POST['delete_tasks'];

        foreach ($tasksToDelete as $taskId) {
            $taskManager->deleteTask($taskId);
        }

        // Rediriger vers la page principale
        header('Location: index.php');
        exit();
    }
}

// Vérifier si le formulaire a été soumis pour l'ajout d'une tâche
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['description'])) {
    $description = $_POST['description'];

    // Ajouter la tâche
    $taskManager->addTask($description);

    // Rediriger vers la page principale
    header('Location: index.php');
    exit();
}

// Récupérer la liste des tâches
$tasks = $taskManager->getTasks();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gestion des tâches</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="liste">
            <h1>Liste des tâches</h1>
            <form method="POST" action="index.php">
                <ul>
                    <?php foreach ($tasks as $task) : ?>
                        <li>
                            <input type="checkbox" name="delete_tasks[]" value="<?php echo $task->getId(); ?>">
                            <?php echo $task->getDescription(); ?>
                            <a href="update.php?task_id=<?php echo $task->getId(); ?>">- Modifier</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <button type="submit">Supprimer les tâches sélectionnées</button>
            </form>
        </div>
        <div class="ajout">
            <h2>Ajouter une tâche</h2>
            <form method="POST" action="index.php">
                <input type="text" name="description" placeholder="Description de la tâche" required>
                <button type="submit" name="add_task">Ajouter</button>
            </form>
        </div>


</body>

<footer>KEVIN LIBLANC - Tous droits réservés</footer>
</div>

</html>