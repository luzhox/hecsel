<?php
// Crear opciones de datos de contacto
function mayo_ajustes(){
    add_menu_page('Mayo','Mayo Ajustes','administrator','mayo_ajustes','mayo_ajustes_opciones','','20');

    //Llamar al registro de las opciones de nuestro tema

    add_action('admin_init','mayo_registrar_opciones');
    // add_submenu_page('mayo_ajustes','Datos de contacto','Datos de contacto','administrator','datos_de_contacto','datos_de_contacto');
  }
  
  add_action('admin_menu','mayo_ajustes');

function mayo_registrar_opciones(){
    //Registrar opciones una por campo
    register_setting('mayo_ajustes_opciones_grupo', 'direccion_mayo');
    register_setting('mayo_ajustes_opciones_grupo', 'numero_mayo');
    register_setting('mayo_ajustes_opciones_grupo', 'facebook_mayo');
    register_setting('mayo_ajustes_opciones_grupo', 'linkedin_mayo');

}

  function mayo_ajustes_opciones(){
      ?>
      <div class="wrap">
      <h1>Datos de contacto</h1>
        <form action="options.php" method="post">

        <?php settings_fields('mayo_ajustes_opciones_grupo');?>
        <?php do_settings_sections('mayo_ajustes_opciones_grupo');?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row" style="font-family:'Lato'; font-weight:400;">Dirección</th>
                    <td><input type="text" name="direccion_mayo" style="min-width:300px;"  value="<?php echo esc_attr( get_option('direccion_mayo'))?>"></td>
                </tr>

                <tr valign="top">
                    <th scope="row" style="font-family:'Lato'; font-weight:400;">Número de contacto</th>
                    <td><input type="text" name="numero_mayo" value="<?php echo  esc_attr(get_option('numero_mayo'))?>"></td>
                </tr>

                <tr valign="top">
                    <th scope="row" style="font-family:'Lato'; font-weight:400;">Link de facebook</th>
                    <td><textarea name="facebook_mayo" style="min-width:300px; min-height:67px;" ><?php echo  esc_attr(get_option('facebook_mayo'))?></textarea></td>
                </tr>
                <tr valign="top">
                    <th scope="row" style="font-family:'Lato'; font-weight:400;">Link de Linkedin</th>
                    <td><input type="text" name="linkedin_mayo"  style="min-width:300px;"  value="<?php echo  esc_attr(get_option('linkedin_mayo'))?>"></td>
                </tr>
            
            </table>

            <?php submit_button();?>
        
        </form>
      </div>
    <?php
}
  

