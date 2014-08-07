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
    <meta name="viewport" content="width=960">
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
