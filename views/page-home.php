<?php /* Template name: Home Page */
get_header();
$main_template = get_field('main_template');

if ($main_template) {
	$hero_group = $main_template['hero_group'];
	$about_me_group = $main_template['about_me_group'];
	$services_group = $main_template['services_group'];
	$price_group = $main_template['price_group'];
	$our_works_group = $main_template['our_works_group'];
	$benefits_group = $main_template['benefits_group'];
	$testimonials_group = $main_template['testimonials_group'];
	$contact_group = $main_template['contact_group'];
};
?>
<main class="home-page">
	<?php if ($hero_group) :
		$overlay = $hero_group['overlay'];
		$title = $hero_group['title'];
		$button = $hero_group['button'];
	?>
		<section class="hero-block">
			<?php if ($overlay) : ?>
				<div class="hero-block__overlay" style="background-image: url(<?php echo $overlay['url'] ?>);"></div>
			<?php endif; ?>
			<div class="container">
				<?php if ($title) : ?>
					<h1>
						<?php echo $title ?> </h1>
				<?php endif; ?>
				<?php if ($button) : ?>
					<div class="hero-block__btn">
						<?php echo initLinkHref($button, 'btn') ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($about_me_group) :
		$block_id = $about_me_group['block_id'];
		$title = $about_me_group['title'];
		$image = $about_me_group['image'];
		$image_second = $about_me_group['image_second'];
		$description = $about_me_group['description'];
		$caption = $about_me_group['caption'];
		$benefits = $about_me_group['benefits'];
	?>
		<section class="about-block" data-aos="fade-right" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2><?php echo $title ?></h2>
				<?php endif; ?>
				<div class="about-block__box">
					<div class="about-block__img">
						<?php if ($image) : ?>
							<div class="about-block__img-first">
								<?php echo wp_get_attachment_image($image, 'full'); ?>
							</div>
						<?php endif; ?>
						<?php if ($image_second) : ?>
							<div class="about-block__img-second">
								<?php echo wp_get_attachment_image($image_second, 'full'); ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="about-block__group">
						<?php if ($description) : ?>
							<div class="about-block__description" data-aos="zoom-out">
								<?php echo $description ?>
							</div>
						<?php endif; ?>
						<?php if ($caption) : ?>
							<div class="about-block__caption " data-aos="fade-left">
								<em><?php echo $caption ?></em>

							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if (is_array($benefits)) : ?>
				<div class="about-block__benefits">
					<div class="container">
						<?php foreach ($benefits as $item) {
							$title = $item['title'];
							$icon = $item['icon'];
						?>
							<div class="about-block__benefits-item">
								<?php if ($icon) : ?>
									<div class="about-block__benefits-img">
										<?php echo wp_get_attachment_image($icon, 'full'); ?>
									</div>
								<?php endif; ?>
								<?php if ($title) : ?>
									<h3><?php echo $title ?></h3>
								<?php endif; ?>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php endif; ?>
		</section>
	<?php endif; ?>


	<?php if ($services_group) :
		$title = $services_group['title'];
		$list = $services_group['list'];
		$block_id = $services_group['block_id'];
	?>
		<section class="services-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2 data-aos="fade-left">
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="services-block__group">
					<div class="services-block__list" id="accordion">
						<?php foreach ($list as $key => $item) {
							$title = $item['title'];
							$description = $item['description'];
							$image_first = $item['image_first'];
							$image_second = $item['image_second'];
							$accordion_id = 'accordion-' . $key; // створюємо унікальний ідентифікатор для кожного елемента
						?>
							<div class="group services-block__item">
								<h3 data-accordion-id="<?php echo $accordion_id; ?>">
									<?php echo $title ?>
									<div class="btn-arrow"></div>
								</h3>
								<div class="group services-block__item-desc description">
									<p><?php echo $description ?></p>
									<div class="services-block__item-img">
										<?php if ($image_first) : ?>
											<div class="services-block__item-img-first"><?php echo wp_get_attachment_image($image_first, 'full'); ?></div>
										<?php endif; ?>
										<?php if ($image_second) : ?>
											<div class="services-block__item-img-second"><?php echo wp_get_attachment_image($image_second, 'full'); ?></div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="services-block__image-box">
						<?php foreach ($list as $key => $item) {
							$image_first = $item['image_first'];
							$image_second = $item['image_second'];
							$accordion_id = 'accordion-' . $key;
						?>
							<?php if ($image_first) : ?>
								<div class="services-block__item-img-first" data-accordion-id="<?php echo $accordion_id; ?>"><?php echo wp_get_attachment_image($image_first, 'full'); ?></div>
							<?php endif; ?>
							<?php if ($image_second) : ?>
								<div class="services-block__item-img-second" data-accordion-id="<?php echo $accordion_id; ?>"><?php echo wp_get_attachment_image($image_second, 'full'); ?></div>
							<?php endif; ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>


	<?php if ($price_group) :
		$title = $price_group['title'];
		$image = $price_group['image'];
		$file = $price_group['file'];
		$text_button = $price_group['text_button'];
		$block_id = $price_group['block_id'];
	?>
		<section class="price-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<div class="price-block__box">
					<?php if ($title) : ?>
						<h2><?php echo $title ?></h2>
					<?php endif; ?>
					<?php if ($file) : ?>
						<div class="price-block__box-link">
							<a class="btn" href="<?php echo $file['url'] ?>" download> <?php echo $text_button ?></a>
						</div>
					<?php endif; ?>
				</div>
				<?php if ($image) : ?>
					<div class="price-block__img">
						<?php echo wp_get_attachment_image($image, 'full'); ?>
					</div>
				<?php endif; ?>

			</div>
		</section>
	<?php endif; ?>



	<?php if ($our_works_group) :
		$title = $our_works_group['title'];
		$list = $our_works_group['list'];
		$block_id = $our_works_group['block_id'];
	?>
		<section class="works-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2 data-aos="fade-right">
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
			</div>
			<?php if (is_array($list)) : ?>
				<div class="works-block__list">
					<?php foreach ($list as $item) {
						$image = $item['image'];
						$title = $item['title'];
						$data = $item['data'];
					?>
						<div class="works-block__item">
							<div class="grid-image" data-fancybox="gallery" data-src="<?php echo wp_get_attachment_image_src($image, 'full')[0]; ?>">
								<?php echo wp_get_attachment_image($image, 'full'); ?>
							</div>
							<div class="works-block__item-title">
								<div>
									<h3>
										<?php echo $title ?>
									</h3>
									<span><?php echo $data ?></span>
								</div>
								<div class="btn-arrow"></div>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php endif; ?>

		</section>
	<?php endif; ?>

	<?php if ($benefits_group) :
		$title = $benefits_group['title'];
		$list = $benefits_group['list'];
		$block_id = $benefits_group['block_id'];
		$cycle_list = 1;
	?>
		<section class="benefits-block" id="<?php echo $block_id  ?>">
			<?php if ($title) : ?>
				<h2>
					<?php echo $title ?>
				</h2>
			<?php endif; ?>
			<div class="container">
				<?php if ($list) : ?>
					<div class="benefits-block__box ">
						<?php foreach ($list as $key => $item) {
							$caption = $item['caption'];
							$icon = $item['icon'];
							$isEven = ($key % 2 == 0);
							$id = ($isEven) ?  'fade-down' : 'fade-up';

						?>
							<div class="benefits-block__item item-<?php echo $cycle_list ?>" data-aos="<?php echo $id ?>">
								<?php if ($caption) : ?>
									<h3><?php echo $caption ?></h3>
								<?php endif; ?>
								<?php if ($icon) : ?>
									<div class="benefits-block__item-icon">
										<?php echo wp_get_attachment_image($icon, 'full'); ?>
									</div>
								<?php endif; ?>
							</div>
						<?php
							$cycle_list++;
						} ?>
						<div class="line"></div>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>


	<?php if ($testimonials_group) :
		$title = $testimonials_group['title'];
		$list = $testimonials_group['list'];
		$block_id = $testimonials_group['block_id'];

	?>
		<section class="testimonials-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2>
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="swiper-nav">
					<button type="button" class="swiper-prev">
						<div class="btn-arrow"></div>
					</button>
					<button type="button" class="swiper-next">
						<div class="btn-arrow"></div>
					</button>
				</div>
				<div class="swiper  testimonials-block__swiper mySwiper">
					<div class="swiper-wrapper">
						<?php foreach ($list as $item) {
							$image = $item['image'];
						?>
							<div class="swiper-slide">
								<div class="grid-image" data-fancybox="gallery" data-src="<?php echo wp_get_attachment_image_src($image, 'full')[0]; ?>">
									<?php echo wp_get_attachment_image($image, 'full'); ?>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>


	<?php if ($contact_group) :
		$form_id = $contact_group['form_id'];
		$block_id = $contact_group['block_id'];
		$image = $contact_group['image'];
		$title = $contact_group['title'];
		$description = $contact_group['description'];
		$contact_link = $contact_group['contact_link'];
		$social_list = $contact_group['social_list'];

	?>
		<section class="contact-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($form_id) : ?>
					<div class="contact-block__form">
						<?php echo do_shortcode($form_id); ?>
						<div class="form-box"></div>
					</div>
				<?php endif; ?>
				<div class="contact-block__group">
					<div class="contact-block__group-inf">
						<div class="contact-block__group-inf-box">
							<?php if ($title) : ?>
								<h2>
									<?php echo $title ?>
								</h2>
							<?php endif; ?>
							<?php if ($description) : ?>
								<div class="contact-block__description description">
									<?php echo $description ?>
								</div>
							<?php endif; ?>
							<?php if (is_array($contact_link)) : ?>
								<div class="contact-block__group-inf-contact">
									<?php foreach ($contact_link as $item) {
										$link = $item['link'];
										$icon = $item['icon'];
										$after_icon = $item['after_icon'];
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
									?>
										<div class="contact-item">
											<?php echo wp_get_attachment_image($icon, 'full'); ?>
											<a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

											<?php if (is_array($after_icon)) : ?>
												<div class="icon-other">
													<?php foreach ($after_icon as $item) {
														$icon = $item['icon'];
													?>
														<?php echo wp_get_attachment_image($icon, 'full'); ?>
													<?php } ?>
												</div>
											<?php endif; ?>
										</div>
									<?php } ?>
								</div>
							<?php endif; ?>
						</div>

						<?php if (is_array($social_list)) : ?>
							<div class="contact-block__group-inf-social">
								<?php foreach ($social_list as $item) {
									$link = $item['link'];
									$icon = $item['icon'];
								?>

									<a href="<?php echo $link ?>"><?php echo wp_get_attachment_image($icon, 'full'); ?></a>
								<?php } ?>
							</div>
						<?php endif; ?>
					</div>
					<?php if ($image) : ?>
						<div class="contact-block__img">
							<?php echo wp_get_attachment_image($image, 'full'); ?>
						</div>
					<?php endif; ?>
				</div>

			</div>
		</section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>