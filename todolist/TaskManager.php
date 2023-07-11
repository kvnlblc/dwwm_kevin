<?php

require_once 'config.php';

class TaskManager {
    private $db;
    
    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
            exit();
        }
    }
    
    public function addTask($description) {
        try {
            $stmt = $this->db->prepare('INSERT INTO tasks (description) VALUES (?)');
            $stmt->execute([$description]);
        } catch (PDOException $e) {
            echo 'Erreur lors de l\'ajout de la tâche : ' . $e->getMessage();
            exit();
        }
    }
    
    public function getTasks() {
        try {
            $stmt = $this->db->query('SELECT * FROM tasks');
            $tasks = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $task = new Task($row['id'], $row['description']);
                $tasks[] = $task;
            }
            return $tasks;
        } catch (PDOException $e) {
            echo 'Erreur lors de la récupération des tâches : ' . $e->getMessage();
            exit();
        }
    }
    
    public function updateTask($taskId, $newDescription) {
        try {
            $stmt = $this->db->prepare('UPDATE tasks SET description = ? WHERE id = ?');
            $stmt->execute([$newDescription, $taskId]);
        } catch (PDOException $e) {
            echo 'Erreur lors de la mise à jour de la tâche : ' . $e->getMessage();
            exit();
        }
    }
    
    public function deleteTask($taskId) {
        try {
            $stmt = $this->db->prepare('DELETE FROM tasks WHERE id = ?');
            $stmt->execute([$taskId]);
        } catch (PDOException $e) {
            echo 'Erreur lors de la suppression de la tâche : ' . $e->getMessage();
            exit();
        }
    }
}
