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

                                    
                                <form  method="POST">
                                                <h1 style="text-align:center">Creer un utilisateur</h1>
                                                <p style="text-align:center">Remplir les champs et cliquer sur enregistrer</p>
                                                <hr><center>
<?php
if (isset($_POST['rec'])) {
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    $rpwd = $_POST['rpwd']; 

    if(empty($login) || empty($pwd) ||empty($rpwd)) { 
        echo '<h5 style="color:red;">VOUS DEVEZ REMPLIR TOUS LES CHAMPS</h5>';
    }
    elseif ($pwd == $rpwd) {
        $m = new Administrator;
        echo '<h5 style="color:green;">'.$m->ajouterUtilisateur($dbconn, $login, $pwd).'</h5>';
    }
    else{ 
        echo '<h5 style="color:red;">LES MOTS DE PASSE NE CORRESPONDENT PAS </h5>';
    }
}
?></center>
                                                <label class="label" for="email"><b>Login</b></label><br>
                                                <input type="text" placeholder="Entrer le  login" name="login" id="email" required><br>
                                                <label class="label" for="psw"><b>Mot de passe</b></label><br>
                                                <input type="password" id="myInput" placeholder="Entrer le mot de passe" name="pwd" id="psw" required><br>

                                                <label class="label" for="psw"><b>Mot de passe</b></label><br>
                                                <input type="password" id="myInput2" placeholder="Repeter le mot depasse" name="rpwd" id="psw" required><br>
                                                <input  class="checkpassword" onclick="myFunction()" type="checkbox" onclick >show password
                                                <hr>

                                                <button type="submit" name="rec" class="registerbtn">Enregistrer</button>
                                            </div>
                                            
                                            <div class="container signin">
                                            
                               </form>
                    
            </div>

            <script src="../../js/showpassword.js"></script>
            <?php include('../footer.php'); ?>
        

</body>
</html>


