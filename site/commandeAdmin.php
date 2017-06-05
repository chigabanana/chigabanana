<!DOCTYPE html>
<?php
    @mysql_connect("127.0.0.1", "root", "root");
    mysql_select_db("project");
?>
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
    <?php include 'menu.php'; ?>

    <table class="table table-bordered" id="articleTop">
            <thead>
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>cardNumber</th>
            <th>address</th>
            <th>articleName</th>
            <th>category</th>
            <th>DELETE</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $requete = 'SELECT * FROM commande';
            $reponse= mysql_query($requete);
            while ($data = mysql_fetch_assoc($reponse)) {
            ?>
                        <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['cardNumber']; ?></td>
                        <td><?php echo $data['address']; ?></td>
                        <td><?php echo $data['articleName']; ?></td>
                        <td><?php echo $data['category']; ?></td>

                        <td><?php echo "<a href='Delete-commande.php?page=".$data['id']."'>DELETE</a>"; ?></td>
                        </tr>

            <?php
            };
            ?>
            </tbody>
            </table>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
