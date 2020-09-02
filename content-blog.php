<article>
	<div class="text-post-inline col-8">
		<h1><a href=" <?php the_permalink();?>"><?php the_title();?></a></h1>
			<p><?php the_excerpt();?></p>
			<div class="text-footer-post">
				<span><?php the_author();?></span><br>
				<small><?php echo get_the_date();?></small><i class="fas fa-chevron-right"></i>&nbsp;<small>8 min de leitura</small><i class="fas fa-star"></i>				
			</div>
	</div>
		<div class="content-img-page-post col-4">
			<a class="img-post" href="<?php the_permalink();?>">
				<?php the_post_thumbnail('large', array('class' => 'img-fluid'));?>	
			</a>
		</div>
</article>
	
