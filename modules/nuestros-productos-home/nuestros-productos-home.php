<section class="productos-home" data-aos="fade-up" data-aos-offset="100">
    <div class="container">
        <h4 class="title"  data-aos="fade-up"><?php the_sub_field('titulo_secundario')?></h4>
        <h2 class="title" data-aos="fade-up"><?php the_sub_field('titulo_principal')?></h2>

        <div class="cta-productos owl-theme owl-carousel">
        <?php if( have_rows('productos-home') ) {
            while( have_rows('productos-home') ) { the_row();  ?>
                 <a href="<?php the_sub_field('link_producto')?>"><div class="card-productos-home"  data-aos="fade-up" data-aos-offset="100" class="recurso" >
                <div class="imagen">
                    <img src="<?php the_sub_field('img')?>" alt="">
                </div>
                <div class="text" >
                    <h3><?php the_sub_field('titulo_de_producto')?></h3>
                </div>
            </div></a>

            <?php }} ?>  
        </div>
    </div>
</section>
