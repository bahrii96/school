<?php // Theme footer 
?>

<?php
$footer_settings = get_field('footer_settings', 'options');
if ($footer_settings) {
	$popup_form_id = isset($footer_settings['popup_form_id']) ? $footer_settings['popup_form_id'] : null;
	$popup_name = isset($footer_settings['popup_name']) ? $footer_settings['popup_name'] : null;
	$popup_title = isset($footer_settings['popup_title']) ? $footer_settings['popup_title'] : null;
	$popup_caption = isset($footer_settings['popup_caption']) ? $footer_settings['popup_caption'] : null;

	$popup_title_answer = isset($footer_settings['popup_title_answer']) ? $footer_settings['popup_title_answer'] : null;
	$popup_caption_answer = isset($footer_settings['popup_caption_answer']) ? $footer_settings['popup_caption_answer'] : null;



	$title_first = isset($footer_settings['title_first']) ? $footer_settings['title_first'] : null;
	$title_third = isset($footer_settings['title_third']) ? $footer_settings['title_third'] : null;
	$widget_third_links
		= isset($footer_settings['widget_third_links']) ? $footer_settings['widget_third_links'] : null;
	$description_company = isset($footer_settings['description_company']) ? $footer_settings['description_company'] : null;
	$fourth_caption = isset($footer_settings['fourth_caption']) ? $footer_settings['fourth_caption'] : null;
	$socials = isset($footer_settings['socials']) ? $footer_settings['socials'] : null;
	$footer_bottom_first = isset($footer_settings['footer_bottom_first']) ? $footer_settings['footer_bottom_first'] : null;
	$footer_bottom_second = isset($footer_settings['footer_bottom_second']) ? $footer_settings['footer_bottom_second'] : null;
	$footer_bottom_third = isset($footer_settings['footer_bottom_third']) ? $footer_settings['footer_bottom_third'] : null;

	$telegram_icon = get_field('telegram_icon', 'options');
	$telegram_link = get_field('telegram_link', 'options');
	$telegram_caption = get_field('telegram_caption', 'options');
?>

	<a class="telegram-box" href="<?php echo $telegram_link ?>">
		<div class="telegram-box__caption "><?php echo $telegram_caption ?></div>
		<div class="telegram-box__logo">
			<?php echo wp_get_attachment_image($telegram_icon, 'full'); ?>
		</div>

	</a>

	<div class="hidden popup-box" id="<?php echo $popup_name; ?>">
		<h2>
			<?php echo $popup_title ?>
		</h2>
		<?php if ($popup_caption) : ?>
			<div class="popup-box__caption"><?php echo $popup_caption ?></div>
		<?php endif; ?>
		<?php if ($popup_form_id) : ?>
			<div class="popup-box__form form-box">
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
			<?php if ($popup_caption_answer) : ?>
				<div class="popup-box__caption"><?php echo $popup_caption_answer ?></div>
			<?php endif; ?>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="footer__top">
				<div class="footer__menu-first">
					<?php if ($title_first) : ?>
						<h3><?php echo $title_first ?></h3>
					<?php endif; ?>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary_footer',
						'menu_class' => 'main-nav-footer',
						'walker' => new Custom_Walker_Nav_Menu
					));
					?>
				</div>

				<div class="footer__contact">
					<?php if ($title_third) : ?>
						<h3><?php echo $title_third ?></h3>
					<?php endif; ?>
					<?php if (is_array($widget_third_links)) : ?>
						<?php foreach ($widget_third_links as $item) {
							$icon = $item['icon'];
							$link = $item['link'];
						?>
							<div class="footer__contact-item">
								<?php echo wp_get_attachment_image($icon, 'full'); ?>
								<?php echo initLinkHref($link) ?>
							</div> <?php } ?>
					<?php endif; ?>
				</div>

				<div class="footer__social">
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
					<?php if ($description_company) : ?>
						<div class="footer__desc desc">
							<?php echo $description_company ?>
						</div>
					<?php endif; ?>
					<div class="footer__social-box">
						<?php if (is_array($socials)) : ?>
							<?php if ($socials) : ?>
								<?php foreach ($socials as $item) {
									$icon = $item['icon'];
									$icon_hover = $item['icon_hover'];
									$link = $item['link'];
								?>
									<a href="<?php echo $link ?>">
										<div class="footer__social-def"><?php echo wp_get_attachment_image($icon, 'full'); ?></div>
										<div class="footer__social-hov"> <?php echo wp_get_attachment_image($icon_hover, 'full'); ?></div>
									</a>
								<?php } ?>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<?php if ($fourth_caption) : ?>
						<div class="footer__caption">
							<?php echo $fourth_caption ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>


		<div class="footer-bottom">
			<div class="container">
				<?php if ($footer_bottom_first) : ?>
					<div class="footer-bottom__first">
						<?php echo $footer_bottom_first ?>
					</div>
				<?php endif; ?>
				<?php if ($footer_bottom_second) : ?>
					<div class="footer-bottom__second">
						<?php
						$link_url = $footer_bottom_second['url'];
						$link_title = $footer_bottom_second['title'];
						$link_target = $footer_bottom_second['target'] ? $footer_bottom_second['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" download=""><?php echo esc_html($link_title); ?></a>
					</div>
				<?php endif; ?>
				<?php if ($footer_bottom_third) : ?>
					<div class="footer-bottom__third">
						<?php
						$link_url = $footer_bottom_third['url'];
						$link_title = $footer_bottom_third['title'];
						$link_target = $footer_bottom_third['target'] ? $footer_bottom_third['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" download=""><?php echo esc_html($link_title); ?></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</footer>
	<?php
	wp_footer();
	?>
	</body>

	</html>
<?php
}
?>