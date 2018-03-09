<?php get_header(); ?>
<div id ="body-content">

    <?php
        if(have_posts()):
            while(have_posts()): the_post(); ?>
            
                <h1 id="pageTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php the_content(); ?>
            
            <?php endwhile;
        
        else:
            echo "<p>No content found</p>";
        
        endif;
    ?>
</div>
<?php get_footer(); ?>



