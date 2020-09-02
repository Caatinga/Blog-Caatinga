<?php get_header();?>
<main class='container'>

<section class="paisagens">

    <div class="title_main container">
        <span class="h4">Miragens da Caatinga</span>
    </div>
    <div>
        <span class="lead">Galeria de fotos em construção.</span>
    </div>

    <div class="container">
    <?php 
        if( have_posts() ) : 
            while( have_posts() ) : the_post();

            the_content();
            endwhile;
        endif;
        ?>

    </div>

</section>
</main>

<?php get_footer();?>
