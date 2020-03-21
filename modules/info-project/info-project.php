<section class="enginer-solutions">
    <div class="container">
        <h2><?php the_sub_field('titulo')?></h2>
        <div class="nav-slide">
        <ul>
            <li id="gruaportico" class="active"><button >Grúa pórtico</button></li>
            <li id="gruapescante"><button>Grúa pescante</button> </li>
            <li id="puentegrua"><button >Puente grúa</button> </li>
        </ul>
        </div>
        <div class="owl-carousel owl-theme enginer-solutions_carousel">

        <?php if( have_rows('carousel_de_soluciones') ) {while( have_rows('carousel_de_soluciones') ) { the_row();  ?>

        <div class="enginer-solutions_carousel__slide" href="<?php the_sub_field('link_de_producto')?>" style="background:url(<?php the_sub_field('imagen')?>); background-size:cover;" >
            <div class="text">
                <p><?php the_sub_field('texto_descriptivo')?></p>
            </div>
            <div class="products <?php the_sub_field('nombre_de_la_seccion')?>">
            <?php if( have_rows('productos_relacionados') ) {while( have_rows('productos_relacionados') ) { the_row();  ?>

                <div class="product">
                <?php $image = get_sub_field('imagen');   
                    if( $image): ?>
                    <div class="img">
                    <img src="<?php echo esc_url($image['url']);?>" alt="<?php echo esc_url($image['alt']);?>" />
                    </div>
                    <?php endif; ?>
                    <p><?php the_sub_field('nombre_del_producto')?></p>
                </div>
                <?php }} ?>
                </div>
        </div>

        <?php }} ?>

        </div>
    </div>
</section>