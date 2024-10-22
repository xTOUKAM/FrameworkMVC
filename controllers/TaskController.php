<?php
class TaskController
{
    public function index()
    {
        $taskModel = new Task;
        $tasks = $taskModel->getAllTasks();

        require 'views/tasks.php';
    }

    public function show($id)
    {
        // Logique pour afficher une tâche par son ID

        $taskModel = new Task;
        $task = $taskModel->getAllTasks();
        $tasks = [$task[$id]];
        require 'views/tasks.php';
    }
}
