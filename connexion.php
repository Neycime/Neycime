<?php

$host = 'localhost';
$bdd = 'sornas_202122_SIO1';
$user = 'root';
$pwd = 'root';

try{ // Essayer
	$co = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);
}
catch(Exception $e){ // Capter l'erreur
	die( $e->getMessage() );
}

?>