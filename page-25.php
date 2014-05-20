<?php
// submit a song
?>

<?php get_header(); ?>

    <div class="l-sidebar">
        <ul class="l-int-nav">
            <li><a href="#add-link" class="int-nav-item">Tour Info</a></li>
            <li><a href="#add-link" class="int-nav-item">Upcoming</a></li>
        </ul>

        <?php get_template_part('location-panel' ); ?>
        
    <div class="l-main-content">
        <article class="l-int-panel int-panel-intro submit-song-panel">
            <header>
                <h1>BREWIN’ UP SOME TUNES</h1>
            </header>
            <section>
                <h2 class="int-panel-tag">Here in Austin, music is in our blood.It’s also in our beer.</h2>
                
                <p>Liquid Austin Soul is more than just our brewery credo--it’s a stone cold pseudoscientific fact--carefully documented by a professionally unprofessional association of hop heads, groupies, audiophiles, and some dude who just walked by.  The tunes flow free around here, whatever we’re brewin’ or doin’.  And we want you to join the jam.  That’s right, we want you to write a song, man.  The more astute and less nearsighted among you may have noticed we print starter lyrics on every can and bottle.  Just take any of those lyrics and write yourself a song that uses ‘em.  Loud, funny, raunchy, poetic, profane, brief, long, punk, acapella…it’s up to you…all it’s gotta be is yours.</p>
            </section>
        </article>
        <article class="l-int-panel int-panel explain-song-panel-lyrics">
            <header>
                <h1>the starter lyrics</h1>
            </header>
            <section class="starter-lyrics-intro">
                <p>As any good Austin hippie-half breed would, you may have already recycled all your bottles and cans. That’s cool. We’ve posted all the different starter lyrics for you right here. Proof that, at least on rare occasions, we do think ahead.</p>
            </section>
            <section class="starter-lyrics-section">
            	<div class="starter-lyrics">
            		<p>The devil ain’t my friend<br>But I’ve bought him a few beers</p>
            	</div>
            	<div class="starter-lyrics">
            		<p>Texas done right<br>Cures whatever done you wrong</p>
				</div>
            	<div class="starter-lyrics">
            		<p>Hippie girl with daisy eyes<br>Oh that dress, oh my my</p>
            	</div>
            	<div class="starter-lyrics">
            		<p>Hey Aristotle, pass the bottle<br>And pull up a stool</p>
            	</div>
            	<div class="starter-lyrics">
            		<p>Ooooh, ooooh, ooooh<br>Baby your tongue knows it’s true</p>
            	</div>
            </section>
        </article>
        <article class="l-int-panel int-panel submit-song-panel-lyrics">
            <header>
                <h1>Like, how do I do it, man?</h1>
            </header>
            <section>
                <p>YouTube is a beautiful thing. Record your song with your phone in the bar right now.  Record it on your computer at home. Record it in a bigshot studio. Whatever, amigo. Film yourself singing it, put it with photos from your night out, or just put it with a picture of one of our beers (if you’re shy).  Now load it up to YouTube and send us the link with your name and your email (so we can get in touch and tell you how much we dig it). That’s it!  If we really dig it we’ll even do somethin’ extra cool for you…like free beer, or free tickets to a show at the brewery, or maybe even a free guitar. So warm up your vocal chords and drown your inhibitions. Here’s to you, here’s to brew, here’s to Liquid Austin Soul! </p>
            </section>
            <section class="form-submission">
            	<h1>What to submit</h1>
            	<?php echo do_shortcode('[contact-form-7 id="44" title="Starter Lyrics"]' ); ?>
            </section>
            
        </article>
    </div>    
<?php get_footer(); ?>