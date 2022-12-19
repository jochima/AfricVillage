<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Choix de la session </title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../index.css">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" href="../bulma-0.9.1/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="../css/landing.css">
    <link rel="stylesheet" type="text/css" href="../css/modal.css">
    <link rel="stylesheet" href="../css/start.css">
    <style>
            <?php 
                include_once('../requettes/Class/Manager.php');     
                include_once('../requettes/Session.php');     
            ?>
    .loader {
      margin-left: 50px;
      border: 10px solid #4CAF50;
      border-radius: 50%;
      border-top: 10px solid white;
      height: 3px;
      -webkit-animation: spin 2s linear infinite; /* Safari */
      animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    </style>
<head>
<body>
    <section class="hero is-info is-fullheight" id="top">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
                            <!-- <img src="http://bulma.io/images/bulma-type-white.png" alt="Logo"> -->
                            CeeMo*
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="#">
                                    <span class="icon">
                                        
                                    </span>
                                    <span>Home</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="#">
                                    <span class="icon">
                                    
                                    </span>
                                    <span>Documents</span>
                                </a>
                            </span>
                       
                            
                        </div>
                    </div>
                </div>
            </nav>
            </div>


            <div class="hero-body" >
                <div class="container has-text-centered">
                    <div class="column is-6 is-offset-3">
                        <h1 class="title">
                            VOS BILLETS
                        </h1>
                        <h2 class="subtitle" style="font-family: poppins;">
                            Documentations et Billets de Voyage...
                        </h2>
                        <div class="box">
                            <div class="field is-grouped">

                                    <!-- <a class="button is-info" href="vues/formulaire.php" style="width: 100%; font-family:poppins; font-size: 20px" > -->
                                    <a class="button is-info" onclick="maFonction()" style="width: 100%; font-family:poppins; font-size: 20px" >    
                                        COMMENCER
                                    </a>
                                
                            </div>
                        </div>
                        

                        <div class="dsession" id="dsession" style="display:none;">
                        <div class="loader" style="margin-left:300px;"></div>
                            <div class="Tsession" id="tsession"style="font-family: poppins; color: black; ">
                                DEMARRER UNE SESSION
                            </div>
                            <div class="session" style="height: 300px; background-color: white; color: black; margin-top: 10px; font-family: poppins; box-shadow: 0px 0px 25px gray; border-radius: 10px">
                            
                                    <form  method="POST" action="billetfrance.php">
                                        <?php
                                            
                                        ?>
                                                <!-- <div style="margin-top:20px;">
                                                <input type="radio" id="creer" name="session" value="creer" onclick="masquer();" style="cursor:pointer;" >
                                                <label for="creer">CREER UNE NOUVELLE SESSION</label><br>
                                                
                                                <label for="">Date de l'opération : </label>
                                                <input id="creerSession" name="date_de_session" type="date" style="width: 50%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;" >
                                            </div> -->

                                            <div class="" id="input2" style="margin-top: 20px;">
                                                <label for="choix">CHOISIR UNE SESSION</label><br>
                                                <select name="session_selectionne" id="choisirSession" style="width: 50%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;" >
                                                    <?php
                                                        $req = 'SELECT * FROM session WHERE statut=1';
                                                        $stmt = $dbconn->query($req);
                                                        $find = $stmt->fetchAll();
                                                        foreach ($find as $row) {
                                                    ?>
                                                    <option value="<?=$row['nomSession']?>"><?= $row['nomSession'].' - '.$row['intitule'].' ['.$row['createdAt'].']' ?></option>

                                                    <?php    }
                                                    ?>
                                                </select>
                                            </div> 
                                            
                                            <div class="demarrer" style="margin-top:20px; ">
                                            <a href="vues/formulaire.php" >
                                                <input type="submit" name="demarrer" value="demarrer" style="background-color: #344BAB;border: none;color: white;padding: 16px 32px; text-decoration: none; margin: 4px 2px;cursor: pointer;">
                                                </a>
                                            </div>
                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <script>

function maFonction() {
  var div = document.getElementById("dsession");
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
    
    function masquer(){
    var el = document.getElementById("creer");
    
    if(el.checked){
      document.getElementById("creerSession").disabled = true;
      document.getElementById("choisirSession").disabled = true;
      document.getElementById("choisirSession").value = '';
      
    }else {
     document.getElementById("creerSession").disabled = true;
     document.getElementById("choisirSession").disabled = false; 
     document.getElementById("creerSession").value = '';
    }
    //  var el = document.getElementById("choix");

    // if(ell.checked)

     
        
  }  

  

// function maFonctionR() {
//     var div = document.getElementById("choisirSession");
//     var divv = document.getElementByid("creerSession");
//   if (div.style.display === "block") {
//     div.disabled = "none";
//     divv.style.display = "block";
//   } else {
//     div.style.display = "block";
//     divv.style.display= "none";
//   }
// }

// function maFonctionRD() {
//   var div = document.getElementById("creerSession");
//   var divv = document.getElementByid("choisirSession");
//   if (div.style.display === "block" && divv.style.display === "none") {
//     div.style.display = "none";
//     divv.style.display = "block";
    
//   } else {
//     div.style.display = "block";
//     divv.style.dispay = "none";
//   }
// }

</script>




<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="text-align:center">Connexion</h2>
    </div>
    <div class="modal-body">
                    <form action="/action_page.php">
                <div class="container">
                    
                    <hr>

         
                    <input  class="item_input" type="text" placeholder="Enter Email" name="email" id="email" required> </br>

                    <input class="item_input"  id="myInput" id="myInput" type="password" placeholder="Enter Password" name="psw" id="psw" required> <br>
                    <input  class="checkpassword" onclick="myFunction()" type="checkbox" onclick >show password

                    <hr>
                    <button class="data-send" type="submit" class="registerbtn">Se connecter</button>
                </div>
                
              
                </form>
    </div>
    <!-- <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div> -->
  </div>

</div>

<!-- <?php
            include("vues/footer.php"); 
?> -->
    <script src="../js/showpassword.js"></script>
    <style>
            /* #creerSession{
                display:none;
            } */
    </style>
    <script>
            var creer = document.getElementById('creer');
            var choisir =document.getElementById('choisir');
            var choisirElement =document.getElementById('choisirSession');
            var creerElement =document.getElementById('creerSession');

            creer.addEvenlistener('click',function(e){
                    c
            })
    </script>
</body>

</html>