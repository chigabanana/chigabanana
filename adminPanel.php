<!DOCTYPE html>
<?php
    @mysql_connect("127.0.0.1", "root", "root");
    mysql_select_db("project");
?>
<html lang="en">

  <head>
  <style media="screen">
    #articleTop
    {
      margin: 173px 0 0 0;
    }
  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin panel</title>

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
<?php include 'menu.php'; ?>
    <div class="container" id="articleTop">
      <div class="row">


          <?php

          $requete = 'SELECT * FROM `event` ';
                              // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                              $reponse = mysql_query($requete);
                              // On vérifie si le nombre de lignes dans la réponse est égal à 0
           // Données correctes
          // Organise le contenu de la réponse dans la variable $data

        while( $data = mysql_fetch_assoc($reponse))

          // Utiiliser le tableau $data et afficher la colonne nom_prenom
          {
            echo'
          <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="editEvent.php?page='.$data['name'].'">'.$data['name'].'</a>

                 </div>';
          }
      ?>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <a href="commandeAdmin.php">commande</a>
      </div>
        </div>
      </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
