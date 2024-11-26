<?php
        include('formulaire2.php');
        $connect = connexion('172.16.205.105', 'sio', 'slam', 'Tablette_a_stylet' );
    ?>
<html>
    <head>
        <title>Formulaire</title>
        <link rel="stylesheet" href="formulaire.css">
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
            <div class="formulaire">
                <h2> Connexion </h2>
                <form action="CMAA1.php" method="GET">
                    <input type="text" id="prenom" placeholder="Nom d'utilisateur" required>
                    <input type="password" id="motDePasse" placeholder="Mot de passe" required>
                    <input type="submit" name="submit" value="Envoyer"/>
                </form>
                <p class="create-account"> Pas encore de compte ?<a href="newaccount.php"> Nouveau Compte</a></p>
            </div>
            <div class="message-container" id="messageContainer"></div>
    
        </body>
</html>
