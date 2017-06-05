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
    #articleTop2
    {
      margin: 17px 0 0 0;
    }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/simplePagination.css" />
<script src="dist/jquery.simplePagination.js"></script>
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

<?php include 'menu.php'; ?>

<table class="table table-bordered" id="articleTop">
        <thead>
        <tr>
        <th>id</th>
        <th>Name</th>
        <th>price</th>
        <th>category</th>
        <th>DELETE</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $requete = 'SELECT * FROM '.$_GET['page'].'';
        $reponse= mysql_query($requete);
        while ($data = mysql_fetch_assoc($reponse)) {
        ?>
                    <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['price']; ?> DT</td>
                    <td><?php echo '<img src="'.$data["picture"].'" alt="" width="50px" height="50px">'; ?></td>
                    <td><?php echo "<a href='Delete-rows.php?page=".$data['id']."&event=".$_GET['page']."'>DELETE</a>"; ?></td>
                    </tr>

        <?php
        };
        ?>
        </tbody>
        </table>

<div id="articleTop2">

      <?php
    /*  $requete = 'SELECT * FROM '.$_GET['page'].'';
      $reponse= mysql_query($requete);
         echo "name ---> price <br>";
       while($data = mysql_fetch_assoc($reponse))
       {

       echo $data['name']."  ".$data['price']."  ".$data['cardNumber']." ".$data['address']." ".$data['category']." ------>  <a href='Delete-rows.php?page=".$data['id']."&event=".$_GET['page']."'>DELETE</a> -----> Edit <br>  ";



     }


     echo "    <h1>".$_GET['page']."</h1>";
     */
                   if(isset($_POST['name'])){
           $requete2 = "INSERT INTO ".$_GET['page']." (`name`, `picture`, `price`) VALUES ( '".$_POST['name']."','".$_POST['picture']."','".$_POST['price']."') ";
           mysql_query($requete2);
           echo "    <h1>succ</h1>";

     }
     ?>
  <div class="col-xs-6 col-sm-12 col-md-12">
     <form class="" action="" method="post">
       <label  for="email">Name:</label>
       <input type="text" name="name" value="">
       <label  for="email">picture:</label>
       <input type="text" name="picture" value="">
       <label  for="email">price:</label>
       <input type="text" name="price" value="">
       <input type="submit" value="ADD"></button>
     </form>
   </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
