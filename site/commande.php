<!DOCTYPE html>
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


    <div id="articleTop">
<div class="row">

      <?php include "menu.php";
echo '

        <div class="col-xs-12 col-sm-12 col-md-6">
          ';

      $requete = 'SELECT * FROM '.$_GET['category'].' WHERE name=\''.$_GET['page'].'\' AND id=\''.$_GET['articleID'].'\' ';
                      // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                    $reponse=mysql_query($requete);
                    $data = mysql_fetch_assoc($reponse);
                    echo '<img class="img-responsive" alt="img" src="'.$data['picture'].'" >';
                    if(isset($_POST['name'])){
            $requete2 = "INSERT INTO `commande`(`name`, `cardNumber`, `address`, `articleName`, `category`) VALUES ( '".$_POST['name']."','".$_POST['email']."','".$_POST['address']."','".$_GET['page']."','".$_GET['category']."' ) ";
            mysql_query($requete2);
            echo "    <h1>succ</h1>";


}


      ?>
    </div>


      <div class="col-xs-12 col-sm-12 col-md-6">
      <form class="" action="" method="post">
        <h2><?php echo $_GET['page']; ?></h2>
        <br>
         <label class="control-label col-sm-2" for="email">Name:</label>
        <input class="form-control" type="text" name="name" value=""> <br>
        <label class="control-label col-sm-2" for="email">cardNumber:</label>
        <input class="form-control" type="text" name="email" value=""> <br>
        <label class="control-label col-sm-2" for="email">address:</label>
        <input class="form-control" type="text" name="address" value=""> <br>PRIX :
        <?php echo $_GET["articleprice"]; ?> DT<br><br>
        <input class="btn btn-default" type="submit" value="buy"></button>
      </form>
    </div>
      </div>
      <br><br><br>




      <?php  echo '<div class="col-xs-12 col-sm-12 col-md-12" ">';

        $requete2 = 'SELECT * FROM '.$_GET['category'].' ORDER BY rand()  LIMIT 4';
                        // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                        $reponse2 = mysql_query($requete2);
                        //$data = mysql_fetch_assoc($reponse);

                        if (mysql_num_rows($reponse2)!=0) {
                          while ($data2=mysql_fetch_assoc($reponse2))
                        {

                        echo'

                        <div class="col-xs-12 col-sm-6 col-md-3" ">
                                 <a class="list-quotes" href="article.php?page='.$data2['name'].'&articleID='.$data2['id'].'&category='.$_GET['category'].'">
                                     <!-- Recommended size 360X360 -->
                                     <img class="img-responsive" alt="img" src="'.$data2['picture'].'" >
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
