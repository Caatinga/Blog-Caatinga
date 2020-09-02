<article >
        <div class="container col-md-10">
				
				<div class="content-posts-single">
					
					<h1 class='col-md-10'> <?php the_title();?> </h1>

						<div class="col-md-5 perfil-post-single">
							<p class='gravatar-author'><?php $email = get_the_author_email(); $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] ); $usegravatar = get_option('woo_gravatar');?><img src="<?php echo $grav_url;?>" alt=""/></p>							
								<div class="author-data">
									<p class='author-name'><?php the_author();?></p>
									<p>Em: <?php echo get_the_date();?></p>	
								</div>					
						</div>
					
					<p> <?php the_content();?> </p>   
					
				</div>
		</div>
</article>