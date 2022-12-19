<?php 
 $error_Date='';

  
   
        if(isset($_POST['dateEmission1']) && isset($_POST['dateEmission2']) && isset($_POST['dateDepart1'])
            && isset($_POST['dateDepart2']) && isset($_POST['dateRetour1']) && isset($_POST['dateRetour2']))
                
        if(!empty($_POST['dateEmission1']) && !empty($_POST['dateEmission2'])
        && !empty($_POST['dateDepart1']) && !empty($_POST['dateDepart2'])
        && !empty($_POST['dateRetour1']) && !empty ($_POST['dateRetour2']))
        {
            if($_POST['dateEmission2']<$_POST['dateEmission1'] ){
                $error_Date="les dates d'emissions ne correspondent pas ";

            } else if ($_POST['dateDepart2']<$_POST['dateDepart1'] ){
                $error_Date="Les dates de depart ne correspondent pas ";
            } else if($_POST['dateRetour2']<$_POST['dateRetour1']){
                $error_Date="Les dates de retour ne correspondent pas ";
            }
            
            else {
                session_start();
                header('Location:billetfrance.php');
                $_SESSION['dateEmission1'] = $_POST['dateEmission1'];
                $_SESSION['dateEmission2']=$_POST['dateEmission2'];
                $_SESSION['dateDepart1']=$_POST['dateDepart1'];
                $_SESSION['dateDepart2']=$_POST['dateDepart2'];
                $_SESSION['dateRetour1']=$_POST['dateRetour1'];
                $_SESSION['dateRetour2']=$_POST['dateRetour2'];
            }
        }
            
       
           
        
       
  