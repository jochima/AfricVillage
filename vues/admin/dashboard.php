<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
        <?php include('header.php');
        
           include('../../requettes/Dashboard.php');
        ?>
                        
        
                    <div class="conteiner_element">

                                    <div class="conteiner_element_items">
                                                      <div class="header">
                                                            <h1>Utilisateurs</h1>
                                                        </div>

                                                        <div class="container">
                                                                <?php 
                                                                            if($req==0){
                                                                                ?>
                                                                                    <p class="number">Aucun utilisateur</p>
                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                    <p class="number"><?= $req; ?></p>
                                                                                <?php
                                                                            }
                                                                ?>
                                                        </div>
                                           
                                    </div>
                                    <div class="conteiner_element_items">
                                                      <div class="header">
                                                            <h1>Sessions</h1>
                                                        </div>

                                                        <div class="container">
                                                        <?php 
                                                                            if($numberSession==0){
                                                                                ?>
                                                                                    <p class="number">Aucune session</p>
                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                    <p class="number"><?= $numberSession; ?></p>
                                                                                <?php
                                                                            }
                                                                ?>
                                                        </div>
                                           
                                    </div>
                                    <div class="conteiner_element_items">
                                                      <div class="header">
                                                            <h1>Justifs</h1>
                                                        </div>

                                                        <div class="container">
                                                        <?php 
                                                                            if($numberJustif==0){
                                                                                ?>
                                                                                    <p class="number">Aucun Justif</p>
                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                    <p class="number"><?= $numberJustif; ?></p>
                                                                                <?php
                                                                            }
                                                                ?>

                                                        </div>
                                           
                                    </div>
                                    
                                
                                  
                                          
                    </div>

    <?php  include('../footer.php'); ?>
    </body>
</html>