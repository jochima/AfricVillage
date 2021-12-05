
<?php session_start(); ?>
        <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
        <link rel="stylesheet" href="../css/formulaire.css">
        


                                <?php 
                                        include("header.php");
                                    
              ?>
<div class="data">
                                            
                        <h1 class="title_lancement">Lancement de la création des billets</h1>
            <div class="conteiner">
                                            
                                            <div class="conteiner_items">

                                            </div>
                                <div class="conteiner_items">
                                    <?php include('../requettes/SenDate.php');
              ?>
                                            <div class="conteiner_input">

                                            <form action="" method="POST">
                                                <div class="conteiner_data_input">
                                                <div class="conteiner_data_input_items">
                                                                  
                                                                <input type="Date" class="data-input" style="margin-top" name="dateEmission1"></br>  
                                                                <p>Date d'émission 1</p>     
                                                            </div>
                                                            
                                                            <div class="conteiner_data_input_items">
                                                                
                                                    
                                                            <input type="Date" id="datemiss" class="data-input" value="" name="dateEmission2">
                                                            <p>Date d'émission 2</p>

                                                            </div>
                                                </div>
                                                
                                                <div class="conteiner_data_input">
                                                            <div class="conteiner_data_input_items">
                                                               
                                                                <input type="Date" id="datemiss2"placeholder="Date de depart" class="data-input" value="" name="dateDepart1">    
                                                                <p>Date de départ 1</p>    
                                                            </div>
                                                            <div class="conteiner_data_input_items">
                                                    
                                                                <input type="date" placeholder="Date de depart" class="data-input" value="" name="dateDepart2">
                                                                <p>Date de départ 2</p> 
                                                        
                                                            </div>
                                                </div>
                                                <div class="conteiner_data_input">
                                                        <div class="conteiner_data_input_items">
                                                              
                                                                <input type="date" placeholder="Date de depart" class="data-input" style="margin-top" name="dateRetour1"></br>
             
                                                                  <p>Date de retour 1</p> 
                                                            </div>
                                                            <div class="conteiner_data_input_items">
           

                                                                <input type="date" placeholder="Date de depart" class="data-input" value="" name="dateRetour2">
                                                                                          <p>Date de retour 2</p> 

                                                                 
                                                            </div>
                                                </div>
                                                <div class="conteiner_data_input">
                                                        
                                                            <div class="conteiner_data_input_items">
                                                                
                                                                <button class="send" type="submit" >COMMENCER</button>                                             
                                                            </div>
                                                            <div class="conteiner_data_input_items">
                                                                
                                                                <button class="annuler" type="">Annuler</button>                                             
                                                            </div>
                                                </div>
                                                
                                                    
                                    
                                                
                        

                                            </form>
                                            </div>
                                </div>
            </div>
</div>

<?php

                                    include('footer.php');
?>
