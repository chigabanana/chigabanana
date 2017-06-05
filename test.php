<!DOCTYPE html>
<?php
    @mysql_connect("127.0.0.1", "root", "root");
    mysql_select_db("project");
?>
<html lang="en">
  <head>

    <link rel="stylesheet" href="css/index.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!-- social media -->
<div class="social-media">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <img style="float: right ;" src="https://images.seeklogo.net/2016/09/facebook-icon-preview-200x200.png" alt="" width="50px" height="50px">
          <img style="float: right ;" src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/google_circle_color-512.png" alt="" width="50px" height="50px">
          <img style="float: right ;" src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-256.png" alt="" width="50px" height="50px">




        </div>
      </div>
    </div>
  </div>

    <!-- top menu   -->
    <div class="container-fuid" id="top">
      <!-- project logo -->
      <div class="row">
        <div class="col-md-6">
            <h2>my project website</h2>

        </div>
        <div class="col-md-6">
          <div class="col-md-4">
<!-- event dropdown menu -->

          <div class="dropdown">
              <h3 class="dropbtn">event</h3>
              <div class="dropdown-content">
                <?php
                $requete = 'SELECT * FROM `event` ';
                                    // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                                    $reponse = mysql_query($requete);
                                    // On vérifie si le nombre de lignes dans la réponse est égal à 0
                ?>

              <?php   // Données correctes
                // Organise le contenu de la réponse dans la variable $data
              while( $data = mysql_fetch_assoc($reponse))

                // Utiiliser le tableau $data et afficher la colonne nom_prenom
                {echo "<a href='#'>".$data['name']."  "."</a>";}

            ?>



              </div>
            </div>
          </div>

            <div class="col-md-4">
<!-- cinema dropdown menu-->
            <div class="dropdown">
                <h3 class="dropbtn">cinema</h3>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
<!-- contact us menu -->
            <div class="dropdown">
                <h3 class="dropbtn">contact us </h3>
                <div class="dropdown-content">
                  <form class="" action="index.html" method="post">
                    <label for="email">username</label>

                    <input type="email" class="form-control" placeholder="email@email.com"name="" value="">
                     <br>
                     <label for="email">email</label>

                    <input type="email" class="form-control" placeholder="email@email.com"name="" value="">
                    <label for="email">message</label>
                    <br>
                    <textarea class="form-control" name="message" rows="8" cols="80"></textarea>
                    <button class="btn btn-default"type="button" name="button">send</button>
                  </form>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>
