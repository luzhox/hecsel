<section class="sugerencias"data-aos="fade-up">
    <div class="container">
        <h4 class="title"><?php the_sub_field('titulo_secundario')?></h4>
        <h2 class="title"><?php the_sub_field('titulo_principal')?></h2>

        <div class="content-sugerencias owl-theme owl-carousel">
        <?php if( have_rows('sugerencias_items') ) {
            while( have_rows('sugerencias_items') ) { the_row();  ?>
             <a href="<?php the_sub_field('link')?>"> <div class="card-sugerencias" data-aos="fade-up" data-aos-offset="100" class="recurso" >
                    <div class="imagen">
                    <img src="<?php the_sub_field('img')?>" alt="">
                    </div>
                <div class="text" >
                    <h3><?php the_sub_field('titulo_de_producto')?></h3>
                    <p><?php the_sub_field('texto')?></p>
                    <span>Lo quiero</span>
                </div>
            </div></a>
                
            <?php }} ?>  
        </div>
    </div>
</section>
