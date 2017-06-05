<!DOCTYPE html>
<html lang="en">
  <head>
  <style media="screen">
    #articleTop
    {
      margin: 173px 0 0 0;
    }
  </style>
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



    <?php include "menu.php";?>
    <div id="articleTop">
      <div class="row">

      <?php
      echo ' <div class="col-xs-12 col-sm-12 col-md-6">';
    $requete = 'SELECT * FROM '.$_GET['category'].' WHERE name=\''.$_GET['page'].'\' ';
                    // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                    $reponse = mysql_query($requete);
                    $data = mysql_fetch_assoc($reponse);
                      echo ' <div class="col-xs-12 col-sm-12 col-md-6">';
                    echo '<img class="img-responsive" alt="img" src="'.$data['picture'].'"  width="360px" height="360px">';
                    echo "</div>";
                    echo ' <div class="col-xs-12 col-sm-12 col-md-6">';

                    echo '<h1>'.$data['name'].'</h1><br> ';
                    echo '<span class="year">'.$data['price'].' DT</span>';
                    echo "<br>  <br>";
                    echo '
                    <form class="" action="index.html" method="post">
                    <a href="commande.php?page='.$data['name'].'&articleID='.$data['id'].'&articleprice='.$data['price'].'&category='.$_GET['category'].'"><button class="btn btn-default"type="button" name="button">Buy</button></a>
                    </form>
                    <br> <br>
                    </div>
';


echo "</div>";

// Utiiliser le tableau $data et afficher la colonne nom_prenom

echo "<br>";
echo '<div class="col-xs-12 col-sm-6 col-md-6" ">';

  $requete2 = 'SELECT * FROM '.$_GET['category'].' ORDER BY rand() LIMIT 4';
                  // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                  $reponse2 = mysql_query($requete2);
                  //$data = mysql_fetch_assoc($reponse);

                  if (mysql_num_rows($reponse2)!=0) {
                    while ($data2=mysql_fetch_assoc($reponse2))
                  {

                  echo'

                  <div class="col-xs-12 col-sm-6 col-md-6" ">
                           <a class="list-quotes" href="article.php?page='.$data2['name'].'&articleID='.$data2['id'].'&category='.$_GET['category'].'">
                               <!-- Recommended size 360X360 -->
                               <img class="img-responsive" alt="img" src="'.$data2['picture'].' " >
                               <div class="quotes">
                                   <h1>'.$data2['name'].'</h1>
                                   <span class="year">'.$data2['price'].' DT</span>
                                   <span class="cat-name">Carthage</span>
                                   <p>
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span>...Read More</span>
                                   </p>
                               </div>
                           </a>
                       </div>';


                     }

                   }
                   echo "</div>";



    ?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
