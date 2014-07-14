		<div class="l-sidebar-panel  sign-up-panel">
            <header class="l-sidebar-panel-header">
                <h3 class="sidebar-panel-heady">
                    Sign Up!
                </h3>
            </header>
            <div class="l-sidebar-panel-body">
                <!-- Begin MailChimp Signup Form -->
                <div id="mc_embed_signup">
                <form action="http://southaustinbrewery.us8.list-manage2.com/subscribe/post?u=4f7e2ddb7e4f8b58703949b51&amp;id=6d82de8886" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <label for="mce-EMAIL">Sign me up for the latest news.</label>
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter email address." required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_4f7e2ddb7e4f8b58703949b51_6d82de8886" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </form>
                </div>

                <!--End mc_embed_signup-->
            </div>
        </div>
        <div class="l-sidebar-panel location-panel">
            <header class="l-sidebar-panel-header">
                <h3 class="sidebar-panel-heady">
                    Location
                </h3>
            </header>
            <div class="l-sidebar-panel-body">
                <h4>info:</h4>
                <?php
                    if ( get_field('contact_location', 'option') ) {
                        the_field('contact_location', 'option');
                    }
                ?>
                <h4>ADDRESS:</h4>
                <p><?php if ( get_field('contact_address1', 'option') ) { the_field('contact_address1', 'option'); echo '<br>'; } ?>
                <?php if ( get_field('contact_address2', 'option') ) { the_field('contact_address2', 'option'); echo '<br>'; } ?>
                <?php if ( get_field('contact_city', 'option') ) { the_field('contact_city', 'option'); } if ( get_field('contact_st', 'option') ) { the_field('contact_st', 'option'); echo '<br>'; } ?>
                <?php if ( get_field('contact_zip', 'option') ) { the_field('contact_zip', 'option'); } ?>
                </p>

                <h4>PHONE:</h4>
                <p> <?php if ( get_field('contact_phone', 'option') ) { the_field('contact_phone', 'option'); } ?></p>
                
                <?php 
                    if ( get_field('contact_email', 'option') ) {
                        $contact_email = get_field('contact_email', 'option');
                    }

                    if ( isset($contact_email) ) : ?>

                        <h4>EMAIL:</h4>
                        <p><a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
                    <?php endif; ?>
            </div>
            <header class="l-sidebar-panel-maps-header">
                <h3 class="sidebar-maps-heady">
                    Google Maps >
                </h3>
            </header>
        </div>
        <iframe width="256" height="160" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=415%20E%20St%20Elmo%20Rd%2C%20Austin%2C%20TX%2C%20United%20States&key=AIzaSyChOdoNaAIMvcUuMZXabFk4KCljCxPsorc"></iframe>
    </div>
