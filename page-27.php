<?php
// merch
?>

<?php get_header(); ?>

    <div class="l-sidebar">
        <ul class="l-int-nav">
            <li><a href="#buy-li-mojo" class="int-nav-item">Buy A Lil' Mojo</a></li>
        </ul>

        <?php get_template_part('location-panel' ); ?>
        
    <div class="l-main-content">
        <article id="buy-lil-mojo" class="l-int-panel int-panel-intro merch-panel">
            <header><?php
                if ( get_field('intro_heading') ) : ?>
                    <h1><?php echo the_field('intro_heading'); ?></h1>
                <?php endif; ?>
            </header>
            <section><?php
                if ( get_field('intro_subheading') ) : ?>
                    <h2 class="int-panel-tag"><?php echo the_field('intro_subheading'); ?></h2>
                <?php endif;
                if ( get_field('intro_main_content') ) : ?>
                    <?php echo the_field('intro_main_content'); ?>
                <?php endif; ?>
            </section>
        </article>
        <article id="buy-lil-mojo" class="l-int-panel int-panel merch-panel">
            <section>
                <p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/merch-smaller/balck_T_2.jpg" alt="" class="merch-photo" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/merch-smaller/baseball_T_2.jpg" alt="" class="merch-photo" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/merch-smaller/baseball_T_3.jpg" alt="" class="merch-photo" />
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/merch-smaller/hat_2.jpg" alt="" class="merch-photo" />
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/merch-smaller/hat_3.jpg" alt="" class="merch-photo" />
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/merch-smaller/ringer.jpg" alt="" class="merch-photo" />
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/merch-smaller/ringer2.jpg" alt="" class="merch-photo" />
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/merch-smaller/glass.jpg" alt="" class="merch-photo" />
                </p>
            </section>
        </article>
    </div>    
<?php get_footer(); ?>