<?php

require_once './config/config.php'; // Ce fichier doit contenir l'initialisation de $bdd

class TaskController
{
    private $bdd;

    public function __construct($bdd) {
        $this->bdd = $bdd;
    }

    public function index() {
        $taskModel = new Task($this->bdd); // Passe la connexion à la base de données
        $tasks = $taskModel->getAllTasks();

        require 'views/tasks.php';
    }

    public function show($id) {
        // Logique pour afficher une tâche par son ID
        $taskModel = new Task($this->bdd); // Passe la connexion à la base de données
        $tasks = $taskModel->getAllTasks();
        
        // Assure-toi que $id correspond bien à l'indice d'une tâche
        if (isset($tasks[$id])) {
            $tasks = [$tasks[$id]];
        } else {
            $tasks = [];
        }

        require 'views/tasks.php';
    }
}
