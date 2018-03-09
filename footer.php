    <footer class="site-footer">
        
        
        
        <?php
            $args = array(
                'theme_location' => 'footer'
            );
        ?>
    
        <nav class="footer-nav">
            <?php wp_nav_menu($args);?>
        </nav>
        
        <div class="footer-widgets">
            
            <?php if(is_active_sidebar("footer1")): ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar("footer1");?>
                </div>
            <?php endif; ?>
            
            <?php if(is_active_sidebar("footer2")): ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar("footer2");?>
                </div>
            <?php endif; ?>
            
            <?php if(is_active_sidebar("footer3")): ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar("footer3");?>
                </div>
            <?php endif; ?>
            
            
        </div>
        <p id="copyright"><?php bloginfo("name"); ?> - &copy; <?php echo date("Y");?></p>
        
        <?php wp_footer(); ?>
    </footer>
</div>
</body>
</html>