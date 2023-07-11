<?php

require_once 'Task.php';
require_once 'TaskManager.php';

$taskManager = new TaskManager();

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['task_id'];

    // Supprimer la tâche
    $taskManager->deleteTask($taskId);

    // Rediriger vers la page principale
    header('Location: index.php');
    exit();
}

// Récupérer l'identifiant de la tâche à supprimer
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
    <title>Suppression de la tâche</title>
</head>
<body>
    <h1>Suppression de la tâche</h1>
    <p>Êtes-vous sûr de vouloir supprimer la tâche : <?php echo $task->getDescription(); ?> ?</p>
    <form method="POST" action="delete.php">
        <input type="hidden" name="task_id" value="<?php echo $task->getId(); ?>">
        <button type="submit">Supprimer</button>
    </form>
</body>
</html>
