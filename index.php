<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Atlampy</title>
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>

    <div class="nav">
      <img class="nav-logo" src="./img/logo_raspberry.png" alt="logo Atlampy">

      <nav class="nav-left">
        <a class="nav-item" href="#accueil"> Accueil </a>
        <a class="nav-item" href="#presentation"> Présentation </a>
        <a class="nav-item" href="#apropos"> A propos </a>
      </nav>

      <nav class="nav-right">
        <button type="button" class="nav-button-inscr">S'inscrire</button>
        <button type="button" class="nav-button-login">Se connecter</button>
      </nav>

    </div>

    <img class="aquarium" src="./img/logo" alt="image aquarium">

    <div class="content">

      <div class="présentation">
        <h1>Présentation</h1>
        <p>Bienvenue sur Atlampy ... le projet d'aquarium connecté !</p>
        <p>Notre projet consiste en un boitier contenant un raspberry pi ainsi que plusieurs capteurs nous permettant de l'équiper sur n'importe quel aquarium et permettant d'avoir des relevés essentiels.</p>
      </div>

      <div class="images">

        <article class="style1">
            <img class="image" src="img/ph.jpg" alt="" />
            <div class="image-text">
              <h2>Ph</h2>
              <p>Permet de gerer le potentiel d'hydrogène qui change selon l'èspece de vos poissons.</p>
            </div>
        </article>

        <article class="style1">
            <img class="image" src="img/temperature.jpg" alt="" />
            <div class="image-text">
              <h2>Température</h2>
              <p>Permet de vous assurer que vos poissons vive à une température naturelle.</p>
            </div>
        </article>

        <article class="style1">
            <img class="image" src="img/nitrate.jpg" alt="" />
            <div class="image-text">
              <h2>Nitrate/Nitrite</h2>
              <p>Permet de gerer le taux de ce composant qui peut être toxique pour vos poissons.</p>
            </div>
        </article>

      </div>

    </div>

  </body>
  <footer>
    <div class="a propos">
      <p>Projet créé par : </p>
      <ul>
        <p>Alexis SALVETTI  Email : alexis_salvetti@ens.univ-artois.fr</p>
        <p>Mathilde PELLOIS  Email : mathilde_pellois@ens.univ-artois.fr</p>
        <p>Arthur MARZINKOWSKI  Email : arthur_marzinkowski@ens.univ-artois.fr</p>
      </ul>
    </div>
  </footer>
</html>
