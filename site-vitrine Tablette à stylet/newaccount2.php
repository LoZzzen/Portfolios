<?php 
    function connexion ($serveur, $user, $mdp, $base){
        if($bdd = mysqli_connect($serveur, $user, $mdp, $base)){
            return ($bdd);
            $log = $_POST['login'];
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];
            $verifmdp = $_POST['verifmdp'];
            
            if($mdp == $verifmdp){
                $requete = "INSERT INTO USER (login, mail, mdp, verifmdp) 
                VALUES('$log', '$mail', '$mdp', '$verifmdp')";
                echo $requete;
                $resultat = mysqli_query($bdd, $requete);
                echo $resultat;
                include("newaccount.php");
            }
            else{
                echo "Verifier votre mot de passe";
                include("newaccount.php");
            }
        }
        else{
            echo "Erreur de connexion";
        }
    }
?>