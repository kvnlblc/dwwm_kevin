<?php
require_once 'Task.php';
require_once 'TaskManager.php';

$taskManager = new TaskManager();

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['task_id'];
    $newDescription = $_POST['description'];

    // Mettre à jour la tâche
    $taskManager->updateTask($taskId, $newDescription);

    // Rediriger vers la page principale
    header('Location: index.php');
    exit();
}

// Récupérer l'identifiant de la tâche à mettre à jour
$taskId = $_GET['task_id'];

// Récupérer la tâche correspondante
$tasks = $taskManager->getTasks();
$task = null;
foreach ($tasks as $t) {
    if ($t->getId() == $taskId) {
        $task = $t;
        break;
    }
}

// Vérifier si la tâche existe
if (!$task) {
    echo 'Tâche non trouvée';
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Mise à jour de la tâche</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="update" <h1>Mise à jour de la tâche</h1>
            <form method="POST" action="update.php">
                <input type="hidden" name="task_id" value="<?php echo $task->getId(); ?>">
                <label>Description:</label>
                <input type="text" name="description" value="<?php echo $task->getDescription(); ?>">
                <button type="submit">Mettre à jour</button>
            </form>
        </div>
</body>

<footer>KEVIN LIBLANC - Tous droits réservés</footer>

</div>


</html>