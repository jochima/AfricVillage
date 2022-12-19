<?php   
     if(isset($_POST['resident']) && isset($_POST['nom']) && isset($_POST['profession'])
                && isset($_POST['matricule']) && isset($_POST['dateEmission']) && isset($_POST['paysEmission'])
        ){
                    if(!empty($_POST['resident']) && !empty($_POST['nom'])
                            && !empty($_POST['profession']) && !empty($_POST['matricule'])

                            && !empty($_POST['dateEmission']) && !empty($_POST['paysEmission'])
                    
                    ){ 
                            $_SESSION['nom_user'] =strtoupper($_POST['nom']);
                            $_SESSION['resident'] = $_POST['resident'];
                            $_SESSION['matricule'] = strtoupper($_POST['matricule']);
                            $profession = trim($_POST['profession']);
                            $prix = trim($_POST['prixbillet']);
                            if (empty($profession)) {
                                $_SESSION['profession'] = "SANS PROFESSION";
                            }
                            else{ 
                                $_SESSION['profession'] =strtoupper($_POST['profession']);
                            }
                            if (empty($prix)) {
                                $_SESSION['limite'] = 7200;//___montant alloue par defaut
                            }
                            else{ 
                                $_SESSION['limite'] =strtoupper($_POST['prixbillet']);
                            } 
                            //___billet d'avion
                            $depart = $_SESSION['depart'];
                            $retour = $_SESSION['retour'];
                            $destination = $_SESSION['pays'];
                            //___transaction
                            $origineFonds = $_SESSION['origineFonds']= 'COMMERCE';
                            $dateEmission=$_SESSION['dateEmission']=$_POST['dateEmission'];
                            $paysEmission =$_SESSION['paysEmission']= strtoupper($_POST['paysEmission']);

                            
                    }

        }

        function AvoirReference($length=20){
            $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $string = '';
            for($i=0; $i<$length; $i++){
                $string .= $chars[rand(0, strlen($chars)-1)];
            }
            return $string;
        }

        function AvoirNumeroTicket($length=20){
            $chars = '0123456789';
            $string = '';
            for($i=0; $i<$length; $i++){
                $string .= $chars[rand(0, strlen($chars)-1)];
            }
            return $string;
        }

        $function1 = AvoirReference(7);
        $function2 = AvoirNumeroTicket(12);

?>