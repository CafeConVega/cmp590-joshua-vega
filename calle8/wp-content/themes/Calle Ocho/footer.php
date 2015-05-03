			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
						
						<ul class="hc_footer">
						<li><a href="http://miami.edu/" target="_blank"><img src="http://calle8.com:8888/wp-content/uploads/2015/05/U_logo.png" class="hvr-rotate" id="u" width="49px" height="30px" alt="The U"></a></li>
						<li><a href="http://com.miami.edu/" class="hvr-rotate" target="_blank">UM School of Communication</a></li>
                        <li><a href="http://com.miami.edu/cinema-interactive-media" class="hvr-rotate" target="_blank">UM                            Cinema &amp; Interactive Media</a></li>
                        <li><a href="http://interactive.miami.edu" class="hvr-rotate" target="_blank">UM                            Interactive Media</a></li>
						</ul>
					</nav>

<!--					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>-->

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
