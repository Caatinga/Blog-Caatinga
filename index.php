<?php get_header();?>

<main class='body_page_blog col-md-12'>
    
        <section class="col-md-7 post-container">
            <?php 
                // Se houver algum post
                if(have_posts()) :
                    // Enquanto houver algum post, chame o post de determinada maneira
                    while (have_posts()) : the_post();
                    ?>
                       <?php get_template_part('content','blog');?>

                    <?php 
                    endwhile;

                    ?>


                    <div class="col-md-7 content-pagination">
                        <div class="next col-md-3">                        
                            <?php next_posts_link('< ANTIGOS');?>
                        </div>

                        <div class="previos col-md-3">
                            <?php previous_posts_link('MAIS NOVOS >');?>
                        </div>
                    </div>

                    <?php
                    else:
                     ?>
                        <p>Nao tem nada ainda pra mostrar</p>
                    <?php 
                    endif;
                    ?>
        </section>
            <aside class="col-md-4">

                <?php get_sidebar();?>

            </aside>
    
</main>

<?php get_footer();?>
