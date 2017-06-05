<div class="col-xs-12 col-sm-12 col-md-12">

<h1 class="cinema-news">latest festival news</h1>
</div>

<?php
$requete = 'SELECT * FROM `festival` ORDER BY id DESC LIMIT 4';
                // la fonction mysql_query envoie requète et stocke la réponse dans $reponse
                $reponse = mysql_query($requete);
                //$data = mysql_fetch_assoc($reponse);

                if (mysql_num_rows($reponse)!=0) {

                  while ($data=mysql_fetch_assoc($reponse))
                {

                echo'<div class="col-xs-12 col-sm-6 col-md-3">
                         <a class="list-quotes" href="article.php?page='.$data['name'].'&articleID='.$data['id'].'&category=festival">
                             <!-- Recommended size 360X360 -->
                             <img class="img-responsive" alt="img" src="'.$data['picture'].'">
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
                 }
?>
