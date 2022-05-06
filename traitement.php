<?php
echo $_POST['Nom'];

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sauvegarde du formulaire</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <?php

    $erreur=false;

   if($_POST['NOM']!=""){
       echo"<p>".$_POST['NOM']."</p>";
   }
   else{
    $erreur=true;
       echo"<p>Merci de renseigner un nom</p>";
   }
   if($_POST['prenom']!=""){
    echo"<p>".$_POST['prenom']."</p>";
}
else{
    $erreur=true;
    echo"<p>Merci de renseigner un prenom</p>";
}
if($_POST['email']!=""){
    echo"<p>".$_POST['email']."</p>";
}
else{
    $erreur=true;
    echo"<p>Merci de renseigner un email</p>";
}
if($_POST['message']!=""){
    echo"<p>".$_POST['message']."</p>";
}
else{
    $erreur=true;
    echo"<p>Merci de renseigner un message</p>";
}
if($_POST['email']!=''){
    echo"<p class ='succes'>".$_POST['email']."</p>";
}
else{
    $erreur=true;
    echo"<p class='erreur'> Merci de renseigner un email</p>";
}
if($_POST['message']!=''){
    echo"<p class ='succes'>".$_POST['message']."</p>";
}
else{
    $erreur=true;
    echo"<p class='erreur'> Merci de renseigner un message</p>";
}
if($_POST['NOM']!=''){
    echo"<p class ='succes'>".$_POST['NOM']."</p>";
}
else{
    $erreur=true;
    echo"<p class='erreur'> Merci de renseigner un nom</p>";
}
if($_POST['prenom']!=''){
    echo"<p class ='succes'>".$_POST['prenom']."</p>";
}
else{
    $erreur=true;
    echo"<p class='erreur'> Merci de renseigner un prenom</p>";
}
 if($erreur==true){
     echo"<p><a href='index.html'>Retour au formulaire</a></p>";
 }
 else{
     //Sauvegarde en base de données
     $host ='localhost';
     $bdd ='php-doc';
     $user ='root';
     $pwd ='root';
     try{// Essayer
     $co = new PDO('mysql:host='.$host.'dbname='.$bdd,
    $user,$pwd);
     }
     catch(Exception $e){//Capter l'erreur
         die( $e->getMessage() );
     }

 }

?>