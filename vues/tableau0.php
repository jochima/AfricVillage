<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Suppression</title>
</head>
<body>
  <?php
    //require_once '../requettes/fpdf/vendor/autoload.php';
    require_once '../requettes/Class/Manager.php';
        //session_start();
    function content(){
echo $_SESSION['limite'];
  ?>
    <style type="text/css">
        body{
          /*padding-left: 100px;
          padding-right: 100px;
          margin-top: 100px*/
        } 

       .tgl{
         /*text-decoration:uppercase !important;*/
       }
        .tg  {border-collapse:collapse;border-spacing:0; text-align:center;}
        .tg td{font-family:Arial, sans-serif;font-size:13px; padding: 10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
        .tg .tg-yzt1{background-color:#efefef;vertical-align:top}
        .tg .tg-uhkr{background-color:#ffce93}
        .tg .tg-i6eq{background-color:#ffccc9;vertical-align:top}
        .tg .tg-nvd0{background-color:#f8a102;vertical-align:top}
        .tg .tg-gr78{background-color:#ffce93;vertical-align:top}
        .tg .tg-c57o{background-color:#ecf4ff;vertical-align:top}
        .tg .tg-2s1i{background-color:#fd6864;vertical-align:top}
        .tg .tg-yw4l{vertical-align:top }
    </style>  
  <?php
    if (isset($_SESSION['msg'])) { 
?>
  <script type="text/javascript">
    alert("<?=$_SESSION['msg']?>");
  </script>
<?php
      unset($_SESSION['msg']);
    }
  ?>
        <table class="tg" id="document">
          
<thead>
<tr>
<td class="tg-uhkr" colspan="1" rowspan=2>N de sequence</th>
                <th class="tg-uhkr"  colspan="1"rowspan=2>Date</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>Nom/Raison social</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>Resident/non resident</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>Profession/secteur d'activite</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>Devise vendue ou achetee</th>
                <th class="tg-uhkr" colspan="2" >Montant de l'operation en devise</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>N* compte eventuelle</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>Cours reference de la BEAC</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>Cours applique</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>Periode de voyage</th>
                <th class="tg-uhkr"colspan="1" rowspan=2>Pays de destination</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>N* passeport</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>Date d'emission du passeport</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>Pays d'emission du passeport</th>
                <th class="tg-uhkr" colspan="1" rowspan=2>Origine des fonds</th> 
                <!--th class="tg-uhkr" colspan="1" rowspan=2>OPTION</th--> 
    </tr> 
    <tr>
      <th class="tg-uhkr" colspan="1" rowspan="1">achat</th>
      <th class="tg-uhkr" colspan="1" rowspan="1">vente</th>
    </tr>
</thead>

      <tbody> 
<?php

$manager = new Manager;
 
/**
 * Display data
 */
$dbconn = new PDO('mysql:host=localhost;dbname=ceo','root',''); 
$nomSession = $_GET['s'];
$display = $manager->afficherDonnees($dbconn, $_GET['s']); 
//var_dump($display);
//echo $display;  
foreach ($display as $key => $data) {$key+=1; 
?>     
         <script type="text/javascript">
           function confirmation<?= $data['idMandataire']?>() {
              if (confirm("\tATTENTION : vous allez supprimer la ligne <?=$key?>\n \n CLIENT : <?= $data['nomMandataire'] ?>\n STATUT : <?=$data['statut']?> \n NUMERO DE PASSPORT :<?=$data['matricule']?> \n DESTINATION : <?=$data['destination']?>")) {
                 window.location.assign("delEnregistrement.php?id=<?= $data['idMandataire'] ?>&s=<?= $nomSession?>&mnt=<?=$data['montant']?>");
                <?php
                //header('Location : deleteStudent.php?etudiant='.$find['idEtudiant']);
                 ?>
              }
            }
         </script>
         
         <tr>
          <td class="tgl" colspan="1"><?=$key?></td>
          <td class="tgl" colspan="1"><?=$data['createdAt']?></td>
          <td class="tgl" colspan="1"><?=$data['nomMandataire']?></td>
          <td class="tgl" colspan="1"><?=$data['statut']?></td>
          <td class="tgl" colspan="1"><?=$data['profession']?></td>
          <td class="tgl" colspan="1">EURO</td>
          <td class="tgl" colspan="1">/</td>
          <td class="tgl" colspan="1"><?=$data['montant']?> €</td>
          <td class="tgl" colspan="1">/</td>
          <td class="tgl" colspan="1">/</td>
          <td class="tgl" colspan="1">/</td>
          <td class="tgl" colspan="1"><?=$data['depart'].' AU '.$data['arrive']?></td>
          <td class="tgl" colspan="1"><?=$data['destination']?></td>
          <td class="tgl" colspan="1"><?=$data['matricule']?></td>
          <td class="tgl" colspan="1"><?=$data['dateEmission']?></td>
          <td class="tgl" colspan="1"><?=$data['paysEmission']?></td>
          <td class="tgl" colspan="1"><?=$data['origineDesFonds']?></td> 
          <td class="tgl" colspan="1"> 
              <button name="delete" onclick="confirmation<?= $data['idMandataire']?>()">Supprimer</button> 
          </td> 
        </tr>
              <?php
}
?>
</tbody>   
            </table>
<?php
  }

  echo content();

?>
 
        
</body>
</html>
