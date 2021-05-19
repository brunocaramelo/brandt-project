<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
    <div class="nav xwezi-aside">
        <?php do_action( 'before_sidebar' ); ?>
        <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( ! empty ( $description ) ) :
        ?>
        <h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
        <?php endif; ?>

        <?php if ( has_nav_menu( 'secondary' ) ) : ?>

        <div class="xwezi-logo">
            <img src="wp-content/themes/twentyfourteen-wpcom/images/logo-dark.png" class="xwezi-logo" style="width: 200px;height: 66px" />
        </div>

        <nav role="navigation" id="xwezi-main-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
        </nav>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <br />
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div><!-- #primary-sidebar -->
        <?php endif; ?>

        <div class="xwezi-footer">
            <div class="separator"></div>
            <p>+1 650 444 0000</p>
            <p>makeup@ovon.com</p>
            <ul>
                <li><a href="https://www.facebook.com/drapatriciabrandtschefer"><i class="ti-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/patriciabschefer/"><i class="ti-instagram"></i></a></li>
            </ul>
        </div>

    </div><!-- #secondary -->
</div><!-- #secondary -->
