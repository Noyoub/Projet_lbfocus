<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>LbFocus | Qui sommes nous ?</title>  
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="description" content="lb focus est un site de photographie qui présente le parcours de deux photographes amateurs du Mans, Lucas Bouillon et Lana brunet."> 
        <meta name="keywords" content="photo,passion,objectif,st saturnin,le mans,shooting,lucas bouillon,lana brunet,canon,">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="IMG/lens.png" />
        <script src="https://unpkg.com/scrollreveal"></script>
    </head>
    <body>
      <div class="header">
        <h1 id="mainTitle">Lb Focus</h1>
        <p id="sous_titre">Deux Photographes</p>
      </div>

      <?php include "nav.php"?>
      <section id="about">
          <div class="about_title">
              <h2>Lbfocus, c'est qui ?</h2>
          </div>
          <div class="about_items">
              <div class="card">
                  <img src="IMG/lucas.JPG" alt="Lucas" style="width:100%">
                  <h3>Lucas Bouillon</h3>
                  <p>Âge : 21 ans</p>
                  <p class="title">Photographe amateur, Développeur Web</p>
                  <p>Spécialité : Photographies de Portrait</p>
                  <p>Le Mans</p>
                  <br><hr><br>
                  <a href="https://www.facebook.com/Noyoublucas" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/lucasbouillon/?hl=fr" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="https://twitter.com/lucasbouillon" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="card">
                  <img src="IMG/lana.JPG" alt="Lana" style="width:100%">
                  <h3>Lana Brunet</h3>
                  <p>Âge : 21 ans</p>
                  <p class="title">Photographe amateur, Étudiante infirmière</p>
                  <p>Spécialité : Photographies de Paysages</p>
                  <p>Le Mans</p>
                  <br><hr><br>
                  <a href="https://www.facebook.com/lana.brunet" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/lanabrunet/?hl=fr" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="https://twitter.com/Lanabrnt" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
          </div>
      </section>
      <script type="text/javascript" src="main.js"></script>
    </body>
    <?php include "footer.php"?>
</html>