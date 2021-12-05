<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/list.css">
    <title>Liste <Sessions></Sessions></title>

</head>
<body>
                    <?php include('header.php'); ?>
            <div class="conteiner_table">
           
                        <div class="conteiner_table_items">
                        <h1 style="text-align:center">liste des sessions</h1>   
                        <?php
                                                    $m = new Administrator;
                            echo '<center><h5 style="color:green;">'.$m->displayMessage().'</h5></center>';

                        ?> 
                                             <table>
                                                        <tr>
                                                            <th>Numero</th>
                                                            <th>Nom</th>
                                                            <th>Quota</th>
                                                            <th>Date </th>
                                                            <th>Operations</th>
                                                        </tr>
                                                    <?php 
                                                    $data = $m->afficherSession($dbconn);
                                                    foreach ($data as $key => $row) {$key=$key+1;
                                                    ?>
                                                        <tr>
                                                            <td><?= $key?></td>
                                                            <td><?= $row['nomSession'].' --> '.$row['intitule'] ?></td>
                                                            <td><?= $row['limite']?></td>
                                                            <td><?= $row['createdAt']?></td>
                                                            <td>
                                                            <div class="items_th">
                                                                                    <div class="item_th_com">
                                                                                        <form action="" method="POST">
                                                                                            <button class="supprimer" class="supprimer" name="supprimer">Supprimer</button>
                                                                                        </form>

                                                                                    </div>
                                                                                    <div class="item_th_com">
                                                                                    <a href="updateSession.php?idS=<?= $row['idSession']; ?>"><button class="modifier" class="modifier" name="modifier">Modifier</button></a>

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