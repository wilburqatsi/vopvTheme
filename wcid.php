<?php
/*
 * Template Name: WCID
 * Template Post Type: page
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset");?>"
        <meta name="viewport" content="width=device-width">
        <title>WCID</title>
        <?php wp_head(); ?>
        
        <style>
            body{
                font-family: "Lucida Console", monospace;
                color: #bfbfbf;
                
                background: url("<?php echo get_template_directory_uri();?>/images/PVTank.png") #404040
                no-repeat center center;
                background-size: cover;
                background-attachment: fixed;
                
                
                
            }
            
            #pageTitle{
                color: #ffffff;
                /*font-size: 100%;*/
            }
            
            #wcid-body-content{
                width: 85%;
                margin: 0 auto;
            }
            
            .wcid-header{
                display: flex;
                height: 150px;
                justify-content: center;
                align-items: center;
                
                background: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0));
            }
            
            #wcid-nav{
                margin: auto;
                text-align: center;
            }
            
            .sticky{
                position: fixed;
                top:0;
                width: 100%;
                background-color: #1a1a1a;
            }
            
            /*.sticky + #wcid-body-content{
                padding-top: 0px;
            }*/
            
            #wcid-nav ul{
                
            }
            #wcid-nav li{
                display: inline;
            }
            
            #wcid-nav a{
                text-decoration: none;
                color: #bfbfbf;
               
            }
            
            #wcid-nav li:after{
                content: " |";
            }
            
            #wcid-nav li.current-menu-item > a{
                color: #ffffff;
                font-size: 115%;
                text-decoration: underline;
            }
            
            #wcid-nav li:last-child:after{
                content: "";
            }
            
            #wcid-nav a:hover{
                color: #ffffff;
                font-size: 115%
            }
            
            a:link:hover{
                color: #ffffff;
                font-size: 115%
            }
            
            a:link,
            a:visited {
                color: #e6e6e6;
                /*text-decoration: none;*/
            }
            
            #wcid-body-content{
                
                /*background: red ;*/
            }
            
        </style>
        
    </head>

<body <?php body_class(); ?>>

    <div class="WCIDcontainer">
        <!-- site header -->
        <header class="wcid-header">
            
            <?php
                $args = array(
                    'theme_location' => 'WCID',
                    'container' => ''
                );
            ?>
            
            <nav id="wcid-nav">
                <?php wp_nav_menu($args); ?>
            </nav>
            
        </header>
        
    <div id ="wcid-body-content">
    <?php
        if(have_posts()):
            while(have_posts()): the_post(); ?>
                <h1 id="pageTitle"><?php the_title(); ?></h1>
            
                <?php the_content(); ?>
            
            <?php endwhile;
        
        else:
            echo "<p>No content found</p>";
        
        endif;
    
    ?>
    </div>
    
        <footer class="wcid-site-footer">
        
        <!--<p id="copyright"><?php bloginfo("name"); ?> - &copy; <?php echo date("Y");?></p>-->
        
        <?php wp_footer(); ?>
        </footer>
    </div>
    
    <script>
        window.onscroll = function(){stickNav();};
        var navbar = document.getElementById("wcid-nav");
        var sticky = navbar.offsetTop;
        
        function stickNav(){
            if(window.pageYOffset >= sticky){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }
        
    </script>
</body>
</html>