<?php // Theme footer 
?>

<?php
$footer_settings = get_field('footer_settings', 'options');
if ($footer_settings) {
	$popup_form_id = isset($footer_settings['popup_form_id']) ? $footer_settings['popup_form_id'] : null;
	$popup_name = isset($footer_settings['popup_name']) ? $footer_settings['popup_name'] : null;



	$popup_title_answer = isset($footer_settings['popup_title_answer']) ? $footer_settings['popup_title_answer'] : null;
	$popup_image_answer = isset($footer_settings['popup_image_answer']) ? $footer_settings['popup_image_answer'] : null;

	$copyright = isset($footer_settings['copyright']) ? $footer_settings['copyright'] : null;
	$links = isset($footer_settings['links']) ? $footer_settings['links'] : null;

	$social = isset($footer_settings['social']) ? $footer_settings['social'] : null;
	$logo = isset($footer_settings['logo']) ? $footer_settings['logo'] : null;

?>
	<div class="hidden popup-box" id="<?php echo $popup_name; ?>">

		<?php if ($popup_form_id) : ?>
			<div class="popup-box__form">
				<?php echo do_shortcode($popup_form_id); ?>
			</div>
		<?php endif; ?>
	</div>

	<div class="hidden popup-box" id="popup-answer">
		<div class="popup-answer__box">
			<?php if ($popup_title_answer) : ?>
				<h2>
					<?php echo $popup_title_answer ?>
				</h2>
			<?php endif; ?>
			<?php if ($popup_image_answer) : ?>
				<div class=" contact-block__img">
					<?php echo wp_get_attachment_image($popup_image_answer, 'full'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="footer__top">
				<div class="footer__social">
					<a href="<?php echo home_url('/'); ?>" class="logo" aria-label="Site Logo">
						<?php echo wp_get_attachment_image($logo, 'full'); ?>
					</a>
					<div class="footer__social-box">
						<?php if (is_array($social)) : ?>
							<?php foreach ($social as $item) {
								$icon = $item['icon'];
								$link = $item['link'];
							?>
								<div class="footer__social-item">
									<a href="<?php echo $link ?>">
										<?php echo wp_get_attachment_image($icon, 'full'); ?></a>
								</div> <?php } ?>
						<?php endif; ?>
					</div>
				</div>


				<div class="footer__menu-first">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary_footer',
						'menu_class' => 'main-nav-footer',
						'walker' => new Custom_Walker_Nav_Menu
					));
					?>
				</div>
				<div class="footer__menu-second">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary_footer_second',
						'menu_class' => 'main-nav-footer',
						'walker' => new Custom_Walker_Nav_Menu
					));
					?>
				</div>
				<div class="footer__contact">
					<?php if (is_array($links)) : ?>
						<?php foreach ($links as $item) {
							$icon = $item['icon'];
							$link = $item['link'];
						?>
							<div class="footer__contact-item">
								<i class="<?php echo $icon ?>"></i>
								<?php echo initLinkHref($link) ?>
							</div> <?php } ?>
					<?php endif; ?>
				</div>
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