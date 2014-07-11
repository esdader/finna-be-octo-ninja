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
        <article id="upcoming-stuff-and-shindigs" class="l-int-panel events-tour-panel int-panel">
            <header>
                <h1>Upcoming Stuff and Shindigs</h1>
            </header>
            <h2 class="events-tour-tag">Meet the Brewer Happy Hour</h2>
            <p>DATE: Fridays 5-8pm -- May 30, June 6, June 13</p>
            <p>Come on by and shake the hands that crafted the beer that has fans screaming for more. Our brewing maestros Eric and Russ will be hanging out, answering questions, and—if you’re really obsessed—signing autographs (but only if you ask nicely). There will be live bands serving up locally crafted tunes. And, of course, we’ll be serving our locally crafted beers. No cover. But be cool and please tip the band.</p>
        </article>
        <article id="tours" class="l-int-panel events-tour-panel int-panel">
            <header>
                <h1>Tours</h1>
            </header>
            <section>
                <p>Austin was a lot thirstier than we thought. We’ve had to postpone our as yet unscheduled brewery tours due to popular demand. Right now, every second we can spare is spent brewing every drop we can.</p>

                <p>As soon as we get caught up, we’ll get a regular tour schedule going. No need to camp out for tickets. Just follow us on Facebook and twitter and you’ll be the first to know.</p>
            </section>
        </article>
        <article id="book-your-event" class="l-int-panel events-tour-panel int-panel">
            <header>
                <h1>Book Your Private Event</h1>
            </header>
            <section>
                <p>So you’re having a little get together. Or maybe you’re having a big get together. Make it memorable and get your collective brew on, South Austin style. Featuring a uniquely funky Austin industrial vibe and fresh craft beers straight from the source—this ain’t your typical birthday-corporate shindig-wedding reception-ground hog day-album release party-leap year celebration. As a true working brewery, dates are limited and fill up fast. Call for details and book your event today. Or tomorrow. (We’re mellow like that.)</p>
                <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event1.jpg" alt="" /></p>
                <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event2.jpg" alt="" /></p>
            </section>
        </article>
    </div>    
<?php get_footer(); ?>