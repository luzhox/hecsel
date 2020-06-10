<style>
  #menu-item-38 a{
      color:#ffc600!important;
  }
  #menu-item-38 a::before{
    width:100%!important;
  }
</style>
<section class="product-detail">
  <div class="container">
    <div class="product-detail__text">
        <ul class="product-detail__breadcrumb">
          <li>
            <!-- <a href='<?php the_sub_field('link_back')?>'><?php
                $category_array = wp_get_post_categories($post->ID);
                $category_list = array();
                foreach ($category_array as $categories) {
                    $category_list[] = strtolower(str_replace(' ', ' ', get_cat_name($categories)));
                }
                $lister = implode(' ', $category_list);
                $list_categories = $lister;
                echo $lister;
                ?></a></li> / -->
          <li><?php the_title()?></li>
        </ul>
        <?php the_sub_field('text-product')?>
        <div class="product-detail__buttons">
          <button  class="btn__primary cotiza"><?php the_sub_field('texto_del_boton_cotizar')?></button>
          <?php 
          $link = get_sub_field('boton_ficha');
          $exist = get_sub_field('hay_ficha_tecnica');
          if( $exist ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
          <a class="btn__primary--border" href="<?php echo esc_url( $link_url ); ?>" target="_blank">VER FICHA</a>
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