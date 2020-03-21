<div class="projects-home <?php the_sub_field('version_de_seccion')?>">
    <div class="container">
        <span class="section-title"><?php the_sub_field('titulo_de_la_seccion')?></span>
        <h2 class="title"><?php the_sub_field('title')?></h2>
        <h3 class="title"><?php the_sub_field('subtitulo')?></h3>
        <div class="owl-carousel owl-theme projects-home__container">

        <?php if( have_rows('projects') ) {while( have_rows('projects') ) { the_row();  ?>

            <a class="projects-home__container__item" href="<?php the_sub_field('link_de_producto')?>" style="background:url(<?php the_sub_field('imagen')?>); background-size:cover;" >
                <div class="text">
                    <h3 class="title"><?php the_sub_field('title')?></h3>
                    <span class="btn__primary">ver más</span>
                </div>
                <div class="overlay"></div>
            </a>

            <?php }} ?>
        
        </div>
   
   
    </div>
</div>