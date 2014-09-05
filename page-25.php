<?php
// submit a song
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
            <li><a href="#starter-lyrics" class="int-nav-item">The Starter Lyrics</a></li>
            <li><a href="#how-do-i-do-it" class="int-nav-item">How Do I Do It?</a></li>
        </ul>

        <?php get_template_part('location-panel' ); ?>
        
    <div class="l-main-content">
        <article<?php if ( isset($handle) ) echo " id='{$handle}'"; ?>class="l-int-panel int-panel-intro submit-song-panel">
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
        <article id="starter-lyrics" class="l-int-panel int-panel explain-song-panel-lyrics">
            <header>
                <h1><?php the_field('starter_lyrics_title', 25); ?></h1>
            </header>
            <section class="starter-lyrics-intro">
                <?php the_field('starter_lyrics_body_copy', 25); ?>
            </section>
            <section class="starter-lyrics-section">
            	<?php 
                    $args = array (
                                'post_type' => 'starter_lyrics',
                                'orderby'   => 'menu_order'
                            );

                    $lyrics = new WP_Query($args);
                ?>

                <?php if ( $lyrics->have_posts() ) : while ( $lyrics->have_posts() ) : $lyrics->the_post(); ?>
                    <div class="starter-lyrics">
                        <p><?php the_field('the_lyrics'); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </section>
        </article>
        <article id="how-do-i-do-it" class="l-int-panel int-panel submit-song-panel-lyrics">
            <header>
                <h1><?php the_field('lyrics_form_title', 25); ?></h1>
            </header>
            <section>
                <?php the_field('lyrics_form_body_copy', 25); ?>
            </section>
            <section class="form-submission">
            	<h1>What to submit</h1>
            	<?php echo do_shortcode('[contact-form-7 id="44" title="Starter Lyrics"]' ); ?>
            </section>
            
        </article>
    </div>    
<?php get_footer(); ?>