<div class="hero-service" >
<?php
        $image = get_sub_field('background_mob');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" class="hide-tablet-on-up" title="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <div class="container">
        <div class="hero-hecsel__txt">
            <div class="hero-hecsel__txt__title"><?php the_sub_field('titulo_de_la_seccion')?></div>
            <?php the_sub_field('content')?>
        </div>
    </div>
    <?php
        $image = get_sub_field('background_desktop');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" class="hide-on-medium-only" title="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <div class="hero-hecsel__down" data-location="<?php the_sub_field('a_donde_redirijira');?>">
        <div class="hero-hecsel__down__btn">
            <svg width="17" height="24" viewBox="0 0 17 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.54002 14.1272L7.15437 19.7415V0H9.33194V19.7428L14.9471 14.1272L16.4868 15.6674L8.24331 23.91L-0.000125885 15.6674L1.54002 14.1272Z" fill="#1E202C"/>
            </svg>
        </div>
    </div>
</div>
