<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <title>Full Service Medical Billing RCM & Medical Credentialing | Med USA</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>
    <body <?php body_class(); ?>>
        <header>
            <?php
            if(has_custom_logo()) {
                the_custom_logo();
            }
            ?>
            <?php
            if(has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'container_class' => 'main_menu',
                    'fallback_cb' => false
                ));
            }
            ?>
        </header>