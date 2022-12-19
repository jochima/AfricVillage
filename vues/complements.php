<?php

if (!isset($_SESSION['idUser'])) {
	header('Location:../index.php');
	
}