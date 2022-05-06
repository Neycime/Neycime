<?php

$id = $_GET['id'];      // recupère l'id passé en url

echo $id

include 'connexion.php'; // connexion à la base de données

$sql = "SELECT * FROM contact WHERE id = id = $id";
//prepapre la requete
$select = $co->prepare($sql);
//execute la requete





if($contact == false){
    echo "<p>Contact introuvable</p>";
    echo "<p><a href='contact.php'>"
}