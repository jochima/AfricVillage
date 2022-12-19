<?php 
    include('header.php'); 
    $s = $_GET['s'];
    $session = new Session;

    $tj = $session->activerSession($dbconn, $s);

    
        header('Location: listsession.php');
    

?>