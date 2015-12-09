<?php
/***** Theme Info Page *****/
if (!function_exists('enigma_info_page')) {
	function enigma_info_page() {
	$page1=add_theme_page(__('Enigma Parallax', 'enigma-parallax'), __('Theme Info', 'enigma-parallax'), 'edit_theme_options', 'enigma', 'enigmadisplay_theme_info_page');
	
	add_action('admin_print_styles-'.$page1, 'weblizar_admin_info');
	}
}
add_action('admin_menu', 'enigma_info_page');
function weblizar_admin_info(){
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin.css');
}
if (!function_exists('enigmadisplay_theme_info_page')) {
	function enigmadisplay_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
		<div class="theme-info-wrap">
			<h1><?php printf(__('Welcome to %1s %2s', 'enigma-parallax'), $theme_data->Name, $theme_data->Version ); ?></h1>
			<div class="theme-description"><?php echo $theme_data->Description; ?></div>
			<hr>
			<div class="theme-links clearfix">
				<p><strong><?php _e('Important Links:', 'enigma-parallax'); ?></strong>
					
					<a href="https://wordpress.org/support/theme/enigma-parallax" target="_blank"><?php _e('Support Center', 'enigma-parallax'); ?></a>
					<a href="https://wordpress.org/support/view/theme-reviews/enigma-parallax" target="_blank"><?php _e('Rate this theme', 'enigma-parallax'); ?></a>
				</p>
			</div>
			<hr>
			<div id="getting-started">
				<h3><?php printf(__('Getting Started with %s', 'enigma-parallax'), $theme_data->Name); ?></h3>
				<div class="row clearfix">
					<div class="col-1-2">
						<div class="section">
							<h4><?php _e('1. Guide', 'enigma-parallax'); ?></h4>
							<p class="about"><?php _e('A. To enable HomePage please go to Settings >>Reading and checked "Your latest posts" check-box in "Front Page Displays" option.', 'enigma-parallax'); ?></p>
							<p class="about"><?php _e('B. On front page, click on Arrow Image, Parallax Menu will appear. It contain all the sections of front page. When you click them, page slide to clicked section.', 'enigma-parallax'); ?></p>
						</div>
						<div class="section">
							<h4><?php _e('2. Front Page Customization', 'enigma-parallax'); ?></h4>
							<p class="about"><?php printf(__('%s supports the Theme Customizer for all Front Page settings. Click "Customize Theme" to open the Customizer now.',  'enigma-parallax'), $theme_data->Name); ?></p>
							<p>
								<a href="<?php echo esc_url(admin_url('customize.php')); ?>" class="button button-primary"><?php _e('Customize Theme', 'enigma-parallax'); ?></a>
							</p>
						</div>
						<div class="section">
							<h4><?php _e('Upgrade to Premium', 'enigma-parallax'); ?></h4>
							<p class="about"><?php _e('Need more features and options? Check out the Premium Version of this theme which comes with additional features and advanced customization options for your website.', 'enigma-parallax'); ?></p>
							<p>
								<a href="https://weblizar.com/themes/enigma-premium/" target="_blank" class="button button-primary"><?php _e('Learn more about the Enigma Parallax Premium Version', 'enigma-parallax'); ?></a>
							</p>
						</div>
					</div>
					<div class="col-1-2">
						<img src="<?php echo esc_url(get_template_directory_uri().'/screenshot.png'); ?>" alt="<?php _e('Theme Screenshot', 'enigma-parallax'); ?>" />
					</div>
				</div>
			</div>
			<hr>
			<div id="theme-author">
				<p><?php printf(__('%1s is proudly brought to you by %2s. If you like this WordPress theme, %3s.', 'enigma-parallax'),
					$theme_data->Name,
					'<a target="_blank" href="https://weblizar.com/" title="weblizar">Weblizar</a>',
					'<a target="_blank" href="https://wordpress.org/support/view/theme-reviews/enigma-parallax" title="Enigma Review">' . __('rate it', 'enigma-parallax') . '</a>'); ?>
				</p>
			</div>
		</div> <?php
	}
}
?>