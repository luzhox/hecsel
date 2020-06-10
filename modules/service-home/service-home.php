<div class="service-home">
    <div class="container">
        <span class="section-title"><?php the_sub_field('titulo_de_la_seccion')?></span>
        <h2 class="title"><?php the_sub_field('title')?></h2>
        <div class="owl-carousel owl-theme service-home__container">
        <?php if( have_rows('service') ) {while( have_rows('service') ) { the_row();  ?>
            <a class="service-home__container__item" href="<?php the_sub_field('link_de_service')?>" >
            <?php
        $image = get_sub_field('imagen');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
                <div class="text">
                  <p><?php the_sub_field('title')?></p>
                </div>
            </a>
            <?php }} ?>
        </div>
    </div>
</div>