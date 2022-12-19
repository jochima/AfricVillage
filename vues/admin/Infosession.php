<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/infosession.css">
    <title>Statut de la session</title>
</head>
<body>
        <?php include('header.php'); ?>
                                <h1 class="name_session">Nom de la session</h1>
        
                    <div class="conteiner_element">

                                    <div class="conteiner_element_items">
                                                      <div class="header">
                                                            <h1> Nombre de justifs</h1>
                                                        </div>

                                                        <div class="container">
                                                            <p>1500</p>
                                                        </div>
                                           
                                    </div>
                                    <div class="conteiner_element_items">
                                                      <div class="header">
                                                            <h1>Statut</h1>
                                                        </div>

                                                        <div class="container">
                                                            <p>Désactivé<p>
                                                        </div>
                                           
                                    </div>
                                    <div class="conteiner_element_items">
                                                      <div class="header">
                                                            <h1>Operations</h1>
                                                        </div>

                                                        <div class="container">
                                                                <form  action="" methodd="POST">
                                                                    <label for="">choisir le statut</label>
                                                                            <select name="statut_session" id="">
                                                                            
                                                                                        <option value="">Activé</option>
                                                                                        <option value="">Désactivé</option>

                                                                            </select> <br>
                                                                            <button class="action" type ="submit">Faire </button>
                                                                </form>
                                                        </div>
                                           
                                    </div>
                                    
                                
                                  
                                          
                    </div>

    <?php  include('../footer.php'); ?>
    </body>
</html>