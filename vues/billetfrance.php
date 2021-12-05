

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/printBillet.css" media="print">
    <link rel="stylesheet" href="../css/AfficheBillet.css" media="all">
    <link rel="stylesheet" href="../css/menulogin.css">
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.1/underscore-umd-min.js"></script>
    <title>Billet France</title>
</head>
<body>
<header>
    
                

    
        <?php
                //session_start();
                require_once '../requettes/Class/Manager.php';
                $_SESSION['pays']='FRANCE';
                if (isset($_POST['demarrer'])) {
                    if (!empty($_POST['date_de_session'])) {
                        $manager = new Manager;
                        //___ajout de la session dans la base de donnees
                        $_SESSION['sessionName'] = $manager->ajouterSession($dbconn,$_POST['date_de_session']);
                        header('Location:formulaire.php');
                    }
                    else{
                        //___si l'utilisateur s electionne une session existante
                       $_SESSION['sessionName'] = $_POST['session_selectionne'];
                       header('Location:formulaire.php'); 

                    }
                  
                }
                include('../requettes/info.php');
                if (isset($_POST['impression'])) { 

                    $nom_user = $_SESSION['nom_user'];
                    $resident = $_SESSION['resident'];
                    $matricule = $_SESSION['matricule'];
                    $profession = $_SESSION['profession'];
                    //___billet d'avion
                    $depart = $_SESSION['depart'];
                    $retour = $_SESSION['retour'];
                    $destination = $_SESSION['pays'];
                    //___transaction
                    $origineFonds = $_SESSION['origineFonds']= 'Epargne';
                    $dateEmission=$_SESSION['dateEmission'];
                    $paysEmission =$_SESSION['paysEmission'];
                    $manager = new Manager;
                    echo $manager-> effectuerEnregistrement($dbconn,$matricule,$nom_user,$profession,$resident,$depart,$retour,$destination,$paysEmission,$origineFonds,$dateEmission);
 
                }
                
                include('headerBillet.php');
                
                include('../requettes/ReceveDate.php');
                
               
        ?>
    </header>

    <style type="text/css">
#watermark {
  color: #d0d0d0;
  font-size: 200pt;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  position: absolute;
  width: 100%;
  height: 100%;
  margin: 0;
  z-index: -1;
  left:-100px;
  top:-200px;

}
</style>

<style type="text/css" media="print">
#watermark
{ display: none; }
</style>

<div id="watermark">
<p>FRANCE</p>
</div>
    
    <div class="dvContainer" id="dvContainer" style="font-family: 'Courier New', Courier, monospace;">
 
        <div class="contain">
            <div class="smsa">     
                AMARINA WIN
            </div>
            <div style="text-transform:uppercase" class="div2" id="results">
                BOOKING REF : <?php  echo  $function1 ; ?>
            </div>
        </div>
        <div class="contain2">
            <div>
                BP : DOUALA
            </div>
            <div style="text-transform:uppercase" class="div3" id="div3">
                 DATE :  <?php echo dateEmission( $_SESSION['dateEmission1'] , $_SESSION['dateEmission2'] );?> 
            </div>
        </div>
        <div class="contain3">
            <div>
                BONANJO
            </div>
            <div style="text-transform:uppercase" class="div4" id="div4">
                NOM :<?php 
                            if(isset($_POST['nom']) && !empty($_POST['nom'])){

                                echo $_POST['nom'];
                            }
                ?>
            </div>
        </div>
        <div class="contain4">
            <div>
                TELEPHONE: +33 587 457 412
            </div>
            
        </div>
        <div class="contain5">
            <div>
                FAX : +33 254 211 225
            </div>
            
        </div>
        <div class="contai">
            <div>
                EMAIL : AMARINAWINTRAVEL@GMAIL.COM
            </div>
            
        </div>
        <div class="iss" style="margin:10px; display: flex; margin-top: 25px;">
        <div>
            ISSUING AIRLINE:
        </div>
        <div class="div6">
            AIR FRANCE
        </div>
            
        </div>
        <div class="tin" style="margin:10px; display: flex;">
            <div>
                TICKET NUMBER:
            </div>
            <div class="div6" id="etkt">
               ETKT 057 <?php echo  $function2; ?>
            </div>
        </div>
        <div style="text-transform:uppercase" class="bre" style="margin:10px; display: flex; width:100%">
            <div>
                BOOKING REF : <?php  echo  $function1 ; ?> , AMADEUS : <?php  echo  $function1 ; ?>
            </div>
            <div id="tbk">
                
            </div>
            
            <div class="" id="tbp">
                
        </div>
        </div>
        
        <div class="contain6">
            <div>
                FLIGHT 
            </div>
            
            <div>
                &nbsp; AF 679 - AIR FRANCE
            </div>
            <div style="text-transform:uppercase"class="div6" id="div6" style="margin-left: 260px;">
            <?php
                       $dateDepart = dateDepart($_SESSION['dateDepart1'],$_SESSION['dateDepart2']);
                       echo $dateDepart[0];
            ?> 
            </div>
        </div>
        <div class="contain7">
            <div>
                -----------------------------------------------------------------------
            </div>
            
        </div>
        <div class="contain8">
            <div>
                DEPATURE: 
            </div>
            <div>
                DOUALA, CM (DOUALA INTL)
            </div>
            <div class="div8" id="div8">
            <?php
              echo $dateDepart[1]; 
            ?> 23:50
            </div>
        </div>
        <div class="contain9">
            <div>
                ARRIVAL: PARIS, CHARLES DE GAULLE, TERMINAL 1
            </div>
            <div class="div9" id="div9">
                <?php   echo $date = date("d M", strtotime("+1 day", strtotime($dateDepart[1])));?> 06:30
            </div>
        </div>
        <div class="contain10">
            <div style="text-transform:uppercase" class="Fbooking" id="fbooking">
                FLIGHT BOOKING REF: FR/<?php  echo  $function1 ; ?>
            </div>
        </div>
        <div class="contain11">
            <div class="Freserv">
                RESERVATION CONFIRMED, ECONOMY (V)
            </div>
            <div class="div11">
                DURATION: 06:40
            </div>
        </div>
        <div>
            - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
        </div>
        <div class="contain10">
            <div class="Freserv">
            BAGGAGE ALLOWANCE:
            </div>
            <div class="div11">
                1PC
            </div>
        </div>
        <div class="contain10">
            <div class="Freserv">
            MEAL:
            </div>
            <div class="div11">
                SNACK/MEAL
            </div>
        </div>
        <div class="contain12">
            <div>
                NON STOP DOUALA TO PARIS 
            </div>
        </div>
        <div class="contain13">
            <div class="oby">
                OPERATED BY:
            </div>
            <div class="div13">
                AIR FRANCE, FR
            </div>
        </div>
        <div class="contain14">
            <div class="equip">
                EQUIPMENT:
            </div>
            <div class="div14">
                BOEING 737-900
            </div>
        </div>
        <div class="contain15">
            <div>
                FLIGHT 
            </div>
            <div>
                &nbsp;  AF 958 - AIR FRANCE
            </div>
            <div style="text-transform:uppercase" class="div15" id="div15">
            <?php 
                          $dateRetour = dateRetour($_SESSION['dateRetour1'],$_SESSION['dateRetour2']);
                          echo $dateRetour[0];
            
            ?> 
            </div>
        </div>
        <div class="contain16">
            <div>
                ------------------------------------------------------------------------
            </div>
         </div>
        </div>
        <div class="contain8">
            <div>
                DEPATURE: 
            </div>
            <div>
                PARIS, FR (CHARLES DE GAULLE), TERMINAL 2E-
            </div>
            <div class="divN" id="divN">
            <?php 
                echo $date = date("d M", strtotime("+0 day", strtotime($dateRetour[1])));
            
            ?>  10:30
            </div>
        </div>
        <div class="contain9">
            <div>
                ARRIVAL: DOUALA, CM (DOUALA INTL)
            </div>
            <div class="divY" id="divY">
            <?php 
                echo $date = date("d M", strtotime("+0 day", strtotime($dateRetour[1])));
            
            ?>  17:20
            </div>
        </div>
        <div class="contain10">
            <div style="text-transform:uppercase" class="Fbooking" id="pbooking">
                FLIGHT BOOKING REF: FR/<?php  echo  $function1 ; ?>
            </div>
        </div>
        <div class="contain11">
            <div class="Freserv">
                RESERVATION CONFIRMED, ECONOMY (Q)
            </div>
            <div class="div11">
                DURATION: 06:50
            </div>
        </div>
        <div>
            - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
        </div>
        <div class="contain10">
            <div class="Freserv">
            BAGGAGE ALLOWANCE:
            </div>
            <div class="div11">
                1PC
            </div>
        </div>
        <div class="contain10">
            <div class="Freserv">
            MEAL:
            </div>
            <div class="div11">
                SNACK/MEAL
            </div>
        </div>
        <div class="contain12">
            <div>
                NON STOP PARIS TO DOUALA 
            </div>
        </div>
        <div class="contain13">
            <div class="oby">
                OPERATED BY:
            </div>
            <div class="div13">
                AIR FRANCE, FR
            </div>
        </div>
        <div class="contain14">
            <div class="equip">
                EQUIPMENT:
            </div>
            <div class="div14">
                BOEING 737-900
            </div>
        </div>
    </div>
    <form method="POST"action="">
        <input id="impression" name="impression" type="submit" onclick="imprimer_page()" value="Imprimer cette page"/>
    </form>
    <div id="fbl">
    <?php
            include('formBillet.php')
    ?>
    </div>
    <script>
        function imprimer_page(){
            window.print();
        }
    </script>

</body>
</html>