<?php get_header();?>
	

	<main class="posts">

		<div class="container col-md-10">
			<?php

			while(have_posts()): the_post();
				get_template_part('content','sigle');
			endwhile;

			?>
				<div class="content-pagination">
					<div class="paginacao text-left"><?php previous_post_link();?></div>
					<div class="paginacao text-right"><?php next_post_link();?></div>
				</div>
			

		<?php

			
			if( comments_open() || get_comments_number()):
				comments_template();
			endif;

			
			?>
		</div>		
	</main>
	
<?php get_footer();?>