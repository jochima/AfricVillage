<link rel="stylesheet" href="../css/menulogin.css">
<div class="container">
                
                <div class="container_items">
                <?php
                    $db = new PDO('mysql:host=localhost; dbname=ceo','root','');
                    $req = 'SELECT * FROM session WHERE nomSession="'.$_SESSION['sessionName'].'"';
                    $stmt = $db->query($req);
                    $data = $stmt->fetch();
                ?>
                            <ul>
                                        <li class="item_session">Ceo</li>
                                        <li class="item_session items2">{ <?=$data['intitule']?> } :</li>
                                        <li class="item_session items2"> [<?= $data['limite']?>]</li>
                            </ul>
                
                </div>
                <div class="container_items items-b">

                        <div class="items" style="margin-top:20px; font-family:poppins; color:white;">
                      
                                       powered by slabtech

                        </div>

                            <div class="items">
                                    <?php 
                                     include ("dropdpwn.php");
                                       
                                     ?>
                                            <!-- <label for="suivi" style=" font-family: poppins; color: white;">Nom et prenom</label>
                                            <input type="text" class="suivi" value="" id="in" placeholder="Entrer le nom et le prenom"> -->

                            </div>
                            
                            <div class="items">


                                      <a href="tableau0.php?s=<?=$_SESSION['sessionName']?>"  target="_blank"> <button class="tableau">Supprimer un enregistrement</button></a>
                                      <a href="tableau.php?s=<?=$_SESSION['sessionName']?>"  target="_blank"> <button class="tableau">Acceder au tableau</button></a>
                            </div>
                
                </div>
    
    
    </div>

    <style>
                .tableau{
                        background-color: #04AA6D;
                        color: white;
                        padding: 16px;
                        font-size: 16px;
                        border: none;
                        border-radius:5px
                }
                .item_session{
                                float:left;
                                list-style: none;
                                color:white;
                                font-family:poppins
                }
                .items2{
                        margin-left:15px
                }
    </style>