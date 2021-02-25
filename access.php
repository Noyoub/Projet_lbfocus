<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>LbFocus | Accessoires photo</title>  
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
      <section id="access">
          <div class="photos_descrip">
            <h2 style="color: black;">Accessoires</h2>
          </div>
          <div class="responsive2">
              <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="IMG/joby.png" alt="joby" style="width:170px;height:280px;margin-top:10px;">
                    </div>
                    <div class="flip-card-back">
                      <h3>GorillaPod 3K Kit Joby</h3>
                      <p>Poids supporté : 3kg</p>
                      <p>Facile à transporter</p>
                      <p>Robuste et flexible</p>
                    </div>
                  </div>
              </div>
              <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="IMG/pixi.png" alt="pixi" style="width:280px;height:210px;margin-top:40px;">
                    </div>
                    <div class="flip-card-back">
                      <h3>MANFROTTO MINI TRÉPIED PIXI NOIR</h3>
                      <p>Poids supporté : 1kg</p>
                      <p>Facile à transporter</p>
                      <p>Très léger et prix faible</p>
                    </div>
                  </div>
              </div>
              <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="IMG/lensball.png" alt="lensball" style="width:200px;height:200px;margin-top: 50px;">
                    </div>
                    <div class="flip-card-back">
                      <h3>ORIGINAL LENSBALL POCKET</h3>
                      <p>Diamètre : 60mm</p>
                      <p>Poids : 250gr</p>
                      <p>Utilisation : Photographie à reflets</p>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <script type="text/javascript" src="main.js"></script>
    </body>
    <?php include "footer.php"?>
</html>