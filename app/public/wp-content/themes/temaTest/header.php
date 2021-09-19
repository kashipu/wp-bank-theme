<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NZCGCGG');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZCGCGG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="container__navigation wrapper">
            <div class="navigation__logo">
                <a href="/">
                <img src="<?php echo get_template_directory_uri() ?>\img\Logo-web-50-base.png.webp" alt="">
                </a>
            </div>
            <div class="navigation__items">
                    <?php 
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal'
                    );
                    wp_nav_menu( $args );
                    ?>
            </div>
            <div class="navigation__button">
                <a href="">Negocios Abiertos</a>
            </div>
        </div>
    </header>
    <main>