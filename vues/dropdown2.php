<div class="dropdown">
  <button class="dropbtn">Navigation</button>
  <link rel="stylesheet" type="text/css" href="../css/dropdown.css">
  <div class="dropdown-content">
    <a href="formulaire.php">Changer les dates</a>
    <a href="start.php">Choisir  session?</a>
    <a href="tableau0.php?s=<?=$_SESSION['sessionName']?>" target="_blank">Modifier le tableau</a>

    <form action="" method="POST">
        <button name="deconnexion" style="margin-top:15px" class="deconnexion" type="submit">Deconnexion</button>
    </form>


  </div>
</div>
<style>
      .deconnexion{
        background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      }
</style>
<?php 
    if(isset($_POST['deconnexion'])){
          session_unset();
          header('Location:../index.php');
    }

?>