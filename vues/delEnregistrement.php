<?php
	include_once('../requettes/Class/Manager.php');
	$idMandataire = $_GET['id'];
	$nomSession = $_GET['s'];
	$montant = $_GET['mnt'];
	$manager = new Manager;
	$stmt = $manager->supprimerEnregistrement($dbconn, $nomSession, $idMandataire, $montant);
	if ($stmt) {
		$_SESSION['msg'] = "SUPPRESSION REUSSI !!!";
		header('Location: tableau0.php?&s='.$nomSession);
	}else{
		echo $stmt;
	}
?>