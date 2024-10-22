<?php

require_once './config/config.php';

class Task {
    private $bdd;

    public function __construct($bdd) {
        $this->bdd = $bdd; // Stocke la connexion dans un attribut
    }
    
    public function getAllTasks() {
        // Utilise $this->bdd pour accéder à la base de données
        $requeteSQL = $this->bdd->query('SELECT * FROM task');
        $tasks = $requeteSQL->fetchAll();
        return $tasks;
    }
}
