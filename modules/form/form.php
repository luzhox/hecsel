<section class="form">
    <div class="container">
        <h4 class="title" data-aos="fade-up"><?php the_sub_field('titulo_secundario')?></h4>
        <h2 class="title" data-aos="fade-up"><?php the_sub_field('titulo_principal')?></h2>
        <div class="form-mayo">
        <div class="formulario" data-aos="fade-up">
        <?php the_sub_field('formulario')?>
        </div>
        <div class="datos" data-aos="fade-up">
        
            <div class="dato">
                <div class="icono icon-whatsapp"></div>
                <div class="text">
                    <h4>Escríbenos al:</h4>
                    <p class="hide-on-medium-only"><?php echo esc_html(get_option('numero_mayo')); ?></p>
                    <a href="https://api.whatsapp.com/send?phone=+51<?php echo esc_html(get_option('numero_mayo')); ?>&text=Tengo un consulta" class="hide-tablet-on-up btn-apps">Ir a whatsapp</a>
                </div>
            </div>

            <?php if( get_field('activar_direccion') ): ?>
	
	
	

            <div class="dato">
                <div class="icono icon-ruta"></div>
                <div class="text">
                    <h4>Visítanos en:</h4>
                    <p class="hide-on-medium-only"><?php echo esc_html(get_option('direccion_mayo')); ?>*</p>
                    <a href="https://www.waze.com/location?ll=-12.092583,-77.01451220000001" class="hide-tablet-on-up btn-apps">Ir con waze</a>
                    <span>*Previa cita</span>
                </div>
            </div>
            <?php endif; ?>
        </div>

        </div>
    
    </div>
</section>
