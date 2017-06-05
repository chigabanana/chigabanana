<!DOCTYPE html>
<?php
  mysqli_connect("127.0.0.1","root","root","project");
 ?>
<html lang="en">
<style media="screen">
  #articleTop
  {
    top: 100px;
  }
  body {
    background: #eee;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    height:
  }

  .clearfix {
    content: "";
    display: table;
    clear: both;
  }



  #site-header {
    margin: 0 0 30px 0;
  }



  .container {
    font-family: 'Open Sans', sans-serif;
    margin: 0 auto;
    width: 980px;
  }

  #cart {
    width: 100%;
  }

  #cart h1 {
    font-weight: 300;
  }

  #cart a {
    color: #3b1592;
    text-decoration: none;

    -webkit-transition: color .2s linear;
    -moz-transition: color .2s linear;
    -ms-transition: color .2s linear;
    -o-transition: color .2s linear;
    transition: color .2s linear;
  }

  #cart a:hover {
    color: #000;
  }

  .product.removed {
    margin-left: 980px !important;
    opacity: 0;
  }

  .product {
    border: 1px solid #eee;
    margin: 20px 0;
    width: 100%;
    height: 195px;
    position: relative;

    -webkit-transition: margin .2s linear, opacity .2s linear;
    -moz-transition: margin .2s linear, opacity .2s linear;
    -ms-transition: margin .2s linear, opacity .2s linear;
    -o-transition: margin .2s linear, opacity .2s linear;
    transition: margin .2s linear, opacity .2s linear;
  }



  .product header, .product .content {
    background-color: #fff;
    border: 1px solid #fff;
    border-style: none none solid none;
    float: left;
  }

  .product header {
    background: #000;
    margin: 0 1% 20px 0;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 88%;
    height: 195px;
  }

  .product header:hover img {
    /* opacity: .7;*/
  }

  .product header:hover h3 {
    bottom: 73px;
  }

  .product header h3 {
    background: #53b5aa;
    color: #fff;
    font-size: 22px;
    font-weight: 300;
    line-height: 49px;
    margin: 0;
    padding: 0 30px;
    position: absolute;
    bottom: -50px;
    right: 0;
    left: 0;

    -webkit-transition: bottom .2s linear;
    -moz-transition: bottom .2s linear;
    -ms-transition: bottom .2s linear;
    -o-transition: bottom .2s linear;
    transition: bottom .2s linear;
  }



  .product .content {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 144px;
    padding: 0 20px;
    width: 75%;
  }

  .product h1 {
    color: #53b5aa;
    font-size: 25px;
    font-weight: 300;
    margin: 17px 0 20px 0;
  }

  .product footer.content {
    height: 50px;
    margin: 141px 0 0 23px;
    padding: 0;
  }

  .product footer .price {
    background: #fcfcfc;
    color: #000;
    float: right;
    font-size: 15px;
    font-weight: 300;
    line-height: 49px;
    margin: 0;
    padding: 0 30px;
  }

  .product footer .full-price {
  /*  background: #53b5aa;*/
    color: #fff;
    float: right;
    font-size: 46px;
    font-weight: 300;
    line-height: 49px;
    margin: 0;
    padding: 0 0px;

    -webkit-transition: margin .15s linear;
    -moz-transition: margin .15s linear;
    -ms-transition: margin .15s linear;
    -o-transition: margin .15s linear;
    transition: margin .15s linear;
  }
</style>
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
<?php include "menu.php";
 if (!isset($_GET['page'])) {

  include 'croussel_slide_menu.php';
  $requete2 = 'SELECT * FROM `event` ';
                      // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                      $reponse2 = mysql_query($requete2);
                      // On vérifie si le nombre de lignes dans la réponse est égal à 0
    // Données correctes
  // Organise le contenu de la réponse dans la variable $data


  while( $data2 = mysql_fetch_assoc($reponse2))

  // Utiiliser le tableau $data et afficher la colonne nom_prenom
  {

  echo '<div class="col-xs-12 col-sm-12 col-md-6">
    <h3 class="event-news">latest '.$data2['name'].'</h3>';
    $requete = 'SELECT * FROM '.$data2['name'].' ORDER BY id DESC LIMIT 4';
                    // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                    $reponse = mysql_query($requete);
                    //$data = mysql_fetch_assoc($reponse);

                    if (mysql_num_rows($reponse)!=0) {

                      while ($data=mysql_fetch_assoc($reponse))
                    {

                    echo'

                    <div class="col-xs-12 col-sm-6 col-md-12" ">
                             <a class="list-quotes" href="article.php?page='.$data['name'].'&articleID='.$data['id'].'&category='.$data2['name'].'">
                                 <!-- Recommended size 360X360 -->
                                 <img class="img-responsive" alt="img" src="'.$data['picture'].'" >
                                 <div class="quotes">
                                     <h1>'.$data['name'].'</h1>
                                     <span class="year">'.$data['price'].' DT</span>
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
                   }





   //include 'latest_clubbing.php';

   //include 'latest_festival.php';


}

/*elseif ((($_GET['page'])== 'festival')) {
  $requete = 'SELECT * FROM `festival` ';
                  // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                  $reponse = mysql_query($requete);
                  // On vérifie si le nombre de lignes dans la réponse est égal à 0

                      // Données correctes
                        while ($data = mysql_fetch_assoc($reponse))
                        {
                        echo'
                      <div class="col-xs-12 col-sm-6 col-md-3">
                                 <a class="list-quotes" href="/">
                                     <!-- Recommended size 360X360 -->
                                     <img class="img-responsive" alt="img" src="'.$data['picture'].'"  width="360px" height="360px">
                                     <div class="quotes">
                                         <h1>'.$data['name'].'</h1>
                                         <span class="year">'.$data['price'].'</span>
                                         <span class="cat-name">Carthage</span>
                                         <p>
                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span>...Read More</span>
                                         </p>
                                     </div>
                                 </a>
                             </div>';
                           }

                      // Organse le contenu de la réponse dans la variable $data

                    }*/

                    else {
                      $requete = 'SELECT * FROM '.$_GET['page'].' ORDER BY id DESC ';
                                      // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                                      $reponse = mysql_query($requete);
                                      // On vérifie si le nombre de lignes dans la réponse est égal à 0

                                          // Données correctes
                                          while ($data = mysql_fetch_assoc($reponse))
                                          {
                                            echo '

                          <div class="container-fluid">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" id="articleTop">

                            <section id="cart">
                              <article class="product">
                              <div class="col-xs-12 col-sm-12 col-md-4" >
                                <div class="container-fluid">
                                <header>

                                <a class="list-quotes" href="article.php?page='.$data['name'].'&articleID='.$data['id'].'&category='.$_GET['page'].'">
<img src="'.$data['picture'].'"  alt="" width="100%" height="100%"></a>


                                </header>
                                </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4" >
                                <div class="content">

                                  <h1>'.$data['name'].'</h1>

                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque.


                                </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4" >
                                <footer class="content">

                                <h2 class="full-price">
                                            <a class="list-quotes" href="article.php?page='.$data['name'].'&articleID='.$data['id'].'&category='.$_GET['page'].'">'.$data['price'].' DT	</a>
                                </h2>
                                </footer>
                                </div>

                              </article>

                            </section>
                          </div>

                          </div>
                        </div>
                        ';



                      }


                                             }






                                          // Organse le contenu de la réponse dans la variable $data


              /*    elseif ((($_GET['page'])== 'clubbing')) {
                    $requete = 'SELECT * FROM `clubbing` ORDER BY id DESC ';
                                    // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                                    $reponse = mysql_query($requete);
                                    // On vérifie si le nombre de lignes dans la réponse est égal à 0

                                        // Données correctes
                                        // Organise le contenu de la réponse dans la variable $data
                                        while ($data = mysql_fetch_assoc($reponse))
                                        {
                                        echo'
                                      <div class="col-xs-12 col-sm-6 col-md-3">
                                                 <a class="list-quotes" href="article.php?page='.$data['name'].'&articleID='.$data['id'].'">
                                                     <!-- Recommended size 360X360 -->
                                                     <img class="img-responsive" alt="img" src="'.$data['picture'].'"  width="360px" height="360px">
                                                     <div class="quotes">
                                                         <h1>'.$data['name'].'</h1>
                                                         <span class="year">'.$data['price'].'</span>
                                                         <span class="cat-name">Carthage</span>
                                                         <p>
                                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span>...Read More</span>
                                                         </p>
                                                     </div>
                                                 </a>
                                             </div>
                                             ';



                                           }
                                  }*/

?>

<!-- new bar carousel -->
<!-- croussel slide menu news  -->


  <!--  latest event festival  -->

    <!--latest cinema box -->
<!-- footer -->
