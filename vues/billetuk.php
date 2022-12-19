<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/printBillet.css" media="print">
    <link rel="stylesheet" href="../css/AfficheBillet.css" media="all">
    <link rel="stylesheet" href="../css/menulogin.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.1/underscore-umd-min.js"></script>
    <title>Billet Angleterre</title>
</head>
<body>
<header>

                

    
<?php 
//session_start();
require_once '../requettes/Class/Manager.php';
require_once 'complements.php';
$_SESSION['pays']='ANGLETERRE';
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
    $_SESSION['msg'] = $manager-> effectuerEnregistrement($dbconn,$matricule,$nom_user,$profession,$resident,$depart,$retour,$destination,$paysEmission,$origineFonds,$dateEmission);

}

include('headerBillet.php');

include('../requettes/ReceveDate.php');

?>
    </header>

    <style type="text/css">
#watermark {
    color: #d0d0d0;
  font-size: 100pt;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  position: absolute;
  width: 100%;
  height: 100%;
  margin: 0;
  z-index: -1;
  left:-100px;
  top:-200px;
  margin-left:200px;


}
</style>

<style type="text/css" media="print">
#watermark
{ display: none; }
</style>

<div id="watermark">
<p>ANGLETERRE</p>
</div>
    
    <div class="dvContainer" id="dvContainer" style="font-family: 'Courier New', Courier, monospace;font-size: 20px;">
 
        <div class="contain">
            <div class="smsa">     
               SAMANSA TRAVEL
            </div>
            <div class="div2" id="results">
                BOOKING REF : <?php  echo  $function1 ; ?>
            </div>
        </div>
        <div class="contain2">
            <div>
                BP : DOUALA
            </div>
            <div class="div3" id="div3">
                DATE : <?php echo dateEmission( $_SESSION['dateEmission1'] , $_SESSION['dateEmission2'] );?>
            </div>
        </div>
        <div class="contain3">
            <div>
                BONABERI
            </div>
            <div class="div4" id="div4">
            NOM :<?php 
                            if(isset($_POST['nom']) && !empty($_POST['nom'])){

                                echo $_POST['nom'];
                            }
                ?>
            </div>
        </div>
        <div class="contain4">
            <div>
                TELEPHONE: +237 23342 23 45
            </div>
            
        </div>
        <div class="contain5">
            <div>
                FAX : +33 254 211 225
            </div>
            
        </div>
        <div class="contai">
            <div>
                EMAIL : SAMANSATRAVEL@GMAIL.COM
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
                TICKET NUMBER
            </div>
            <div class="div6" id="etkt">
                :ETKT 057 60035244514
            </div>
        </div>
        <div class="bre" style="margin:10px; display: flex; width:100%">
            <div>
                BOOKING REF : AMADEUS : <?php  echo  $function1 ; ?>
            </div>
            <div id="tbk">
                
            </div>
            , AIRLINE: AF /<?php  echo  $function1 ; ?>
            <div class="" id="tbp">

            </div>
        </div>
        
        <div class="contain6">
            <div>
                FLIGHT 
            </div>
            
            <div>
                &nbsp; AF 982 - AIR FRANCE
            </div>
            <div class="div6" id="div6" style="margin-left:280px; text-align: right;">
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
            <?php echo $dateDepart[1]; ?> 23:45
            </div>
        </div>
        <div class="contain9">
            <div>
                ARRIVAL: PARIS, FR (CHARLES DE GAULLE), TERMINAL 2E
            </div>
            <div class="div9" id="div9" style="margin-left: 85px;">
            <?php   echo $date = date("d M", strtotime("+1 day", strtotime($dateDepart[1])));?> 07:30
            </div>
        </div>
        <div class="contain10">
            <div class="Fbooking" id="fbooking">
                FLIGHT BOOKING REF: AF/<?php  echo  $function1 ; ?>
            </div>
        </div>
        <div class="contain11">
            <div class="Freserv">
                RESERVATION CONFIRMED, ECONOMY (T)
            </div>
            <div class="div11">
                DURATION: 06:45
            </div>
        </div>
        <div>
            - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
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
            NON STOP DOUALA TO PARIS
        </div>
        <div class="contain14">
            <div class="equip">
                EQUIPMENT:
            </div>
            <div class="div14">
            AIRBUS INDUSTRIE A330-200
            </div>
        </div>
        <div class="contain15">
            <div>
                FLIGHT 
            </div>
            <div>
                &nbsp;  AF 1280 - AIR FRANCE
            </div>
            <div class="div15" id="div15" style="margin-left: 285px;">
            <?php   echo $date = date("D d F Y", strtotime("+1 day", strtotime($dateDepart[1])));?>
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
            PARIS, FR (CHARLES DE GAULLE), TERMINAL 2E
            </div>
            <div class="divN" id="divN" style="margin-left: 105px;">
            <?php   echo $date = date("d M", strtotime("+1 day", strtotime($dateDepart[1])));?> 15:00
            </div>
        </div>
        <div class="contain9">
            <div>
                ARRIVAL: LONDON, GB (HEATHROW), TERMINAL 2
            </div>
            <div class="divY" id="divY" style="margin-left: 210px;">
            <?php   echo $date = date("d M", strtotime("+1 day", strtotime($dateDepart[1])));?> 16:25
            </div>
        </div>
        
        <div class="contain11">
            <div class="Freserv">
                RESERVATION CONFIRMED, ECONOMY (T)
            </div>
            <div class="div11">
                DURATION: 01:25
            </div>
        </div>
        <div>
            - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
        </div>
        
        <div class="contain10">
            <div class="Freserv">
            MEAL:
            </div>
            <div class="div11">
                MEAL
            </div>
        </div>
        <div class="contain12">
            <div>
                NON STOP PARIS TO LONDON 
            </div>
        </div>
        <div class="contain14">
            <div class="equip">
                EQUIPMENT:
            </div>
            <div class="div14">
            AIRBUS INDUSTRIE A319
            </div>
        </div>
        <div class="contain15">
            <div>
                FLIGHT 
            </div>
            <div>
                &nbsp;  AF 1681 - AIR FRANCE
            </div>
            <div class="div15" id="divs" style="margin-left: 288px;">
            <?php  $dateRetour = dateRetour($_SESSION['dateRetour1'],$_SESSION['dateRetour2']);
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
            LONDON, GB (HEATHROW), TERMINAL 2
            </div>
            <div class="divN" id="divse" style="margin-left: 220px;">
            <?php echo $dateRetour[1];?> 09:00
            </div>
        </div>
        <div class="contain9">
            <div>
                ARRIVAL: PARIS, FR (CHARLES DE GAULLE), TERMINAL 
            </div>
            <div class="divY" id="divh" style="margin-left: 150px;">
            <?php echo $dateRetour[1];?> 11:25
            </div>
        </div>
        <div class="contain10">
            <div class="Fbooking" id="tbooking">
                FLIGHT BOOKING REF: AF/<?php  echo  $function1 ; ?>
            </div>
        </div>
        <div class="contain11">
            <div class="Freserv">
                RESERVATION CONFIRMED, ECONOMY (V)
            </div>
            <div class="div11">
                DURATION: 01:25
            </div>
        </div>
        <div>
            - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
        </div>
        <div class="contain12">
            <div>
                NON STOP LONDON TO PARIS 
            </div>
        </div>
        <div class="contain14">
            <div class="equip">
                EQUIPMENT:
            </div>
            <div class="div14">
                 AIRBUS A320 (SHARKLETS0)
            </div>
        </div>
        <div class="contain15">
            <div>
                FLIGHT 
            </div>
            <div>
                &nbsp;  AF 982 - AIR FRANCE
            </div>
            <div class="div15" id="divd" style="margin-left: 280px;">
            <?php echo $dateRetour[0];?>
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
                PARIS, FR (CHARLES DE GAULLE), TERMINAL 2E 
            </div>
            <div class="divN" id="divo" style="margin-left: 100px;">
            <?php echo $dateRetour[1];?> 13:30
            </div>
        </div>
        <div class="contain9">
            <div>
                ARRIVAL: DOUALA, CM (DOUALA INTL)
            </div>
            <div class="divY" id="divdo" style="margin-left: 315px;">
            <?php echo $dateRetour[1];?> 22:10
            </div>
        </div>
        <div class="contain11">
            <div class="Freserv">
                RESERVATION CONFIRMED, ECONOMY (V)
            </div>
            <div class="div11">
                DURATION: 09:40
            </div>
        </div>
        <div>
            - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
        </div>
        <div class="contain10">
            <div class="Freserv">
            MEAL:
            </div>
            <div class="div11">
                MEAL
            </div>
        </div>
        <div class="contain12">
            <div>
             STOP 1 &nbsp; PARIS TO YAOUNDE 
            </div>
        </div>
        <div class="contain12">
            <div>
             STOP 2 &nbsp; YAOUNDE TO DOUALA
            </div>
        </div>
        <div class="contain14">
            <div class="equip">
                EQUIPMENT:
            </div>
            <div class="div14">
                BOEING 777-200/200ER0
            </div>
        </div>
        
    </div>
    <form method="POST"action="">
        <input id="impression" name="impression" type="submit" onclick="imprimer_page()" value="Imprimer cette page" <?php if (!isset($_POST['matricule'])){echo 'disabled';}?> />
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

        <?php
if (isset($_SESSION['msg']) && !empty($_SESSION['msg']) && is_string($_SESSION['msg'])) {
    ?>
    alert('<?= $_SESSION['msg']?>');
    <?php 
    unset($_SESSION['msg']);   
}
elseif(isset($_SESSION['msg']) && $_SESSION['msg'] == true){
    ?>
    alert('ENREGISTREMENT REUSSI');
    <?php 
    unset($_SESSION['msg']); 
}
?>
    </script>

    
</body>
</html>