<div class="dropdown">
  <button class="dropbtn">Navigation</button>
  <link rel="stylesheet" type="text/css" href="../css/dropdown.css">
  <div class="dropdown-content">
    <a href="start.php">Choisir sessions</a>
    <a href="tableau.php?s=<?=$_SESSION['sessionName']?>" target="_blank">Acceder au tableau</a> 
    <form action="" method="POST">
            <button style="margin-left:13px;margin-top:15px" name ="deconnexion" class="deconnexion">Deconnexion</button>
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