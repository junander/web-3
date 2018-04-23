<!-- footer -->
<footer class="footer" role="contentinfo">
    
    <div id="footerMenu">
            <?php

            $args = array(
                    'menu' => 'Footer Menu',
                    'depth' => 2,
                );

            ?>
            <?php wp_nav_menu($args); ?>
			</div>

	<!-- copyright -->
	<p class="copyright">
		&copy;
		<?php echo date('Y'); ?> Copyright
		<?php bloginfo('name'); ?>.
		<?php _e('Powered by', 'web3'); ?>
		<a href="//wordpress.org" title="WordPress">Cats</a>.
	</p>
	<!-- /copyright -->

</footer>
<!-- /footer -->

</div>
<!-- /wrapper -->

<?php wp_footer(); ?>

</body>

</html>