<?php
    $envFile = __DIR__ . '/.env';

    // Vérifie si le fichier .env existe
    if (!file_exists($envFile)) {
        throw new Exception("Le fichier .env n'existe pas");
    }

    // Récupère les variables d'environnement
    $env = parse_ini_file($envFile);

    // Vérifie si les variables d'environnement nécessaires sont définies
    if (!isset($env['DB_HOST'], $env['DB_NAME'], $env['DB_USER'], $env['DB_PASSWORD'])) {
        throw new Exception("Le fichier .env ne contient pas toutes les variables nécessaires");
    }

    // Connexion à la base de données
    $db = new PDO(
        "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']};charset=utf8",
        $env['DB_USER'],
        $env['DB_PASSWORD'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // Définit le mode d'erreur PDO sur Exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Définit le mode de récupération par défaut sur FETCH_ASSOC
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>