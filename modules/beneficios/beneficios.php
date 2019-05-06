<section class="beneficios" data-aos="fade-up" data-aos-offset="100" >
    <div class="container">
        <h4 class="title" data-aos="fade-up"><?php the_sub_field('titulo_secundario')?></h4>
        <h2 class="title" data-aos="fade-up"><?php the_sub_field('titulo_principal')?></h2>

        <div class="content-beneficios">
        <?php if( have_rows('beneficios_items') ) {
            while( have_rows('beneficios_items') ) { the_row();  ?>
                <div class="card-beneficios" data-aos="fade-up" data-aos-offset="100" class="recurso" >
                    <div class="imagen">
                    <img src="<?php the_sub_field('img')?>" alt="">
                    </div>
                <div class="text" >
                    <h3><?php the_sub_field('titulo_de_producto')?></h3>
                    <p><?php the_sub_field('texto')?></p>
                </div>
            </div>

            <?php }} ?>  
        </div>
    </div>
</section>
<!-- owl-theme owl-carousel -->