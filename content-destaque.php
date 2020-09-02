<article class="content_posts">      
			<div class="indice_post">
				<span class="category"><b><i class="fas fa-chevron-right"></i></b><?php the_category(' ');?></span>
				<span class="data"><b>Em:</b> <?php echo get_the_date();?></span>
			</div>

				<div class="body-post">

					<div class="content-img-post">
						<a href="<?php the_permalink();?>">
							<?php the_post_thumbnail('medium', array('class' => 'img-fluid'));?>
						</a>
					</div>
				
						<h1 class="title-post">
							<a <?php the_title_attribute(); ?> href="<?php the_permalink();?>"><?php the_title();?></a> 
					 	</h1>
					<p class="text-excerpt"><?php the_excerpt( array('class'=>'excerpt'));?></p>                       
							
						<p class="the_author"><small>por </small><span><?php the_author();?></span></p>

			</div>

</article>
		
	
        



