<section class="product-detail">
  <div class="container">
    <div class="product-detail__text">
        <ul class="product-detail__breadcrumb">
          <li><?php the_category('single')?></li> /
          <li><?php the_title()?></li>
        </ul>
        <?php the_sub_field('text-product')?>
        <div class="product-detail__buttons">
          <button  class="btn__primary"><?php the_sub_field('texto_del_boton_cotizar')?></button>
          <?php 
          $link = get_sub_field('boton_ficha');
          $exist = get_sub_field('hay_ficha_tecnica');
          if( $exist ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
          <a class="btn__primary--border" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        </div>
    </div>
      <div class="product-detail__img">
      <?php $image = get_sub_field('imagen_de_producto');   
        if($image) : ?>
            <img src="<?php echo esc_url($image['url']);?>" title="<?php echo ($image['title']);?>" alt="<?php echo ($image['alt']);?>" />
        <?php endif; ?>
      </div>
  </div>
</section>