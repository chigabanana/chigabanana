<!DOCTYPE html>
<?php
    @mysql_connect("127.0.0.1", "root", "root");
    mysql_select_db("project");
?>
<html lang="en">
  <head>
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
    <header id="site-header">
      <style media="screen">
      body {
      	background: #eee;
      	margin: 0;
      	padding: 0;
      	overflow-x: hidden;
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
      	width: 24%;
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
      	background: #53b5aa;
      	color: #fff;
      	float: right;
      	font-size: 22px;
      	font-weight: 300;
      	line-height: 49px;
      	margin: 0;
      	padding: 0 30px;

      	-webkit-transition: margin .15s linear;
      	-moz-transition: margin .15s linear;
      	-ms-transition: margin .15s linear;
      	-o-transition: margin .15s linear;
      	transition: margin .15s linear;
      }


      </style>

      <!--<div class="container">
        <h1>Shopping cart <span>[</span> <em><a href="https://codepen.io/tag/rodeo-007" target="_blank">CodePen Challange</a></em> <span class="last-span is-open">]</span></h1>
      </div>-->
    </header>
<?php   $requete = 'SELECT * FROM 'festival' ORDER BY id DESC ';
                  // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                  $reponse = mysql_query($requete);
                  // On vérifie si le nombre de lignes dans la réponse est égal à 0

                      // Données correctes
                        while ($data = mysql_fetch_assoc($reponse))
                        {
                          echo '
    <div class="container-fluid">
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <section id="cart">
        <article class="product">
          <header>

              <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/1.jpg" alt="" width="227px" height="194px">


          </header>

          <div class="content">

            <h1>Lorem ipsum</h1>

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque.


          </div>
          <footer class="content">


            <a class="list-quotes" href="article.php?page='.$data['name'].'&articleID='.$data['id'].'&category='.$_GET['page'].'"><h2 class="full-price">'.$data['price'].'</h2></a>



          				</footer>

        </article>

      </section>
    </div>

    </div>
  </div>';
      }
  }
  ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
