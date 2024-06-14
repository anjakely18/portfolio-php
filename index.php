<?php
include_once 'classes/Database.php';

//Créer une instance de la classe Database
$database = new Database();
$db = $database->connect();     //Obtenir la connexion à la PDO

//Vérification si la connexion a réussi
if ($db) {
    echo 'Connexion réussie !';
} else {
    echo 'Echec de la connexion';
}
