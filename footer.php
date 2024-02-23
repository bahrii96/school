<?php // Theme footer 
?>




<?php
$footer_settings = get_field('footer_settings', 'options');
if ($footer_settings) {
	$popup_form_id = isset($footer_settings['popup_form_id']) ? $footer_settings['popup_form_id'] : null;
	$popup_name = isset($footer_settings['popup_name']) ? $footer_settings['popup_name'] : null;
	$popup_title = isset($footer_settings['popup_title']) ? $footer_settings['popup_title'] : null;


	$popup_title_answer = isset($footer_settings['popup_title_answer']) ? $footer_settings['popup_title_answer'] : null;

	$copyright = isset($footer_settings['copyright']) ? $footer_settings['copyright'] : null;
	$logo = isset($footer_settings['logo']) ? $footer_settings['logo'] : null;

?>
	<div class="hidden popup-box" id="<?php echo $popup_name; ?>">
		<div class="popup-box__wrapper">
			<div class="popup-box__left">
				<h2 class="form-title"><?php echo $popup_title ?></h2>
				<div class="header-form-popup modal">
					<?php echo do_shortcode($popup_form_id); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="hidden popup-box" id="popup-answer">
		<div class="popup-box__wrapper">
			<div class="popup-box__left popup-box__left-answer">
				<h2 class="form-title"><?php echo $popup_title_answer ?></h2>
				<button data-fancybox-close class="btn-dark">Ok</button>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="footer__top">
				<a href="<?php echo home_url('/'); ?>" class="logo" aria-label="Site Logo">
					<?php echo wp_get_attachment_image($logo, 'full'); ?>
				</a>

				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary_footer',
					'menu_class' => 'main-nav-footer',
					'walker' => new Custom_Walker_Nav_Menu
				));
				?>
			</div>
		</div>
		<?php if ($copyright) : ?>
			<div class="copyright">
				<div class="container"><?php echo $copyright ?></div>
			</div>
		<?php endif; ?>
	</footer>
	<?php
	wp_footer();
	?>
	</body>

	</html>
<?php
}
?>