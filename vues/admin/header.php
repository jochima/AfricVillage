

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/headerAdmin.css">

    <title>Document</title>
</head>
<body>
    
        <?php 
                     include('../../requettes/Class/Manager.php'); 
        ?>
            <div class="conteiner_header">
                        <div class="conteiner_header_items">
                                    <ul>
                                        <li class="name_logiciel">NCK</li>
                                    </ul>
                        </div>
                        <div class="conteiner_header_items">      
                                  <div class="dropdown">
                                                <button class="dropbtn">Dashboard</button>
                                                <div class="dropdown-content">
                                                    <a href="adduser.php">Creer utilisateur</a>
                                                    <a href="session.php">Creer session</a>
                                                    <a href="listuser.php">Liste utilisateur</a>
                                                    <a href="listsession.php">Liste session</a>

                                                    <a href="dashboard.php">Home</a>
                                                    <form action="" method="POST">
                                                         <button class="deconnexion" name="deconnexion">Deconnexion</button>
                                                    </form>
                                                </div>
                                            </div>     
                         </div>
                         
            </div>

            <?php 
                                
                                

                                if (isset($_POST['deconnexion'])) {
                                    session_unset();
                                    header('Location: ../../index.php');
                                }
                                ?>  
 