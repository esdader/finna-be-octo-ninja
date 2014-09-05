<?php
// events and tour
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
            <li><a href="#upcoming-stuff-and-shindigs" class="int-nav-item">Upcoming</a></li>
            <li><a href="tours" class="int-nav-item">Tours</a></li>
        </ul>

        <div class="l-sidebar-panel">
            <header class="l-sidebar-panel-header">
                <h3 class="sidebar-panel-heady">
                    Book Your Event
                </h3>
            </header>
            <div class="l-sidebar-panel-body">
                <a href="#book-your-event" class="btn book-event-btn">Book Now</a>
            </div>
        </div>

        <?php get_template_part('location-panel' ); ?>
        
    <div class="l-main-content">
        <article<?php if ( isset($handle) ) echo " id='{$handle}'"; ?>class="l-int-panel events-tour-intro">
            <header><?php
                if ( get_field('intro_heading') ) : ?>
                    <h1><?php echo the_field('intro_heading'); ?></h1>
                <?php endif; ?>
            </header>
            <section><?php
                if ( get_field('intro_subheading') ) : ?>
                    <h2 class="events-tour-tag"><?php echo the_field('intro_subheading'); ?></h2>
                <?php endif;
                if ( get_field('intro_main_content') ) : ?>
                    <?php echo the_field('intro_main_content'); ?>
                <?php endif; ?>
            </section>
        </article>
        <?php
            $args = array(
                        'post_type' => 'events',
                        'orderby' => 'menu_order'
                    );
            $events = new WP_Query($args);
            $count = 1;
        if ( $events->have_posts() ) : while ( $events->have_posts() ) : $events->the_post(); ?>
            <?php if ($count > 1 ): ?>
                <article id="upcoming-stuff-and-shindigs" class="l-int-panel events-tour-panel int-panel">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="event-hero">
                            <?php the_post_thumbnail('full-column'); ?>    
                        </div>
                    <?php endif; ?>
                    <h2 class="events-tour-tag"><?php the_title(); ?></h2>
                    <p>DATE: <?php the_field('event_date'); ?></p>
                    <?php the_field('event_details'); ?>
                </article>
            <?php else: ?>
                <article id="upcoming-stuff-and-shindigs" class="l-int-panel events-tour-panel int-panel">
                    <header>
                        <h1>Upcoming Stuff and Shindigs</h1>
                    </header>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="event-hero first-panel">
                            <?php the_post_thumbnail('full-column'); ?>    
                        </div>
                    <?php endif; ?>
                    <h2 class="events-tour-tag"><?php the_title(); ?></h2>
                    <p>DATE: <?php the_field('event_date'); ?></p>
                    <?php the_field('event_details'); ?>
                </article>
            <?php 
                endif;
                $count++;
            ?>
        <?php endwhile; ?>
        <?php else: ?>
            <article id="upcoming-stuff-and-shindigs" class="l-int-panel events-tour-panel int-panel">
                <header>
                    <h1>Upcoming Stuff and Shindigs</h1>
                </header>
                <h2 class="events-tour-tag">No events at this time. Check back soon!</h2>
            </article>
        <?php endif; ?>

        <article id="tours" class="l-int-panel events-tour-panel int-panel">
            <header>
                <h1>Tours</h1>
            </header>
            <section>
                <?php the_field('event_tour_copy', 23); ?>
            </section>
        </article>
        <article id="book-your-event" class="l-int-panel events-tour-panel int-panel">
            <header>
                <h1>Book Your Private Event</h1>
            </header>
            <section>
                <?php the_field('event_book_copy', 23); ?>
            </section>
        </article>
    </div>    
<?php get_footer(); ?>