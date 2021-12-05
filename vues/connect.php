<?php
                include_once('../requettes/Class/Manager.php');     



    if (isset($_POST['seConnecter'])) {
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        if (!empty($login) && !empty($pwd)){
            $utilisateur  = new Utilisateur;
            // $login = 'joachimk';
            // $pwd = 'joachim@k.com';

            $utilisateur->connexion($dbconn, $login, $pwd);

            if ($utilisateur->_idUtilisateur !='') {
                if ($utilisateur->_role == "admin") {
                    header('Location: admin/dashboard.php');
    
                }
                else{
                    header('Location: start.php');
    
                }
            }
            else{
                header('Location: ../index.php');
            }
        
        }
        else{
            echo 'Remplir les champs !!!';
        }
    }
?>