<?php 

        if(!empty($_POST['dateEmission1']) && !empty($_POST['dateEmission2'])
                    && !empty($_POST['dateDepart1']) && !empty($_POST['dateDepart2'])
                    && !empty($_POST['dateRetour1']) && !empty ($_POST['dateRetour2']))
                    {
echo $_POST['dateEmission1'];
                    session_start();
                    header('Location:billetfrance.php');
                    $_SESSION['dateEmission1'] = $_POST['dateEmission1'];
                    $_SESSION['dateEmission2']=$_POST['dateEmission2'];
                    $_SESSION['dateDepart1']=$_POST['dateDepart1'];
                    $_SESSION['dateDepart2']=$_POST['dateDepart2'];
                    $_SESSION['dateRetour1']=$_POST['dateRetour1'];
                    $_SESSION['dateRetour2']=$_POST['dateRetour2'];

                

            
        }
?>