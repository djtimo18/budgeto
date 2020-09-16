<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
$server = "localhost";
define('DB_USERNAME', 'root');
$user = "root";
define('DB_PASSWORD', '');
$password = "";
define('DB_NAME', 'digityx-budget');
$database = "digityx-budget";
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$bdd = new PDO("mysql:host=$server;dbname=$database;charset=utf8", $user, $password);
 

//Fonction Random
$n = 18;
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 

// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>