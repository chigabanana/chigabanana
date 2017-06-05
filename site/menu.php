<!DOCTYPE html>
<?php
    @mysql_connect("127.0.0.1", "root", "root");
    mysql_select_db("project");
?>
<html lang="en">
  <head>
    <style media="screen">
    .dropbtn {
        color: red;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        float: left;
        display: inline-block;

    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 168px;

        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }
    /* contact dropdown menu*/


    .contact-dropbtn {
        color: red;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .contact-dropdown:hover .dropbtn {
        color: green;
    }
    .contact-dropdown-content
    {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 168px;

        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .contact-dropdown-content a {
        color: black;
        padding: 20px 20px;
        text-decoration: none;
        display: block;
    }
    .contact-dropdown-content a:hover {background-color: #f1f1f1}
    .contact-dropdown:hover .contact-dropdown-content {
        display: block;
    }

    /* event-news */

    .event-news
    {
      background-color: orange;
      text-align: center;
    }
    .cinema-news
    {
      background-color: orange;
      text-align: center;
    }

    /* boxes */

    /*Thats fot the body forget about it*/
    body{
        background: #f5f5f5;
    }
    /*Thats fot the body forget about it*/


    /*Main style*/
    .list-quotes {
        background: #339999;
        cursor: pointer;
        height: auto;
        margin-bottom: 30px;
        overflow: hidden;
        position: relative;
        display: block;
        border: 1px solid #339999;
    }
    .list-quotes img,
    .list-quotes h1 {
        -webkit-transition: -webkit-transform 0.35s;
        transition: transform 0.35s;
    }

    .list-quotes img {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        height: 250px;
    }
    .list-quotes h1{
        background: rgba(51,153,153,0.8);
        bottom: 50px;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        left: 0;
        padding: 15px;
        position: absolute;
        margin: 0;
    }
    .list-quotes .year{
        background: rgba(51,153,153,0.8);
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        padding: 15px;
        position: absolute;
        top: 0;
        right: 0;
    }
    .list-quotes .cat-name{
        background: rgba(108,108,108,0.8);
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        padding: 15px;
        position: absolute;
        top: 0;
        left: 0;
    }
    .list-quotes p {
        position: absolute;
        bottom: -1px;
        left: 0;
        right: 0;
        margin: 0;
        padding: 10px;
        text-transform: lowercase;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(0,50px,0);
        transform: translate3d(0,50px,0);
        font-size: 15px;
        font-weight: normal;
        background: rgba(51,153,153,0.8);
        width: 100%;
        color: #fff;
    }
    .list-quotes:hover img {
        -webkit-transform: translate3d(0,-80px,0);
        transform: scale(1.2);
        opacity: 0.5;
        transition: all 250ms ease;
    }
    .list-quotes:hover{
        box-shadow: 0 0 5px 2px rgba(51,153,153, 0.5);
    }
    .list-quotes:hover h1 {
        -webkit-transform: translate3d(0,-100px,0);
        transform: translate3d(0,-100px,0);
        text-shadow: 0px 0 15px #fff;
        transition: all 250ms ease;
    }
    .list-quotes:hover .year,.list-quotes:hover .cat-name{
        text-shadow: 0px 0 15px #fff;
        transition: all 250ms ease;
    }
    .list-quotes:hover p {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }
    .quotes span{
        color:#222;
        font-weight: bold;
        text-transform: capitalize;
        color: #fff;
    }
    #top
    {
      background-color: #f5f5f5;
    }
    .social-media
    {
      background-color:  #f1f1f1;
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

<!-- social media -->
<!--<div class="social-media">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <img style="float: right ;" src="https://images.seeklogo.net/2016/09/facebook-icon-preview-200x200.png" alt="" width="50px" height="50px">
          <img style="float: right ;" src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/google_circle_color-512.png" alt="" width="50px" height="50px">
          <img style="float: right ;" src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-256.png" alt="" width="50px" height="50px">




        </div>
      </div>
    </div>
  </div>-->
  <nav class="navbar navbar-default navbar-fixed-top">

    <!-- top menu   -->
    <div class="container-fuid" id="top">
      <!-- project logo -->
      <div class="row">
        <div class="col-md-6">
          <a href="index.php"><h2>my project website</h2></a>


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
                {

                  echo "<a href='index.php?page=".$data['name']."&eventID=".$data['id']."'>".$data['name']."  "."</a>";
                }
            ?>



              </div>
            </div>
          </div>

            <div class="col-md-4">
<!-- cinema dropdown menu-->
            <div class="dropdown">
                <h3 class="dropbtn"><a href="adminPanel.php">Admin</a></h3>

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
  </nav>
