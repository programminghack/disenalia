<section id="blog-post">
	<?php foreach ($values as $row) {?>
		<article class="post">
			<figure>
				<img src="<?=$row['img_post']?>" alt="">
				<div class="share">
					<a href="https://www.facebook.com/sharer/sharer.php?u=http://ufaac.com/blog/read/?q=<?=$row['id_post']?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"><span class="icon-facebook"></span></a>
					<a href="http://twitter.com/share?text=UFAAC%20te%20recomendamos%20leer%20el%20siguiente%20post:&amp;url=http://ufaac.com/blog/read/?q=<?=$row['id_post']?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;"><span class="icon-twitter"></span></a>
				</div>
			</figure>
			<div class="content">
				<h1><?=$row['title_post']?></h1>
				<?=$row['prev_post']?>
				<a href="/blog/read/?q=<?=$row['id_post']?>">Leer Más</a>
			</div>
		</article>
	<?php  } ?>
</section>