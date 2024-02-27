<?php /* Template name: Success Page */
get_header();
$success = get_field('success');

if ($success) {
	$overlay = $success['overlay'];
	$title = $success['title'];
	$caption = $success['caption'];
};
$footer_settings = get_field('footer_settings', 'options');
$popup_title_answer = isset($footer_settings['popup_title_answer']) ? $footer_settings['popup_title_answer'] : null;
$popup_image_answer = isset($footer_settings['popup_image_answer']) ? $footer_settings['popup_image_answer'] : null;
?>
<main>

	<section class="success-block" style="background-image: url(<?php echo $overlay['url'] ?>);">
		<div class=" container">
			<div class="success-block__box" data-aos="fade-right">
				<div class="success-block__box-text">
					<?php if ($title) : ?>
						<h2 data-aos="fade-right" data-aos-delay="500">
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($caption) : ?>
						<div class="success-block__desc desc" data-aos="fade-right" data-aos-delay="500">
							<?php echo $caption ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
				<div class="success-block__form">
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

					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>

</main>
<?php get_footer(); ?>