<?php get_header(); ?>
<div id ="body-content">
    <?php
        if(have_posts()):
            while(have_posts()): the_post(); ?>
            
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            
            <?php endwhile;
        
        else:
            echo "<p>No content found</p>";
        
        endif;
    
    ?>
</div>
<?php get_footer(); ?>