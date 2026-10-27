
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">

        <div class="site-branding">
            <a class="site-logo"
               href="<?php echo esc_url( home_url( '/' ) ); ?>"
               aria-label="<?php esc_attr_e( 'Halaman utama SilfiEdu', 'silfiedu' ); ?>">
                S
            </a>

            <div>
                <p class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </p>

                <p class="site-description">
                    <?php bloginfo( 'description' ); ?>
                </p>
            </div>
        </div>

        <nav class="primary-navigation"
             aria-label="<?php esc_attr_e( 'Menu utama', 'silfiedu' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'fallback_cb'    => 'wp_page_menu',
                )
            );
            ?>
        </nav>

    </div>
</header>
