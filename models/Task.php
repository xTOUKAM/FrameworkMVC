<?php
class Task {
    public function getAllTasks() {
        // COn peut mettre ici le code nécessaire pour récupérer toutes les tâches depuis la base de données
        $tasks = array(
            array('id' => 1, 'title' => 'Suivre les cours associés à PHP'),
            array('id' => 2, 'title' => 'Comprendre le principe du MVC'),
            array('id' => 3, 'title' => 'Concevoir une base données'),
            array('id' => 4, 'title' => 'Gérer le CRUD'),
            array('id' => 5, 'title' => 'Ajouter meles fonctionnalités du projet'),
        );
        return $tasks;
    }
}