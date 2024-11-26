<?php
    include('newaccount2.php');
    $connect = connexion('172.16.205.105', 'sio', 'slam', 'Tablette_a_stylet' );
?>
<html>
    <head>
        <title>Inscription</title>
        <link rel="stylesheet" href="newaccount.css">
    </head>
    <body>
         <!--barre d'onglet-->
    <nav>
        <div class="logo"><a href="accueil.html">
            <img src="./images/xencelabs-logo.png" alt="Logo" height="60">
            </a>
        </div>
        <ul>
            <li><a href="#">Produits</a>
              <ul class="sous-onglet">
                <li><a href="./page-Tablettes.html">Tablettes</a></li>
                <li><a href="./page-Accessoires.html">Accessoires</a></li>
              </ul>
            </li>
            <li><a href="./a propos.html">À propos</a></li>
            <li><a href="./contact.html">Contacts</a></li>
          </ul>
          <div class="icones">
            <a href="formulaire.html"><img src="./images/logoconnexion.png" alt="Connexion" height="20"></a>
            <a href=""><img src="./images/logorecherche.png" alt="Rechercher" height="40"></a>
            <a href="panier.html"><img src="./images/logopanier.png" alt="Panier" height="26"></a>
          </div>
      </nav>
          <!--Formulaire d'inscription-->
        <div class="formulaire">
            <h2>Inscription</h2>
            <form action="newaccount2.php" method="POST">
                <input type="text" id="login" name = "login" placeholder="Nom d'utilisateur" required>
                <input type="text" id="mail" name = "mail" placeholder="Adresse e-mail" required>
                <input type="password" id="mdp" name = "mdp" placeholder="Mot de passe" required>
                <input type="password" id="verifmdp" name = "verifmdp" placeholder="Confirmer le mot de passe" required>
                <input type="submit" name="submit" value="Envoyer"/>
            </form>
            <div class="confirmation-message" id="confirmationMessage"></div>
        </div>
        <!--script de la page d'inscription-->
        
    </body>
</html>



