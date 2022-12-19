<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>
</head>
<body>
  <?php
    // require_once '../requettes/fpdf/vendor/autoload.php';
    require_once '../requettes/Class/Manager.php';
        //session_start();
    function content(){

  ?>
    <style type="text/css">
        body{
          /*padding-left: 100px;
          padding-right: 100px;
          margin-top: 100px*/
        }
        .tg  {border-collapse:collapse;border-spacing:0; text-align:center;}
        .tg td{font-family:Arial, sans-serif;font-size:13px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
        .tg .tg-yzt1{background-color:#efefef;vertical-align:top}
        .tg .tg-uhkr{background-color:#ffce93}
        .tg .tg-i6eq{background-color:#ffccc9;vertical-align:top}
        .tg .tg-nvd0{background-color:#f8a102;vertical-align:top}
        .tg .tg-gr78{background-color:#ffce93;vertical-align:top}
        .tg .tg-c57o{background-color:#ecf4ff;vertical-align:top}
        .tg .tg-2s1i{background-color:#fd6864;vertical-align:top}
        .tg .tg-yw4l{vertical-align:top }
    </style> 

        <table class="tg" id="document">
          

              <tr>
                <td class="tg-uhkr" colspan="1" rowspan=2>N de sequence</th>
                <td class="tg-uhkr"  colspan="1"rowspan=2>Date</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Nom/Raison social</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Resident/non resident</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Profession/secteur d'activite</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Devise vendue ou achetee</th>
                <td class="tg-uhkr" colspan="2" >Montant de l'operation en devise</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>N* compte eventuelle</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Cours reference de la BEAC</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Cours applique</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Periode de voyage</th>
                <td class="tg-uhkr"colspan="1" rowspan=2>Pays de destination</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>N* passeport</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Date d'emission du passeport</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Pays d'emission du passeport</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Origine des fonds</th>
                <td class="tg-uhkr" colspan="1" rowspan=2>Modifier/Supprimer</th>
              </tr>

              <tr> 
                <td class="tg-gr78" colspan="1" rowspan="1">achat</td> 
                <td class="tg-gr78" colspan="1" rowspan=1>vente</td> 
                 
            </TR>
          
         

          <tbody>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <var><tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
              <tr>
                <td class="tgl" colspan="1">1.</th>
                <td class="tgl" colspan="1">19/02/2021</th>
                <td class="tgl" colspan="1">OUMAR CISSE</th>
                <td class="tgl" colspan="1">NR</th>
                <td class="tgl" colspan="1">STUDENT</th>
                <td class="tgl" colspan="1" contenteditable='true'>EURO</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>7,200.00</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1" contenteditable='true'>/</th>
                <td class="tgl" colspan="1">21/02/2021 AU 22/03/2021</th>
                <td class="tgl" colspan="1">PARIS</th>
                <td class="tgl" colspan="1">1050945</th>
                <td class="tgl" colspan="1">23/10/2019</th>
                <td class="tgl" colspan="1">CAMEROUN</th>
                <td class="tgl" colspan="1">COMMERCE</th>
                <td class="tgl" colspan="1">/</th>
              </tr>
            </var>
          </tbody>  

          <tfoot>
            <td colspan=6 style="border: none;"></td>
            
            <td colspan="1">Total</td>
            <td>7,200.00</td> 
          </tfoot>
            </table>
<?php
  }

  echo content();

  if (isset($_POST['genererPdf'])) {
   $mpdf =  new \Mpdf\Mpdf();

$mpdf->AddPage('L');//___Orientation de la page : Landscape
$mpdf->WriteHTML('dsflkdfsl');
$mpdf->Output();
  }
?>
            <div class="imprimer">
              <form method="POST">
                <button name="genererPdf" style="background-color: blue; height: 50px; color: white; margin-left: 40em; margin-top: 100px; cursor: pointer; font-family: poppins;" onclick="/*window.print()*/">IMPRIMER OU ENREGISTRER</button>
              </form>
            </div>
        
</body>
</html>
