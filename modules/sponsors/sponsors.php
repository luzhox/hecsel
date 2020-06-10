<div class="sponsors">
    <div class="container">
        <span class="section-title"><?php the_sub_field('titulo_de_seccion')?></span>
        <h2 class="title"><?php the_sub_field('title')?></h2>
        <div class="owl-carousel owl-theme sponsors__container">
        <?php if (have_rows('sponsors')) { while(have_rows('sponsors') ) { the_row();  ?>
            <div class="sponsors__container__item" >
            <?php
        $image = get_sub_field('imagen');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
            </div>
        <?php }
        }?>
        </div>
    </div>
</div>