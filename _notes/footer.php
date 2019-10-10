<?php $options = get_option('rh_settings'); ?>

			<?php
			if($options['logo_alt']){
				echo '<p class="sponsor">Sponsored by<br><img src="'. $options['logo_alt'] .'" alt="KPMG" /></p>';
			}
			?>

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="cf">
					<?php
					if($options['copyright_txt']) {
						echo '<p class="copyright">'. $options['copyright_txt'] .'</p>';
					} else {
						echo '<p class="source-org copyright">&copy; ' . get_bloginfo( 'name' ) . ' ' . date('Y') . '</p>';
					}
					?>
					
					<?php wp_nav_menu(array(
    					'container' => '',
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						));
					?>
					
					<?php
					if( $options['twitter_url'] || $options['facebook_url'] || $options['instagram_url'] || $options['youtube_url'] || $options['linkedin_url'] || $options['pinterest_url']) {
						echo '<div class="social">';
						
						if( $options['linkedin_url'] ) {
							echo '<a href="'.$options['linkedin_url'].'" target="_blank"><i class="fab fa-linkedin"></i></a>';
						} else {
							echo '';
						}
						
						if( $options['twitter_url'] ) {
							echo '<a href="'.$options['twitter_url'].'" target="_blank"><i class="fab fa-twitter"></i></a>';
						} else {
							echo '';
						}
						
						if( $options['facebook_url'] ) {
							echo '<a href="'.$options['facebook_url'].'" target="_blank"><i class="fab fa-facebook"></i></a>';
						} else {
							echo '';
						}
						
						if( $options['instagram_url'] ) {
							echo '<a href="'.$options['instagram_url'].'" target="_blank"><i class="fab fa-instagram"></i></a>';
						} else {
							echo '';
						}
						
						if( $options['youtube_url'] ) {
							echo '<a href="'.$options['youtube_url'].'" target="_blank"><i class="fab fa-youtube"></i></a>';
						} else {
							echo '';
						}
						
						if( $options['instagram_url'] ) {
							echo '<a href="'.$options['pinterest_url'].'" target="_blank"><i class="fab fa-pinterest"></i></a>';
						} else {
							echo '';
						}

						echo '</div>';
					}
					?>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/rarehoney.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site-->