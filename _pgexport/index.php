<?php get_header(); ?>

<header style="flex-direction: row;">
    <section style="columns: auto 2; column-gap: 0;">
        <div>
            <?php if( get_theme_mod( 'custom_logo' ) ) : ?>
                <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'custom_logo', 'https://pinegrow.com/placeholders/img17.jpg' ), 'full' ) ?>" style="max-width: 350px; margin: 5px;" class="pg-empty-placeholder" href="<?php echo esc_url( home_url() ); ?>"/>
            <?php endif; ?>
        </div>
        <div>
            <nav>
                <?php wp_nav_menu( array(
                        'menu' => 'primary',
                        'menu_class' => 'pg-empty-placeholder',
                        'container' => ''
                ) ); ?>
            </nav>
        </div>
    </section>
</header>        

<?php get_footer(); ?>