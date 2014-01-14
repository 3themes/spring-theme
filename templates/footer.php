<footer class="footer-main" role="contentinfo">
	<aside class="footer--copyright">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> &#8226; This is <a href="https://github.com/3themes/spring-theme" target="_blank">Spring Theme</a>, and it's under development by <a href="http://3them.es" target="_blank">3themes</a>. Join the party on <a href="https://github.com/3themes/spring-theme" target="_blank">Github</a>.
	</aside>
    <nav class="nav-footer" role="navigation">
        <?php
        if (has_nav_menu('footer_navigation')) :
            wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'footer--menu'));
        endif;
        ?>
    </nav>
</footer>
<?php wp_footer(); ?>