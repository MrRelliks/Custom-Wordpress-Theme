        <footer class="footer" role="contentinfo">
            
                <nav class="footer__navigation">
                    <?php wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'nav nav--footer']); ?>
                </nav>
                <p class="footer__copyright">&copy; <?php echo get_bloginfo( 'name' ); ?> <?php echo date('Y'); ?> || Theme Designed by Matt Dean</p>
            
        </footer>
        
        <?php wp_footer(); ?>
        

    </body>
</html>
