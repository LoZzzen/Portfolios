<?php 
    function connexion ($serveur, $user, $mdp, $base){
        if($bdd = mysqli_connect($serveur, $user, $mdp, $base)){
           
            return ($bdd);
        }
        else{
            echo "Erreur de connexion";
        }
    }
?>