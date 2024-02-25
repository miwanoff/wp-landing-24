<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?>">

    <?php get_template_part('template-parts/header/site-branding');?>
    <?php get_template_part('template-parts/header/site-nav');?>

    <?php
// Виведення меню на головній сторінці.
if (is_front_page()) {
    if (has_nav_menu('header-menu')): ?>
    <nav class="header-navigation" aria-label="<?php esc_attr_e('Header Menu', 'twentytwentyone');?>">
        <?php
wp_nav_menu(
        array(
            'theme_location' => 'header-menu',
            'menu_class' => 'header-menu',
            'depth' => 1,
            'fallback_cb' => '__return_empty_string',
        )
    );
    ?>
    </nav><!-- .footer-navigation -->
    <?php endif;
}
?>

</header><!-- #masthead -->