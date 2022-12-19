<?php
include_once('../requettes/Class/Manager.php');     
$toDay = date('Y-m-d');
$lastDay = date('Y-m-d',strtotime('2022-01-17'));
//$lastDay = date('Y-m-d',strtotime('2021-01-17'));



//var_dump($day);

/*if ($toDay>=$lastDay) {
  $_SESSION['msg'] = "ATTENTION : une erreur c'est produite lors de la vérification...veuillez reéssayer!";
  header('Location: ../index.php');
}
else{*/
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
//}



    
?>