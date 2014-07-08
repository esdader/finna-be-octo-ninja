<?php
// events and tour
?>

<?php get_header(); ?>

    <div class="l-sidebar">
        <ul class="l-int-nav">
            <li><a href="#long-way-to-top" class="int-nav-item">Long way to top</a></li>
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
        <article  id="long-way-to-top" class="l-int-panel events-tour-intro">
            <header>
                <h1>It’s a long way to the top, if you wanna rock’n’roll</h1>
            </header>
            <section>
                <h2 class="events-tour-tag">When we’re not brewin’, come see what else we’re doin’.</h2>
                <p>Bands gotta practice. And we gotta brew. So usually we’re canning and jamming behind closed doors. But when we’re not, we happily invite everyone in for regularly irregular hootenannies. Whether it’s a local band, a delightfully strange event, or some streaking comet that has yet to enter the stratosphere of our imagination. You can even schedule private brewery tours &amp; tastings. Just check our ever-evolving list of upcoming stuff &amp; shindigs. Failing that, ask any armadillo you happen to see waddling by. They usually seem to know where it’s at.</p>
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