<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire de tâches</title>
</head>
<body>
<h1>Liste des tâches</h1>
<ul>
<?php foreach ($tasks as $task): ?>
    <li><?php echo $task['title']; ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>