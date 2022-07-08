<?php
    $titulo = get_field('titulo');
    $contenido = get_field('contenido');
    $tituloBoton = get_field('boton');
    $archivoBoton = get_field('archivo_boton');
    $imagen = get_field('imagen');
?>

<section class="mainContenedor">

    <div class="main">
        <div class="main__info">

            <?php if($titulo): ?>
                <h1 class="main__info__title">
                    <?php echo esc_html($titulo);?> 
                </h1>
            <?php endif; ?>

            <?php if($contenido): ?>
                <div class="main__info__desc">
                <?php echo esc_html($contenido);?> 
                </div>
            <?php endif; ?>
            
            <div>
                <a href="<?php echo esc_url($archivoBoton) ?>" class="main__info__button" download="">Download Resume</a>
            </div>
        </div>
        <div class="main__imgcont">
            <?php echo wp_get_attachment_image($imagen, 'medium') ?>
        </div>
    </div>

</section>