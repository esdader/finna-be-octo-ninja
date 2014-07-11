<?php
// the source
?>

<?php get_header(); ?>

    <div class="l-sidebar">
        <ul class="l-int-nav">
            <?php
                if ( get_field('intro_nav_text') ) {
                    $link_txt = get_field('intro_nav_text');
                    $handle = generate_handle( $link_txt );

                } elseif ( get_field('intro_heading') ) {
                    $link_txt = get_field('intro_heading');
                    $handle = generate_handle( $link_txt );
                }

                if ( isset($link_txt) ) : ?>
                    <li><a href="#<?php echo $handle; ?>" class="int-nav-item"><?php echo $link_txt; ?></a></li>
                <?php endif; ?>
            <li><a href="#stores" class="int-nav-item">The Stores</a></li>
        </ul>

        <?php get_template_part('location-panel' ); ?>
        
    <div class="l-main-content">
        <article<?php if ( isset($handle) ) echo " id='{$handle}'"; ?>class="l-int-panel int-panel-intro the-legend-panel">
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
        <article id="stores" class="l-int-panel int-panel the-legend-panel">
            <header><?php
                if ( get_field('stores_heading') ) : ?>
                    <h1><?php the_field('stores_heading'); ?></h1>
                <?php endif; ?>
            </header>
            <section class="stores-list clearfix">
                <?php 
                    if ( get_field('stores_panel') ) {
                        the_field('stores_panel');
                    } 
                ?>
            </section>
        </article>
    </div>    
<?php get_footer(); ?>