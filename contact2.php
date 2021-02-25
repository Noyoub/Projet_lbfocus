<!DOCTYPE html>
<html>
    <head>
        <title>LbFocus | Contact</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="lb focus est un site de photographie qui présente le parcours de deux photographes amateurs du Mans, Lucas Bouillon et Lana brunet."> 
        <meta name="keywords" content="photo,passion,objectif,st saturnin,le mans,shooting,lucas bouillon,lana brunet,canon,">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://unpkg.com/scrollreveal"></script>
        <link rel="icon" type="image/png" href="IMG/lens.png" />
        <script src="js/script.js"></script>
    </head>
    <body>
      <div class="header">
        <h1 id="mainTitle">Lb Focus</h1>
        <p id="sous_titre">Deux Photographes</p>
      </div>

      <?php include "nav.php"?>

      <section id="contact">
        <div class="container">
          <div class="heading">
            <h2>Contactez-nous</h2>
          </div>
          <div class="row">
            <div class="col-lg-12 col-lg-offset-1">
              <form id="contact-form" method="post" action="" role="form">
                
                <div class="names">
                  <div class="prenom">
                    <label for="firstname"><span class="red">* </span>Prénom :</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom">
                    <p class="comments"></p>
                  </div>

                  <div class="nom">
                    <label for="name"><span class="red">* </span>Nom :</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                    <p class="comments"></p>
                  </div>
                </div>

                <div class="mailandmes">
                  <div class="email">
                    <label for="email"><span class="red">* </span>Email :</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Votre email">
                    <p class="comments"></p>
                  </div>

                  <div class="message">
                    <label for="message"><span class="red">* </span>Message :</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
                    <p class="comments"></p>
                  </div>
                </div>

                <div>
                  <p class="red"><strong>* Ces informations sont requises</strong></p>
                </div>

                <div>
                  <button type="submit" class="button1">ENVOYEZ</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </section>
      <script type="text/javascript" src="main.js"></script>
    </body>
    <?php include "footer.php"?>
</html>
