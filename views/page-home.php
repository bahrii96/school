<?php /* Template name: Home Page */
get_header();
$main_template = get_field('main_template');

if ($main_template) {
	$hero_group = $main_template['hero_group'];
	$services_group = $main_template['services_group'];
	$discount_group = $main_template['discount_group'];
	$cabinet_group = $main_template['cabinet_group'];
	$about_me_group = $main_template['about_me_group'];
	$benefits_group = $main_template['benefits_group'];
	$injection_cosmetology_group = $main_template['injection_cosmetology_group'];
	$aesthetic_cosmetology_group = $main_template['aesthetic_cosmetology_group'];
	$selection_cosmetics_group = $main_template['selection_cosmetics_group'];
	$testimonials_group = $main_template['testimonials_group'];
	$contact_group = $main_template['contact_group'];
	$map_group = $main_template['map_group'];
};
?>
<main class="home-page">
	<?php if ($hero_group) :
		$overlay = $hero_group['overlay'];
		$overlay_mobile = $hero_group['overlay_mobile'];
		$title = $hero_group['title'];
		$button = $hero_group['button'];
	?>
		<section class="hero-block">
			<h1 style="display: none;">Косметологія</h1>
			<?php if ($overlay) : ?>
				<div class="hero-block__overlay" style="background-image: url(<?php echo $overlay['url'] ?>);"></div>
			<?php endif; ?>

			<div class="container">
				<?php if ($title) : ?>
					<div class="hero-block__img" data-aos="fade-up">
						<?php echo wp_get_attachment_image($title, 'full'); ?>
					</div>
				<?php endif; ?>
				<?php if ($button) : ?>
					<div class="hero-block__btn" data-aos="fade-right" data-aos-delay="500">
						<?php echo initLinkHref($button, 'btn-bl') ?>
					</div>
				<?php endif; ?>
			</div>
			<?php if ($overlay_mobile) : ?>
				<div class="hero-block__overlay-mob">
					<?php echo wp_get_attachment_image($overlay_mobile, 'full'); ?></div>
			<?php endif; ?>
		</section>
	<?php endif; ?>

	<?php if ($services_group) :
		$list = $services_group['list'];
		$block_id = $services_group['block_id'];
	?>
		<section class="services-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if (is_array($list)) : ?>
					<div class="services-block__list">
						<?php foreach ($list as $key => $item) {
							$image = $item['image'];
							$link = $item['link'];
							$caption = $item['caption'];
						?>
							<a href="<?php echo $link ?>" class="services-block__item" style="background-image: url(<?php echo $image['url'] ?>);">
								<h3><?php echo $caption ?></h3>
								<span></span>
							</a>
						<?php } ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($discount_group) :
		$block_id = $discount_group['block_id'];
		$title = $discount_group['title'];
		$image = $discount_group['image'];
		$overlay = $discount_group['overlay'];
		$description = $discount_group['description'];
		$button = $discount_group['button'];
	?>
		<section class="discount-block" id="<?php echo $block_id  ?>" style="background-image: url(<?php echo $overlay['url'] ?>);">
			<div class="container">
				<div class="discount-block__img" data-aos="fade-right">
					<?php if ($image) : ?>
						<?php echo wp_get_attachment_image($image, 'full'); ?>
					<?php endif; ?>
				</div>
				<div class="discount-block__box">
					<?php if ($title) : ?>
						<h2><?php echo $title ?></h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="discount-block__description desc">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
					<?php if ($button) : ?>
						<div class="discount-block__link ">
							<?php echo initLinkHref($button, 'btn-bl', true) ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($cabinet_group) :
		$title = $cabinet_group['title'];
		$list = $cabinet_group['list'];
		$block_id = $cabinet_group['block_id'];
	?>
		<section class="cabinet-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2>
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="cabinet-block__list">
					<?php foreach ($list as $item) {
						$image = $item['image'];
					?>
						<div class="grid-image" data-fancybox="gallery" data-src="<?php echo wp_get_attachment_image_src($image, 'full')[0]; ?>">
							<?php echo wp_get_attachment_image($image, 'full'); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($about_me_group) :
		$block_id = $about_me_group['block_id'];
		$title = $about_me_group['title'];
		$image = $about_me_group['image'];
		$image_second = $about_me_group['image_second'];
		$description = $about_me_group['description'];
		$button = $about_me_group['button'];
	?>
		<section class="about-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<div class="about-block__img">
					<?php if ($image) : ?>
						<div class="about-block__img-first" data-aos="fade-up">
							<?php echo wp_get_attachment_image($image, 'full'); ?>
						</div>
					<?php endif; ?>
					<?php if ($image_second) : ?>
						<div class="about-block__img-second" data-aos="fade-down">
							<?php echo wp_get_attachment_image($image_second, 'full'); ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="about-block__group">
					<?php if ($title) : ?>
						<h2><?php echo $title ?></h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="about-block__description desc">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
					<?php if ($button) : ?>
						<div class="about-block__link ">
							<?php echo initLinkHref($button, 'btn-bl') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>


	<?php if ($benefits_group) :
		$title = $benefits_group['title'];
		$list = $benefits_group['list'];
		$block_id = $benefits_group['block_id'];

	?>
		<section class="benefits-block" id="<?php echo $block_id  ?>">
			<?php if ($title) : ?>
				<h2>
					<?php echo $title ?>
				</h2>
			<?php endif; ?>
			<div class="container">
				<?php if (is_array($list)) : ?>

					<?php foreach ($list as $item) {
						$image = $item['image'];
						$title = $item['title'];
						$description = $item['description'];
					?>
						<div class="benefits-block__item">
							<?php if ($image) : ?>
								<div class="benefits-block__item-img">
									<?php echo wp_get_attachment_image($image, 'full'); ?>
								</div>
							<?php endif; ?>
							<?php if ($title) : ?>
								<h3><?php echo $title ?></h3>
							<?php endif; ?>
							<?php if ($description) : ?>
								<div class="benefits-block__item-desc desc"><?php echo $description ?></div>
							<?php endif; ?>
						</div>
					<?php
					} ?>

				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>


	<?php if ($injection_cosmetology_group) :
		$overlays = $injection_cosmetology_group['overlays'];
		$title = $injection_cosmetology_group['title'];
		$button = $injection_cosmetology_group['button'];
		$list_left = $injection_cosmetology_group['list_left'];
		$list_right = $injection_cosmetology_group['list_right'];
		$block_id = $injection_cosmetology_group['block_id'];
	?>
		<section class="injection-block" id="<?php echo $block_id ?>">
			<div class="container">
				<div class="injection-block__top">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($button) : ?>
						<div class="injection-block__link ">
							<?php echo initLinkHref($button, 'btn-bl', true) ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="injection-block__box" style="background-image: url(<?php echo $overlays['url'] ?>);">
					<?php if (is_array($list_left)) : ?>
						<div class="injection-block__left">
							<?php foreach ($list_left as $item) {
								$title = $item['title'];
								$list = $item['list'];
							?>
								<div class="injection-block__item">
									<?php if ($title) : ?>
										<h3><?php echo $title ?></h3>
									<?php endif; ?>
									<?php if (is_array($list)) : ?>
										<div class="injection-block__item-box">
											<?php foreach ($list as $item) {
												$procedure = $item['procedure'];
												$price = $item['price'];
											?>
												<div class="injection-block__item-box-item">
													<?php if ($title) : ?>
														<div class="procedure"><?php echo $procedure ?></div>
													<?php endif; ?>
													<?php if ($price) : ?>
														<div class="price"><?php echo $price ?></div>
													<?php endif; ?>
												</div>
											<?php
											} ?>
										</div>
									<?php endif; ?>
								</div>
							<?php
							} ?>
						</div>
					<?php endif; ?>

					<?php if (is_array($list_right)) : ?>
						<div class="injection-block__right">
							<?php foreach ($list_left as $item) {
								$title = $item['title'];
								$list = $item['list'];
							?>
								<div class="injection-block__item">
									<?php if ($title) : ?>
										<h3><?php echo $title ?></h3>
									<?php endif; ?>
									<?php if (is_array($list)) : ?>
										<div class="injection-block__item-box">
											<?php foreach ($list as $item) {
												$procedure = $item['procedure'];
												$price = $item['price'];
											?>
												<div class="injection-block__item-box-item">
													<?php if ($title) : ?>
														<div class="procedure"><?php echo $procedure ?></div>
													<?php endif; ?>
													<?php if ($price) : ?>
														<div class="price"><?php echo $price ?></div>
													<?php endif; ?>
												</div>
											<?php
											} ?>
										</div>
									<?php endif; ?>
								</div>
							<?php
							} ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>



	<?php if ($aesthetic_cosmetology_group) :
		$title = $aesthetic_cosmetology_group['title'];
		$button = $aesthetic_cosmetology_group['button'];
		$list_left = $aesthetic_cosmetology_group['list_left'];
		$image = $aesthetic_cosmetology_group['image'];
		$block_id = $aesthetic_cosmetology_group['block_id'];
	?>
		<section class="aesthetic-block" id="<?php echo $block_id ?>">
			<div class="container">
				<div class="injection-block__top">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($button) : ?>
						<div class="aesthetic-block__link ">
							<?php echo initLinkHref($button, 'btn-bl', true) ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="aesthetic-block__box">
					<?php if (is_array($list_left)) : ?>
						<div class="aesthetic-block__left">
							<?php foreach ($list_left as $item) {
								$procedure = $item['procedure'];
								$price = $item['price'];
							?>
								<div class="aesthetic-block__item">
									<?php if ($title) : ?>
										<div class="procedure"><?php echo $procedure ?></div>
									<?php endif; ?>
									<?php if ($price) : ?>
										<div class="price"><?php echo $price ?></div>
									<?php endif; ?>
								</div>
							<?php
							} ?>
						</div>
					<?php endif; ?>
					<?php if ($image) : ?>
						<div class="aesthetic-block__img" data-aos="fade-left"><?php echo wp_get_attachment_image($image, 'full'); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($selection_cosmetics_group) :
		$block_id = $selection_cosmetics_group['block_id'];
		$title = $selection_cosmetics_group['title'];
		$image = $selection_cosmetics_group['image'];
		$image_second = $selection_cosmetics_group['image_second'];
		$overlay = $selection_cosmetics_group['overlay'];
		$description = $selection_cosmetics_group['description'];
		$button = $selection_cosmetics_group['button'];
	?>
		<section class="selection-block" id="<?php echo $block_id  ?>" style="background-image: url(<?php echo $overlay['url'] ?>);">
			<div class="container">
				<div class="selection-block__img" data-aos="fade-right">
					<?php if ($image) : ?>
						<?php echo wp_get_attachment_image($image, 'full'); ?>
					<?php endif; ?>
				</div>

				<div class="selection-block__box">
					<div class="selection-block__box-img">
						<?php if ($image_second) : ?>
							<?php echo wp_get_attachment_image($image_second, 'full'); ?>
						<?php endif; ?>
					</div>
					<?php if ($title) : ?>
						<h2><?php echo $title ?></h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="selection-block__description desc">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
					<?php if ($button) : ?>
						<div class="selection-block__link ">
							<?php echo initLinkHref($button, 'btn',true) ?>
						</div>
					<?php endif; ?>
				</div>
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
			</div>
			<div class="swiper  testimonials-block__swiper">
				<div class="swiper-wrapper">
					<?php foreach ($list as $item) {
						$image = $item['image'];
						$name = $item['name'];
						$data = $item['data'];
						$stars = $item['stars'];
						$testimonial = $item['testimonial'];
					?>
						<div class="swiper-slide">
							<div class="grid-image-box">
								<div class="testimonials-block__top">
									<div class="testimonials-block__avatar"><?php echo wp_get_attachment_image($image, 'full'); ?></div>
									<div class="testimonials-block__top-box">
										<h3><?php echo $name ?></h3>
										<span><?php echo $data ?></span>
									</div>
								</div>
								<div class="testimonials-block__stars"><?php echo wp_get_attachment_image($stars, 'full'); ?></div>
								<div class="testimonials-block__testimonial desc"><?php echo $testimonial ?></div>

							</div>
						</div>
					<?php } ?>
				</div>
			</div>

		</section>
	<?php endif; ?>

	<?php if ($contact_group) :
		$form_id = $contact_group['form_id'];
		$block_id = $contact_group['block_id'];
		$overlay_contact = $contact_group['overlay_contact'];
		$title = $contact_group['title'];
		$description = $contact_group['description'];
	?>
		<section class="contact-block" id="<?php echo $block_id ?>" style="background-image: url(<?php echo $overlay_contact['url'] ?>);">
			<div class=" container">
				<div class="contact-block__box">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="contact-block__description desc">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
					<?php if ($form_id) : ?>
						<div class="contact-block__form">
							<?php echo do_shortcode($form_id); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($map_group) :
		$block_id = $map_group['block_id'];
		$title = $map_group['title'];
		$link = $map_group['link'];
		$map_iframe = $map_group['map_iframe'];
	?>
		<section class="map-block" id="<?php echo $block_id ?>">
			<div class=" container">
				<div class="map-block__top">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($link) : ?>
						<div class="map-block__link">
							<?php echo initLinkHref($link, 'btn-bl') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php if ($map_iframe) : ?>
				<div class="map-block__map ">
					<?php echo $map_iframe ?>
				</div>
			<?php endif; ?>
		</section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>