<div class="products-home">
    <div class="container">
        <span class="section-title"><?php the_sub_field('titulo_de_la_seccion')?></span>
        <h2 class="title"><?php the_sub_field('title')?></h2>
        <div class="owl-carousel owl-theme products-home__container">

        <?php if( have_rows('productos') ) {while( have_rows('productos') ) { the_row();  ?>

            <a class="products-home__container__item" href="<?php the_sub_field('link_de_producto')?>">
                <h3 class="title"><?php the_sub_field('title')?></h3>
                <?php  $image = get_sub_field('imagen');
                if($image): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </a>

            <?php }} ?>
        
        </div>
        <?php 
        $link = get_sub_field('link');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn__primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
</div>