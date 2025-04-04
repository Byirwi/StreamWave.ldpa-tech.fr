<?php
require_once '../../PHP/auth_check.php';
requireLogin(); // Cette fonction redirigera l'utilisateur si non connecté
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de Jessica Jones</title>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="icon" href="../../Public/favicon.png" type="image/png">
</head>
<body>
    <!-- Début de la barre de navigation -->
    <nav>
        <div class="gauche">
            <a href="../PageDeGarde/Garde.php">
                <img src="../../Public/Logo StreamWave.png" alt="" height="80">
            </a>
            <div class="onglets">
                <a href="../Accueil.php">Accueil</a>
                <a href="#">Séries TV</a>
                <a href="#">Films</a>
                <a href="#">Programmes originaux</a>
                <a href="#">Ajouts récents</a>
                <a href="#">Ma liste</a>
            </div>
        </div>
        <div class="droite">
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="#"><i class="fas fa-bell"></i></a>
            <a href="../Login.php">Mon compte</a>
        </div>
    </nav>
    <!-- Fin de la barre de navigation -->

    <!-- Contenu principal de la page -->
    <div>
        <h1 class="content">Jessica Jones</h1>
        <img class="center-image" src="../../Public/img films_series/séries divers/o3.PNG" alt="Image de Jessica Jones">
        <p class="content_resumer">
            L'histoire suit Jessica Jones, incarnée par Krysten Ritter, une ancienne super-héroïne dotée de super-pouvoirs, qui ouvre une agence de détective privée à New York après que sa carrière héroïque ait été brisée par un traumatisme. Elle se retrouve impliquée dans des enquêtes sur des individus aux capacités exceptionnelles, tout en luttant contre ses propres démons intérieurs.
        </p>
        <div id="film-player" class="content">
            <p>Lecteur vidéo (non fonctionnel)</p>
        </div>
    </div>

    <!-- Pied de page -->
    <footer>
        <h5>Des questions ? Appelez le 06 46 24 86 76</h5>
        <div class="colonnes">
            <div class="colonne">
                <p>FAQ</p>
                <p>Relations Investisseurs</p>
                <p>Modes de lecture</p>
                <p>Mentions légales</p>
                <p>Programmes originaux Netflix</p>
            </div>
            <div class="colonne">
                <p>Centre d'aide</p>
                <p>Relations Investisseurs</p>
                <p>Modes de lecture</p>
                <p>Mentions légales</p>
                <p>Programmes originaux Netflix</p>
            </div>
            <div class="colonne">
                <p>FAQ</p>
                <p>Recrutement</p>
                <p>Conditions d'utilisation</p>
                <p>Nous contacter</p>
            </div>
            <div class="colonne">
                <p>Compte</p>
                <p>Utiliser des cartes cadeaux</p>
                <p>Confidentialité</p>
                <p>Test de vitesse</p>
            </div>
        </div>
        <p>StreamWave, France</p>
    </footer>
    <!-- Fin du pied de page -->
</body>
</html>