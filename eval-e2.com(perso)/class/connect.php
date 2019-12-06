<?php
// connexion base de données D-WEB

//mysqli_connect() - Pour ce connecter à la base de données
//mysqli_query() - Requête SQL permettant d'éxecuter une requête
//mysqli_fetch_assoc() - Permet de stocker les résultats d'une requête 


// informations sur la connexion
/*
-Localhost ou 127.0.0.1 ou bien google.com
                [IP]              [URL]
-User de connexion
-Password de connexion
-Database
*/

// Définir les constantes de connexion
define("SERVEUR", "localhost");
define("USER", "marsouin");
define("PASSWORD", "mrsma");
define("DATABASE", "dweb");



// connexion database
$mysqli= mysqli_connect();