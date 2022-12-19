
            <?php
                            $bdd=  new PDO ('mysql:host=localhost;dbname=ceo;','root','');

                                if( isset($_POST['pays']) && !empty($_POST['pays']) 
                                &&
                                    isset($_POST['dem']) && !empty($_POST['dem']) &&
                                    isset($_POST['dem2']) && !empty($_POST['dem2']) &&
                                    
                                 isset($_POST['dp1']) && !empty($_POST['dp1'])
                                        && isset($_POST['dp2']) && !empty($_POST['dp2']) 
                                        && isset($_POST['dr1']) && !empty($_POST['dr2'])
                                ){
                                        header('Location:billetfrance.php'); 
                                        session_start();
                                        $_SESSION['pays']=$_POST['pays'];
                                        $_SESSION['dateemission']=$_POST['dem'];
                                        $_SESSION['dateemission2']=$_POST['dem2'];
                                        $_SESSION['datedepart1']=$_POST['dp1'];
                                        $_SESSION['datedepart2']=$_POST['dp2'];
                                        $_SESSION['dater1']=$_POST['dr1'];
                                        $_SESSION['dater2']=$_POST['dr2'];


                                }
            ?>