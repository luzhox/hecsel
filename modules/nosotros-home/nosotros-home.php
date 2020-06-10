<div class="nosotros-home" style="background:url(<?php the_sub_field('fondo_de_seccion'); ?>);background-size:cover;background-position:center; ">
    <div class="container">
        <span class="section-title"><?php the_sub_field('titulo_de_la_seccion')?></span>
        <h2 class="title"><?php the_sub_field('title')?></h2>
        <div class="nosotros-home__container">

        <?php if( have_rows('nosotros') ) {while( have_rows('nosotros') ) { the_row();  ?>

            <a class="nosotros-home__container__item"><img src="<?php the_sub_field('imagen')?>" alt="Hecsel - Ingeniería y mantención"><div class="text"><?php the_sub_field('title')?></div>
            </a>

            <?php }} ?>
        </div>
   
   
    </div>
    <div class="overlay"></div>

</div>
<script>
$ = jQuery.noConflict();

$('.nosotros-home').one('inview', function (event, visible) {
  if (visible == true) {

$('.nosotros-home__container__item .text h3').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});}
})
</script>
