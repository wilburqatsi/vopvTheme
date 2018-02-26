</div>

    <footer class="site-footer">
        
        
        
        <?php
            $args = array(
                'theme_location' => 'footer'
            );
        ?>
    
        <nav class="footer-nav">
            <?php wp_nav_menu($args);?>
        </nav>
        
        <img id="PVStar" src="<?php bloginfo('template_directory'); ?>/images/PVSTAR.png" alt="VOPV Stamp">
        
        <p id="copyright"><?php bloginfo("name"); ?> - &copy; <?php echo date("Y");?></p>
        
        <?php wp_footer(); ?>
    </footer>

</body>
</html>