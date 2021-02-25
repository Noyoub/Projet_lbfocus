<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>LbFocus | Photos de portrait</title>  
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
        
        <section id="portrait">
            <div class="photos_descrip">
                <h2><i class="fa fa-quote-left"></i>   Créer une ambiance, créer une atmosphère..   <i class="fa fa-quote-right"></i></h2>
            </div>

            <div class="contain">
                <div class="headline">
                    <h2 class="photo_title">---- Dark Style ----</h2>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="IMG/Urban/portraits/urban1.jpeg" alt="urban_image">
                        <img src="IMG/Urban/portraits/urban2.jpeg" alt="urban_image">
                        <img src="IMG/Urban/portraits/urban3.jpeg" alt="urban_image">
                    </div>
                    <div class="column">
                        <img src="IMG/Urban/portraits/urban4.jpeg" alt="urban_image">
                        <img src="IMG/Urban/portraits/urban5.jpeg" alt="urban_image">
                        <img src="IMG/Urban/portraits/urban6.jpeg" alt="urban_image">
                    </div>
                    <div class="column">
                        <img src="IMG/Urban/portraits/urban7.jpeg" alt="urban_image">
                        <img src="IMG/Urban/portraits/urban8.jpeg" alt="urban_image">
                        <img src="IMG/Urban/portraits/urban9.jpeg" alt="urban_image">
                    </div>
                </div>
            </div>

            <div class="contain">
                <div class="headline">
                    <h2 class="photo_title">---- Bright Style ----</h2>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="IMG/California/portraits/cali1.jpeg" alt="california_image">
                        <img src="IMG/California/portraits/cali2.jpeg" alt="california_image">
                    </div>
                    <div class="column">
                        <img src="IMG/California/portraits/cali3.jpeg" alt="california_image">
                        <img src="IMG/California/portraits/cali4.jpeg" alt="california_image">
                    </div>
                    <div class="column">
                        <img src="IMG/California/portraits/cali5.jpeg" alt="california_image">
                        <img src="IMG/California/portraits/cali6.jpeg" alt="california_image">
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="main.js"></script>
    </body>
    <?php include "footer.php"?>
</html>