<?php get_header();?>
<main>
    <div class="title_main container">
        <span class="h4">na caatinga, fazendo o que ?</span>
    </div>
    <section class="sobre"> 
        
        <div class="container">
            <div class="content-perfil">                
                <div class="lead text-sobre">                    
                    <p>                    	
                    Este projeto é um portal onde irá divulgar, informar e documentar experiências sobre a 
                    natureza em primero momento com o bioma caatinga, localizado na cidade de Milagres-Bahia, 
                    o mesmo tem a finalidade de demonstrar a importância da preservação ambiental, enfatizando a 
                    posição do homem como ser dotado de divina inteligência para o bom aproveitamento dessa 
                    riqueza mundial que é a Natureza, os integrantes deste referido projeto são admiradores e 
                    apaixonados pela Senhora Natureza e do bioma caatinga. Deixaremos aqui neste portal relatos 
                    das nossas aventuras, trazendo conhecimento e cultura com grandes variedades de imagens e vídeos, 
                    onde iremos mostrar que além das matas brancas das secas existe uma natureza viva nesse bioma com 
                    muitos animais de várias espécies, sem contar na beleza encantadora oferecida pelos morros e 
                    árvores que proporciona paisagens exuberantes, enfim convidamos você a embarcar em nossas 
                    aventuras e apreciar a demonstração da caatinga sobre novos olhares. Veja mais em nosso <a href="https://nacaatinga.com.br/blog/"> Blog.</a>  
                    </p>
                </div> 

                    <div class="content-circle">
                    

                        <div class="box-circle">
                            <div class="data-circle">
                                    <div class="rounded-circle gabriel">   </div>                      
                                        <span>Gabriel</span>
                                            <i class="control-icon">
                                                <a href=""><i class="fab fa-facebook-square"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </i>
                            </div> 
                            <div class="data-circle" >                            
                                    <div class="rounded-circle akamaru"></div>                                   
                                        <span>Akamaru</span>
                                            <i class="control-icon">                                                
                                                <a href=""><i class="fab fa-facebook-square"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </i>
                            </div>
                           
                                <div class="data-circle">
                                        <div class="rounded-circle jesse"></div>                                        
                                            <span>Jessé</span>
                                                <i class="control-icon">
                                                    <a href=""><i class="fab fa-facebook-square"></i></a>
                                                    <a href=""><i class="fab fa-instagram"></i></a>
                                                </i>
                                </div>
                        </div>                       
                    </div> 
           </div>          
        </div>
    </section> 

    <section class="faixa-2">        
        <div class="container">
            <h3>NOSSOS POST</h3> 
        </div>
    </section>    
        
       <section class="content_post_principal col-md-12">            

       <?php                             
            $destaque = new WP_Query('post_type=post&posts_per_page=6&cat=3');
                    if($destaque->have_posts()):
                        while($destaque->have_posts()):
                            $destaque->the_post();
                    ?>
                    
                    <?php                                    
                        get_template_part('content','destaque'); 
                    ?>                       
                        
                    <?php
                        endwhile;

                        wp_reset_postdata();

                    endif;

            ?>                 
                       
        </section>
    
    <section class="faixa-3">        
        <div class="container">
            <h3>VISITE MILAGRES</h3> 
        </div>
    </section>

    <section class="milagres container">
        
        <span class="h4">Mais Sobre Milagres-Ba</span>
        
            <div class="container_milagres">                

                <p class="text-milagres lead">
                Milagres Bahia uma cidade linda muito bem organizada reconhecida regionalmente pelas suas festas tradicionais religiosas e sua imensa calmaria, tendo como destaque os morros que rodeiam a cidade o que faz ter vistas maravilhosas e vários pontos para trilhas, rapel acampamentos e muito mais, cidade acolhedora muito alegre onde todos oferecem um “cafezinho” (coisa de interior) todos que vem sempre querem voltar,vem sendo muito procurada por atletas praticantes do Trekking, Rapel e Escalada em Rocha, o cenário desses esportes vem sendo bem visto por aventureiros desse seguimento, outros esportes como Motocross, cicloturismos também estão sendo vivenciados em Milagres Bahia, existem locados no município, grupos aptos ao acompanhamento dessas atividades. 
                </p>

                <div class="img_milagres">
                    
                </div>  

            </div>               
              <div class="content-btn-view-more container">
                     <a href="https://nacaatinga.com.br/milagres-ba/" class="btn btn-success btn-view-more"> Veja Mais Sobre Milagres </a>                      
                </div>                 
        
    </section>
</main>

<?php get_footer();?>
                
