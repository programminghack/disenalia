<div>
   <h1 class="search_v">
      Resultados de la busqueda: <?=$search_v?>
   </h1>
</div>

<section id="blog-post">
   <?php
      if(isset($values)){
      foreach ($values as $row) {?>
      <a href="/home/go/?q=<?=$row['id_post']?>" class="src-post">
         <article class="post">
            <div class="date-comts">
               <div class="cont">
                  <span class="icon-calendar"></span>
                  <p><?=$row['date_post']?></p>
               </div>
               <div class="cont">
                  <span class="icon-coments"></span>
                  <p>58</p>
               </div>
            </div>
            <figure>
               <img src="<?=$row['img_post']?>" alt="">
               <figcaption class="share">
                  <a class="rds" href="https://www.facebook.com/sharer/sharer.php?u=http://ufaac.com/blog/read/?q=<?=$row['id_post']?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"><span class="icon-facebook"></span></a>
                  <a class="rds" href="http://twitter.com/share?text=UFAAC%20te%20recomendamos%20leer%20el%20siguiente%20post:&amp;url=http://ufaac.com/blog/read/?q=<?=$row['id_post']?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;"><span class="icon-twitter"></span></a>
                  <div class="like-views">
                     <a href="#" class="icns"><span class="icon-heart"></span><p>89</p></a>
                     <a href="#" class="icns"><span class="icon-eye"></span><p>98</p></a>
                  </div>
               </figcaption>
            </figure>
            <div class="content">
               <h1><?=$row['title_post']?></h1>
               <?=$row['prev_post']?>
         </article>
      </a>
   <?php  }
      }else{
   ?>
      <div class="error_search">
         <h1>No se encontro ningun resultado de la busqueda: <?=$search_v?></h1>
      </div>
   <?php
      } ?>
</section>
