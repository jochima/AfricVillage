<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../../css/adduser.css">
<body>
            <div class="co" style="margin-top:px">
            <?php 
                include('header.php'); 
                include('../../requettes/connect.php');
                $idSession = $_GET['idS'];
                $admin = new Administrator;
                $data = $admin->getSessionById($dbconn,$idSession); 
                /*$requette='SELECT * FROM session WHERE idSession= "'.$idSession.'"';
                $requettes= $bdd->query($requette);
                $resultat = $requettes->fetch();*/
                
             //include('../../requettes/Class/Manager.php'); 
  
              

            
            ?>
            </div>

            <div class="form">

                                    
                                <form  method="POST">
                                                <h1 style="text-align:center">Modification de la session</h1>
                                                <p style="text-align:center">Remplir les champs et cliquer sur modifier</p>
                                                <hr><center>
<?php
if (isset($_POST['updateSession'])) {
    $nomSession = $_POST['nomSession'];
    $quota = $_POST['quota'];
    $dateSession = $_POST['dateSession']; 

    
        $stmt = $admin->modifierSession($dbconn, $idSession, $nomSession,$dateSession,$quota);
        var_dump($stmt);
        if ($stmt) {
             $msg = 'VOUS AVEZ EFFECTUE UNE MODIFICATION SUR LA '.strtoupper($data['nomSession']).' !!!';
             $admin->setMessage($msg);
             header('Location: listsession.php');
        }
        else{
            echo '<h5 style="color:green;">UNE ERREUR C\'EST PRODUITE DURANT LA MODIFICATION DE CETTE SESSION</h5>';
        } 
}
?></center>
                                                <label class="label" for="login"><b>Nom de la session</b></label><br>
                                                <input type="text"  placeholder="Nom de la session" name="nomSession" id="email" value="<?= $data['intitule']?>" required><br>
                                                <label class="label" for="psw"><b>Quotar de la session</b></label><br>
                                                <input type="text" value="<?= $data['limite']?>" placeholder="insérer le quota" name="quota" id="psw" required><br>

                                                <label class="label" for="psw"><b>Date de la session</b></label><br>
                                                <input type="date" value="<?= $data['createdAt']?>" placeholder="" name="dateSession" id="psw" required><br>
                                                <hr>

                                                <button type="submit" name="updateSession" class="registerbtn">Modifier</button>
                                            </div>
                                            
                                            <div class="container signin">
                                            
                               </form>
                    
            </div>


            <?php include('../footer.php'); ?>
        

</body>
</html>


