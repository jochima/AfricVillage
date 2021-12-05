<div class="dropdown">
  <button class="dropbtn">Autres bilets</button>
  <link rel="stylesheet" type="text/css" href="../css/dropdown.css">
  <div class="dropdown-content">
    <a href="billetamerique.php">Amerique</a>
    <a href="billetbelgique.php">Belgique</a>
    <a href="billetcanada.php">Canada</a>
    <a href="billetcotonou.php">Cotonou</a>
    <a href="billetfrance.php">France</a>
    <a href="billetitaly.php">Italie</a>
    <a href="billetlome.php">Lome</a>
    <a href="billetturquie.php">Turquie</a>
    <a href="billetgermany.php">Allemagne</a>
    <a href="billetsuisse.php">Suisse</a>
    <a href="billetuk.php">Angleterre</a>
    <a href="billetespagne.php">Espagne</a>
    <a href="billetchine.php">Chine</a>
    <a href="billetdubai.php">Dubai</a>
    <a href="billetmali.php">Mali</a>
    <a href="billetsenegal.php">Senegal</a>
    <a href="start.php">Autre session?</a>
    <form action="" method="POST">
        <button name="deconnexion" class="deconnexion" type="submit">Deconnexion</button>
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