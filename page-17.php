<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <!-- <meta name="viewport" content="width=device-width"> -->
    <script type="text/javascript" src="//use.typekit.net/xwy8mif.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="l-homepage-holder">
    <div class="l-homepage-container">
        <div class="bg-carousel">     
            <div class="item item-1"><img class="item-img" src="<?php bloginfo('template_directory'); ?>/img/h_img_1.jpg" alt=""></div>
            <div class="item item-2"><img class="item-img" src="<?php bloginfo('template_directory'); ?>/img/h_img_2.jpg" alt=""></div>
            <div class="item item-3"><img class="item-img" data-lazy="<?php bloginfo('template_directory'); ?>/img/h_img_3.jpg" alt=""></div>
            <div class="item item-4"><img class="item-img" data-lazy="<?php bloginfo('template_directory'); ?>/img/h_img_4.jpg" alt=""></div>
            <div class="item item-5"><img class="item-img" data-lazy="<?php bloginfo('template_directory'); ?>/img/h_img_5.jpg" alt=""></div>
        </div>
    </div>
    <div class="home-main-con clearfix">
        <div class="l-home-inner-container clearfix">
            <nav class="l-homepage-nav clearfix">
                <div class="homepage-nav-group group-one">
                    <ul class="homepage-nav clearfix">
                        <li>
                            <a href="<?php echo get_page_link(19); ?>">
                                <?php echo get_the_title(19); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(21); ?>">
                                <?php echo get_the_title(21); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(27); ?>">
                                <?php echo get_the_title(27); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="homepage-nav-group group-two">
                    <ul class="homepage-nav clearfix">
                        <li>
                            <a href="<?php echo get_page_link(23); ?>">
                                <?php echo get_the_title(23); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(25); ?>">
                                <?php echo get_the_title(25); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <img src="<?php bloginfo('template_directory'); ?>/img/homepage_logo.png" class="homepage-logo" alt="South Austin Brewery">
            </nav>
        </div>
        <div class="l-social-media-signup">
            <div class="homepage-social-media clearfix">
                <ul class="l-horizontal-nav">
                        <li class="homepage-facebook">
                            <a href="https://www.facebook.com/SouthAustinBrewery">
                                <span class="social-media-icon facebook ir"> </span>Facebook
                            </a>
                        </li>
                        <li class="homepage-twitter">
                            <a href="https://twitter.com/SABrewery">
                                <span class="social-media-icon twitter ir"> </span>
                                Twitter
                            </a>
                        </li>
                        <li class="homepage-instagram">
                            <a href="http://instagram.com/southaustinbrewery">
                                <span class="social-media-icon instagram ir"> </span>
                                Instagram
                            </a>
                        </li>
                    </ul>    
            </div>
            <div class="l-sign-up clearfix">
                <div class="l-homepage-signup-intro clearfix">
                    <div class="signup-heady-col">
                        <h3 class="sidebar-panel-heady">
                            Sign Up!
                        </h3>
                    </div>
                    <div class="signup-body-col">
                        <p>enter your email address below to join our newsletter for all the LATEST NEWS &amp; events.</p>
                    </div>
                </div>
                <div class="l-homepage-signup">
                <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="http://southaustinbrewery.us8.list-manage2.com/subscribe/post?u=4f7e2ddb7e4f8b58703949b51&amp;id=6d82de8886" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <label for="mce-EMAIL" class="visuallyhidden">Sign me up for the latest news.</label>
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter email address." required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_4f7e2ddb7e4f8b58703949b51_6d82de8886" tabindex="-1" value=""></div>
                            <div class="sub-holder"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </form>
                    </div>
                <!--End mc_embed_signup-->
                </div>
            </div>
        </div>
    </div>
</div>
    <?php wp_footer(); ?>
    <script>
        SouthAustinBrewery.init();
        $(document).ready(function() {

            $('.bg-carousel').slick({
                dots: false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                lazyLoad: 'ondemand',
                autoplay: true,
                pauseOnHover: false,
                arrows: false
            });
         
        });
    </script>
</body>
</html>
