<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../../css/adduser.css">
<body>
            <div class="co" style="margin-top:px">
            <?php 
                include('header.php'); 
                include('../../requettes/connect.php');
                //include('../../requettes/Class/Manager.php'); 
                $idUser = $_GET['idU'];
                $admin = new Administrator;
                $data = $admin->getUtilisateurById($dbconn,$idUser);

            
            ?>
            </div>

            <div class="form">

                                    
                                <form  method="POST">
                                                <h1 style="text-align:center">Modification de l'utilisateur</h1>
                                                <p style="text-align:center">Remplir les champs et cliquer sur modifier</p>
                                                <hr><center>
<?php
if (isset($_POST['updateUser'])) {
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    $rpwd = $_POST['rpwd']; 

    
        if ($pwd==$rpwd) {
            $stmt = $admin->modifierUtilisateur($dbconn, $idUser, $login, $pwd);
            var_dump($stmt);
            if ($stmt) {
                 $msg = 'VOUS AVEZ EFFECTUE UNE MODIFICATION !!!';
                 $admin->setMessage($msg);
                 header('Location: listuser.php');
            }
            else{
                echo '<h5 style="color:red;">UNE ERREUR C\'EST PRODUITE DURANT LE PROCESSUS DE MODIFICATION</h5>';
            } 
        }
        else{
                echo '<h5 style="color:red;">LES MOTS DE PASSE DOIVENT CORRESPONDRE !!!</h5>';
            }
}
?></center>
                                                <label class="label" for="login"><b>Login</b></label><br>
                                                <input type="text" value="<?= $data['login']; ?>" name="login" id="email" required><br>
                                                <label class="label" for="psw"><b>Mot de passe</b></label><br>
                                                <input type="password"id="myInput" placeholder="Entrez le mot de passe !"  name="pwd" id="psw" required><br>

                                                <label class="label" for="psw"><b>Mot de passe</b></label><br>
                                                <input type="password"id="myInput2"  placeholder="Verifier le mot de passe !" name="rpwd" id="psw" required><br>
                                                <input  class="checkpassword" onclick="myFunction()" type="checkbox" onclick >show password

                                                <hr>

                                                <button type="submit" name="updateUser" class="registerbtn">Modifier</button>
                                            </div>
                                            
                                            <div class="container signin">
                                            
                               </form>
                    
            </div>

            <script src="../../js/showpassword.js"></script>
            <?php include('../footer.php'); ?>
        

</body>
</html>


