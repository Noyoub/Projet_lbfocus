<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>LbFocus | Objectifs photo</title>  
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="lb focus est un site de photographie qui présente le parcours de deux photographes amateurs du Mans, Lucas Bouillon et Lana brunet."> 
        <meta name="keywords" content="photo,passion,objectif,st saturnin,le mans,shooting,lucas bouillon,lana brunet,canon,">
        <link rel="icon" type="image/png" href="IMG/lens.png" />
        <script src="https://unpkg.com/scrollreveal"></script>
    </head>
    <body>
      <div class="header">
        <h1 id="mainTitle">Lb Focus</h1>
        <p id="sous_titre">Deux Photographes</p>
      </div>

      <?php include "nav.php"?>

      <section id="obj">
          <div class="photos_descrip">
            <h2 style="color: black;">Objectifs</h2>
          </div>
          <div class="responsive2">
              <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="IMG/canon75-300.png" alt="canon75300" style="width:150px;height:280px;margin-top:5px;">
                    </div>
                    <div class="flip-card-back">
                      <h3>Canon EF 75-300mm f/4-5.6 III USM</h3>
                      <p>Longueur Focale : 75-300mm</p>
                      <p>Ouverture maximale : f/4</p>
                      <p>Utilisation : Photographie animalière</p>
                    </div>
                  </div>
              </div>
              <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="IMG/tamron.png" alt="tamron" style="width:200px;height:280px;margin-top:5px;">
                    </div>
                    <div class="flip-card-back">
                      <h3>Tamron Objectif SP AF 17-50mm F/2,8 XR Di II</h3>
                      <p>Longueur Focale : 17-50mm</p>
                      <p>Ouverture maximale : f/2,8</p>
                      <p>Utilisation : Photographie de paysages/astronomie</p>
                    </div>
                  </div>
              </div>
              <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="IMG/canon18135.png" alt="canon18135" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                      <h3>Canon Objectif EF-S 18-135 mm f/3,5-5,6 STM</h3>
                      <p>Longueur Focale : 18-135mm</p>
                      <p>Ouverture maximale : f/3,5</p>
                      <p>Utilisation : Polyvalent</p>
                    </div>
                  </div>
              </div>
              <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="IMG/canon18.png" alt="canon18" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                      <h3>Canon EF 50mm f/1.8 STM</h3>
                      <p>Longueur Focale : 50mm</p>
                      <p>Ouverture maximale : f/1,8</p>
                      <p>Utilisation : Photographie de portraits</p>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <script type="text/javascript" src="main.js"></script>
    </body>
    <?php include "footer.php"?>
</html>