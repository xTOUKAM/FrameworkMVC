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
    try {
        $bdd = new PDO(
            'mysql:host=' . $env['DB_HOST'] . ';dbname=' . $env['DB_NAME'] . ';charset=utf8',
            $env['DB_USER'],
            $env['DB_PASSWORD']
        );
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
?>