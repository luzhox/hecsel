<section class="hero-nosotros">
    <div class="container">
        <div class="text">
            <?php the_sub_field('text')?>
        </div>
        <div class="img">
        <?php $image = get_sub_field('imagen');   
            if( $image): ?>
            <img src="<?php echo esc_url($image['url']);?>" alt="<?php echo esc_url($image['alt']);?>" />
            <?php endif; ?>
        </div>
    </div>
</section>