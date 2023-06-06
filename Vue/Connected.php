<?php
    define('DB_SERVER', 'mysql-poo.alwaysdata.net');
    define('DB_USERNAME', 'poo_geni');
    define('DB_PASSWORD','Najmety15');
    define('DB_NAME', 'poo_sql');

        // Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
session_start();
// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
    ?>
    
