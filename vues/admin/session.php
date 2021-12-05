<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../../css/adduser.css">
<body>
            <div class="co" style="margin-top:px">
            <?php 
                include('header.php'); 
                //include('../../requettes/Class/Manager.php'); 
            
            ?>
            </div>

            <div class="form">
            <hr><center>
<?php
if (isset($_POST['creerSession'])) {
    $quota = $_POST['quota'];
    $nomSession = $_POST['nomSession'];
    $dateSession = $_POST['dateSession'];

    if (empty($quota)||empty($nomSession)||empty($dateSession) ) { 
        echo '<h5 style="color:red;">VOUS DEVEZ REMPLIR TOUS LES CHAMPS</h5>';
    }
    else{
        $m = new Administrator;
        $rslt = $m->ajouterSession($dbconn, $dateSession, $quota, $nomSession);
        if ($rslt) {
            header('Location: listsession.php');
        }
        else {
            echo '<h5 style="color:red;">UNE ERREUR C\'EST PRODUIT DURANT LA CREATION DE LA SESSION</h5>';
        } 
    }
}
?></center>
                                    
                                <form  method="POST">
                                                <h1 style="text-align:center">Creation d'une session</h1>
                                                <p style="text-align:center">Remplir les champs et cliquer sur creer la session</p>
                            

                                                <label class="label" for="nomsession"><b>Nom session</b></label><br>
                                                <input type="text" placeholder="Entrer le nom de la session" name="nomSession" id="email" required><br>
                                                <label class="label" for="cotar"><b>Cotar de la session</b></label><br>
                                                <input type="text" placeholder="Entrer le cotar " name="quota" id="psw" required><br>
                                                <label class="label" for="datessesion"><b>Date de la session</b></label><br>
                                                <input type="date" name="dateSession" id="psw" required><br>

                                                <hr>

                                                <button type="submit" name="creerSession" class="registerbtn">Creer la session</button>
                                            </div>
                                            
                                            <div class="container signin">
                                            
                               </form>
                    
            </div>


            <?php include('../footer.php'); ?>
        

</body>
</html>


