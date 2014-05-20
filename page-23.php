<?php
// events and tour
?>

<?php get_header(); ?>

    <div class="l-sidebar">
        <ul class="l-int-nav">
            <li><a href="#add-link" class="int-nav-item">Tour Info</a></li>
            <li><a href="#add-link" class="int-nav-item">Upcoming</a></li>
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
        <article class="l-int-panel events-tour-intro">
            <header>
                <h1>Come On By</h1>
            </header>
            <section>
                <h2 class="events-tour-tag">We’re a friendly bunch.  We’d love to show you around.</h2>
                <p>We’ve always got something going on. Whether it’s a local band, a delightfully strange event, or some streaking comet that has yet to enter the stratosphere of our imagination. If you’d like a private brewery tour &amp; tasting, just give us a call to schedule something. Otherwise, check our ever evolving list of upcoming stuff &amp; shindigs. Failing that, ask any armadillo you happen to see waddling by. They usually seem to know where it’s at.</p>
            </section>
        </article>
        <article class="l-int-panel events-tour-panel">
            <header>
                <h1>Come On By</h1>
            </header>
            <section>
                <h2 class="events-tour-tag">We’re a friendly bunch.  We’d love to show you around.</h2>
                <p>We’ve always got something going on. Whether it’s a local band, a delightfully strange event, or some streaking comet that has yet to enter the stratosphere of our imagination. If you’d like a private brewery tour &amp; tasting, just give us a call to schedule something. Otherwise, check our ever evolving list of upcoming stuff &amp; shindigs. Failing that, ask any armadillo you happen to see waddling by. They usually seem to know where it’s at.</p>
            </section>
        </article>
    </div>    
<?php get_footer(); ?>