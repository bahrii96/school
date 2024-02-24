<?php // Theme footer 
?>

<?php
$footer_settings = get_field('footer_settings', 'options');
if ($footer_settings) {
	$popup_overlay = isset($footer_settings['popup_overlay']) ? $footer_settings['popup_overlay'] : null;
	$popup_form_id = isset($footer_settings['popup_form_id']) ? $footer_settings['popup_form_id'] : null;
	$popup_name = isset($footer_settings['popup_name']) ? $footer_settings['popup_name'] : null;
	$popup_title = isset($footer_settings['popup_title']) ? $footer_settings['popup_title'] : null;
	$popup_caption = isset($footer_settings['popup_caption']) ? $footer_settings['popup_caption'] : null;


	$popup_title_answer = isset($footer_settings['popup_title_answer']) ? $footer_settings['popup_title_answer'] : null;
	$popup_caption_answer = isset($footer_settings['popup_caption_answer']) ? $footer_settings['popup_caption_answer'] : null;

	$copyright = isset($footer_settings['copyright']) ? $footer_settings['copyright'] : null;
	$links = isset($footer_settings['links']) ? $footer_settings['links'] : null;
	$social_title = isset($footer_settings['social_title']) ? $footer_settings['social_title'] : null;
	$social = isset($footer_settings['social']) ? $footer_settings['social'] : null;

?>
	<div class="hidden popup-box" id="<?php echo $popup_name; ?>" style="background-image: url(<?php echo $popup_overlay['url'] ?>);">
		<?php if ($popup_title) : ?>
			<h2>
				<?php echo $popup_title ?>
			</h2>
		<?php endif; ?>
		<?php if ($popup_caption) : ?>
			<div class=" contact-block__description desc">
				<?php echo $popup_caption ?>
			</div>
		<?php endif; ?>
		<?php if ($popup_form_id) : ?>
			<div class="contact-block__form">
				<?php echo do_shortcode($popup_form_id); ?>
			</div>
		<?php endif; ?>
	</div>

	<div class="hidden popup-box" id="popup-answer" style="background-image: url(<?php echo $popup_overlay['url'] ?>);">
		<div class="popup-answer__box">
			<?php if ($popup_title_answer) : ?>
				<h2>
					<?php echo $popup_title_answer ?>
				</h2>
			<?php endif; ?>
			<?php if ($popup_caption_answer) : ?>
				<div class=" contact-block__description desc">
					<?php echo $popup_caption_answer ?>
				</div>
			<?php endif; ?>
			<div class="answer-btn">
				<button data-fancybox-close class="btn-bl">Ok</button>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="footer__top">
				<a href="<?php echo home_url('/'); ?>" class="logo" aria-label="Site Logo">
					<?php
					$custom_logo_id = get_theme_mod('custom_logo_site');
					if ($custom_logo_id) :
						echo wp_get_attachment_image($custom_logo_id, 'full', false, [
							'loading' => 'eager'
						]);
					endif;
					?>
				</a>

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
				<div class="footer__social">
					<h3><?php echo $social_title ?></h3>
					<div class="footer__social-box">
						<?php if (is_array($social)) : ?>
							<?php foreach ($social as $item) {
								$icon = $item['icon'];
								$link = $item['link'];
							?>
								<div class="footer__social-item">
									<a href="<?php echo $link ?>">
										<i class="<?php echo $icon ?>"></i></a>
								</div> <?php } ?>
						<?php endif; ?>
					</div>
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