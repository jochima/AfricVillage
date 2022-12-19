<?php
	include_once('../requettes/Class/Manager.php');
	$session = new Session;
	$idMandataire = $_GET['id'];
	$nomSession = $_GET['s'];
	$statut = $session->getStatut($dbconn, $nomSession);
	$montant = $_GET['mnt'];
	$manager = new Manager;
	if ($statut == 1) {
		$stmt = $manager->supprimerEnregistrement($dbconn, $nomSession, $idMandataire, $montant);
		if ($stmt) {
			$_SESSION['msg'] = "SUPPRESSION REUSSI !!!";
			header('Location: tableau0.php?&s='.$nomSession);
		}else{
			$_SESSION['msg'] = "FATAL ERROR : supprimerEnregistrement($, $, $, $)";
		}
	}
	else
	{var_dump($statut);
		$_SESSION['msg'] = "ATTENTION : VOUS NE POUVEZ PAS EFFECTUER DES MODIFICATION, CAR CETTE SESSION A ETE VEROUILLE !";
		header('Location: tableau0.php?&s='.$nomSession);
	}
?>