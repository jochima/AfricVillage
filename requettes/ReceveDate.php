
<?php

// session_start();
$date3 = $_SESSION['dateDepart1']; 
$date4 = $_SESSION['dateDepart2'];
function dateDepart( $date1, $date2){
    if (!is_a($date1, 'DateTime')) {
        $date1 = new DateTime( (ctype_digit((string)$date1) ? '@' : '') . $date1);
        $date2 = new DateTime( (ctype_digit((string)$date2) ? '@' : '') . $date2);
    }
    $random_u = random_int($date1->format('U'), $date2->format('U'));
    $random_date = new DateTime();
    $random_date->setTimestamp($random_u); 
    $date = array(
        '0' =>$random_date->format('D d F Y'),
        '1'=>$random_date->format('d M'),
        '2'=>$random_date->format('Y-m-d')
    );
    $_SESSION['depart'] = $date[2];

    return $date;
}

function dateEmission( $date1, $date2 ){
    if (!is_a($date1, 'DateTime')) {
        $date1 = new DateTime( (ctype_digit((string)$date1) ? '@' : '') . $date1);
        $date2 = new DateTime( (ctype_digit((string)$date2) ? '@' : '') . $date2);
    }
    $random_u = random_int($date1->format('U'), $date2->format('U'));
    $random_date = new DateTime();
    $random_date->setTimestamp($random_u);
    
    return $random_date->format('d F Y') .'<br>';
}
function dateRetour( $date1, $date2 ){
    if (!is_a($date1, 'DateTime')) {
        $date1 = new DateTime( (ctype_digit((string)$date1) ? '@' : '') . $date1);
        $date2 = new DateTime( (ctype_digit((string)$date2) ? '@' : '') . $date2);
    }
    $random_u = random_int($date1->format('U'), $date2->format('U')); 
    $random_date = new DateTime();
    $random_date->setTimestamp($random_u); 
    $date = array(
        '0' =>$random_date->format('D d F Y'),
        '1'=>$random_date->format('d M'),
        '2'=>$random_date->format('Y-m-d')  
    );
    $_SESSION['retour'] = $date[2];
    return $date;
}
 function dateRetourAffich(){

 }
function format1($random_date){
    $madate = $random_date;
    return $madate->format('D M');
}



?>