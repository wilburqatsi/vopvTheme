<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset");?>"
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Over+the+Rainbow" rel="stylesheet"> 
        
        
    </head>

<body <?php body_class(); ?>>

    <div class="container">
        <!-- site header -->
        <header class="site-header">
            <div class="title-div">
                <h1><a href= "<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a></h1>
                <h3><?php bloginfo("description"); ?></h3>
            </div>
            <?php
                $args = array(
                    'theme_location' => 'header',
                    'container' => ''
                );
            ?>
            
            <nav class="site-nav">
                <?php wp_nav_menu($args); ?>
            </nav>
            
        </header>
        