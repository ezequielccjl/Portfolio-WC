<nav class="navbar">
    <!--CONVERTIR DIV EN A-->
    <div class="navbar__logo">
        <span class="navbar__logo__nombre">Ezequiel</span>
        <span class="navbar__logo__apellido">Cordova</span>
        <span class="navbar__logo__punto">.</span>
    </div>
    <!--CAMBIAR A UL -> LIs -> a-->
    <div class="navbar__info">
        <!--
            <a class="navbar__info__link">About</a>
            a class="navbar__info__link">Works</a>
        -->
        
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'ul_nav'
                )
            )
        ?>
    </div>
</nav>