<?php
// connexion à la bdd
try {
    $db = new PDO("mysql:host=localhost;dbname=my_music_login", 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    die('Erreur de connexion: ' . $err->getMessage());
}
