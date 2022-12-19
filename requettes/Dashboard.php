<?php 

include('connect.php');
// code permettand d'avoir le nombre d'utiisateur
$nombreUser = "SELECT * FROM  utilisateur";
$nombreUsers = $bdd->query($nombreUser);
$resultatnombre= $nombreUsers->fetch();
$req=$nombreUsers->rowCount();

// code permettand d'avoir le nombre de sessions

$nombreSession = 'SELECT *  FROM  session ';
$nombreSessions = $bdd->query($nombreSession);
$reqNombre = $nombreSessions->fetch();
$numberSession = $nombreSessions->rowCount();

// code permettand d'avoir le nombre de justifs

$nombreJustif ='SELECT *  FROM mandataire';
$nombreJustifs = $bdd->query($nombreJustif);
$reqJustif = $nombreJustifs->fetch();
$numberJustif= $nombreJustifs->rowCount();





