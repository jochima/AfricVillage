<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/list.css">
    <title>Liste  des sessions</title>

</head>
<body>
                    <?php include('header.php'); ?>
<div class="conteiner_table">

    <div class="conteiner_table_items">
    <h1 style="text-align:center">liste des sessions</h1> 
     
    <?php

    if (isset($_SESSION['msg']) && $_SESSION['msg'] !=1) {
        ?>
    <script>
        alert("<?= $_SESSION['msg']?>");
    </script> 
        <?php 
        unset($_SESSION['msg']);   
    }
                                $m = new Administrator;
                                $session = new Session;
                                 

    ?> 
    
                <table>
                    <tr>
                        <th>Numero</th>
                        <th>Nom</th>
                        <th>Quota</th>
                        <th>Justifs</th>
                        <th>Date </th>
                        <th>Operations</th>
                    </tr>
                <?php 
                $data = $m->afficherSession($dbconn);
                foreach ($data as $key => $row) {$key=$key+1;
                    $etat = $session->getStatut($dbconn,intval($row['idSession']));echo $etat;
                ?>
                <script>
        function confirmation<?= $row['idSession']?>() {
              if (confirm("\tATTENTION : Vous alez activer la <?= $row['nomSession'] ?>")) {
                 window.location.assign("switchStatut.php?s=<?= $row['idSession'] ?>");
                <?php
                //header('Location : deleteStudent.php?etudiant='.$find['idEtudiant']);
                 ?>
              }
            }
    </script>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $row['nomSession'].' --> '.$row['intitule'] ?></td>
                        <td><?= $row['limite']?></td>
                        <td>
                            <?php
                                $s = $row['idSession'];
                                $tj = $session->totalJustifParManagerSession($dbconn, $s);
                                echo $tj;
                            ?>
                        </td>
                        <td><?= $row['createdAt']?></td>
                        <td>
                        <div class="items_th">
                            
                                                <div class="item_th_com">
                                                    <form action="" method="POST">
                                                        <button class="supprimer" class="supprimer" name="supprimer">Supprimer</button>
                                                    </form>

                                                </div>
                                                <div class="item_th_com">
                                                <a href="updateSession.php?idS=<?= $row['idSession']; ?>"><button class="modifier" name="modifier">Modifier</button></a>

                                                </div>
                                                <div class="item_th_com">
                                                <a href="infotableau.php?s=<?= $row['nomSession']?>"><button class="voirTableau" name="tableau"> tableau</button></a>

                                                </div>
                                                <div class="item_th_com"> 
                                                    <button class="voirTableau" onclick="confirmation<?= $row['idSession']?>()" name="changestatut">
                                                        <?php
                                            if ($etat == 0) {
                                                echo 'Activer ';
                                            }
                                            else {
                                                echo 'desactiver ';
                                            }
                                                        ?>
                                                    </button> 

                                                </div>
                                                
                                </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
                    

        </table>
    </div>
            
</div>



                    <?php include('../footer.php'); ?>
</body>
</html>