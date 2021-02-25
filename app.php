<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>LbFocus | Appareils photo</title>  
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
        
        <section id="app">
            <div class="responsive1">
                <h2 class="h2_mb">Canon EOS 77D</h2>
                <div class="img"><img src="IMG/77D.png" alt="77D"></div>
                <div class="descrip">
                    <h2 class="h2_pc">Canon EOS 77D</h2>
                    <h3>Caractéristiques techniques</h3>
                    <hr>
                    <ul>
                        <li>Capteur APS-C</li>
                        <li>Environ 24,2 millions de pixels</li>
                        <li>Wifi, Bluetooth</li>
                        <li>Écran tactile et orientable à 180°</li>
                        <li>Qualité d'image correcte jusqu'à 3200 ISO</li>
                        <li>Stabilisation vidéo numérique 5 axes</li>
                    </ul>
                </div>
            </div>
            <div class="responsive1">
                <h2 class="h2_mb">Canon EOS 2000D</h2>
                <div class="img"><img src="IMG/2000D.png" alt="2000D"></div>
                <div class="descrip">
                    <h2 class="h2_pc">Canon EOS 2000D</h2>
                    <h3>Caractéristiques techniques</h3>
                    <hr>
                    <ul>
                        <li>Capteur APS-C</li>
                        <li>Environ 24,2 millions de pixels</li>
                        <li>Wifi</li>
                        <li>Écran fixe non tactile</li>
                        <li>Facile d'utilisation</li>
                        <li>Faible prix</li>
                    </ul>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="main.js"></script>
    </body>
    <?php include "footer.php"?>
</html>