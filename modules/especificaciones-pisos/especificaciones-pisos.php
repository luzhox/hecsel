<section class="especificaciones">
    <div class="container">
        <h4 class="title" data-aos="fade-up" data-aos-offset="-200"><?php the_sub_field('titulo_secundario')?></h4>
        <h2 class="title" data-aos="fade-up"><?php the_sub_field('titulo_principal')?></h2>

      <div class="content-especificaciones">
          <div class="muestras-pisos" data-aos="fade-up">

          <?php if(get_sub_field('slider_de_textura_de_piso')): $i = 0; ?>

              <div class="pisos ">
              <?php while(has_sub_field('slider_de_textura_de_piso')): $i++; ?>
                  <div class="item-piso-textura item-piso-textura-<?php echo $i?>" data-codigo="<?php the_sub_field('codigo')?>">
                  <img src="<?php the_sub_field('imagen_de_textura')?>" alt="">
                    </div>
                    <?php endwhile; ?>

              </div>
              <?php endif; ?>

          <div class="codigo-content">
                <p class="codigo"></p>
                </div>
            <div class="card-muestras">
               
                <div class="contenedor-colors">
                <p>Colores disponibles:</p>
                <?php if(get_sub_field('slider_de_textura_de_piso')): $i = 0; ?>

                    <div class="colores-pisos">
                    <?php while(has_sub_field('slider_de_textura_de_piso')): $i++; ?>
                        <div class="color color-<?php echo $i?>" onclick="changingColor(<?php echo $i?>)" style="background-color:<?php the_sub_field('color_de_pisos')?>"></div>
                    
                        <?php endwhile; ?>

                    </div>
                    <?php endif; ?>

                </div>
            </div>
          </div>
          <div class="caracteristicas-pisos" data-aos="fade-up">
              <div class="caracteristicas-principales">
              <?php if( have_rows('caracteristicas_principales') ) {
            while( have_rows('caracteristicas_principales') ) { the_row();  ?>
                 <div class="item-caracteristicas" ata-aos="fade-up" data-aos-offset="100" class="recurso" >
                <div class="imagen">
                    <img src="<?php the_sub_field('img')?>" alt="">
                </div>
                <div class="text" >
                    <p><?php the_sub_field('texto')?></p>
                </div>
            </div>

            <?php }} ?>  
              </div>
              <div class="detalle">
                  <h5 class="title">
                      ¿Desea ver más detalle?
                  </h5>
                  <a href="<?php the_sub_field('pdf_detalle')?>" class="btn-detalle">Ver ficha técnica</a>
              </div>
          </div>
      </div>
    </div>
</section>

<script>

$ = jQuery.noConflict();

$(document).ready(function () {
    
    $('.color-1').addClass('active');
    $('.item-piso-textura-1').addClass('active');
    var codigo = $('.item-piso-textura-1').data('codigo')
    $('.codigo').html(codigo);

});

function changingColor(elemento) {
    var codigo2 = $('.item-piso-textura-'+elemento).data('codigo')
    $('.codigo').html(codigo2)
    $('.color-'+elemento).click(function(){
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    $('.item-piso-textura-'+elemento).addClass('active');
    $('.item-piso-textura-'+elemento).siblings().removeClass('active');

    })

}

</script>
