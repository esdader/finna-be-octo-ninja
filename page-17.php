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
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="//use.typekit.net/xwy8mif.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <div class="l-home-container">
    	
    </div>
    <div class="home-main-con clearfix">
        <div class="l-home-inner-container clearfix">
            <nav class="l-homepage-nav">
                <ul class="homepage-nav">
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
                    <li class="homepage-logo-con">
                        <img src="<?php bloginfo('template_directory'); ?>/img/homepage_logo.png" class="homepage-logo" alt="South Austin Brewery">
                    </li>
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
            </nav>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
