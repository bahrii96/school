<?php /* Template name: Home Page */
get_header();
$main_template = get_field('main_template');

if ($main_template) {
	$hero_group = $main_template['hero_group'];
	$about_group = $main_template['about_group'];
	$benefits_group = $main_template['benefits_group'];
	$gallery_group = $main_template['gallery_group'];
	$products_group = $main_template['products_group'];
	$special_offer_group = $main_template['special_offer_group'];
	$question_group = $main_template['question_group'];
	$testimonials_group = $main_template['testimonials_group'];
	$contact_group = $main_template['contact_group'];
};
?>
<main class="home-page">
	<?php if ($hero_group) :
		$overlay = $hero_group['overlay'];
		$overlay_mobile = $hero_group['overlay_mobile'];
		$title = $hero_group['title'];
		$button = $hero_group['button'];
		$caption = $hero_group['caption'];
	?>
		<section class="hero-block">
			<?php if ($overlay) : ?>
				<div class="hero-block__overlay" style="background-image: url(<?php echo $overlay['url'] ?>);"></div>
			<?php endif; ?>
			<?php if ($overlay_mobile) : ?>
				<div class="hero-block__overlay-mob" style="background-image: url(<?php echo $overlay_mobile['url'] ?>);">
				</div>
			<?php endif; ?>
			<div class="container">
				<div class="hero-block__box" data-aos="fade-right">
					<?php if ($title) : ?>
						<h1 data-aos="fade-right" data-aos-delay="500"><?php echo $title ?></h1>
					<?php endif; ?>
					<?php if ($caption) : ?>
						<div class="hero-block__desc" data-aos="fade-right" data-aos-delay="500"><?php echo $caption ?></div>
					<?php endif; ?>
					<?php if ($button) : ?>
						<div class="hero-block__btn" data-aos="fade-up" data-aos-delay="600">
							<?php echo initLinkHref($button, 'btn', true) ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($about_group) :
		$block_id = $about_group['block_id'];
		$title = $about_group['title'];
		$image = $about_group['image'];
		$description = $about_group['description'];
	?>
		<section class="about-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<div class="about-block__img" >
					<?php if ($image) : ?>
						<?php echo wp_get_attachment_image($image, 'full'); ?>
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
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($benefits_group) :
		$title = $benefits_group['title'];
		$image = $benefits_group['image'];
		$list = $benefits_group['list'];
		$block_id = $benefits_group['block_id'];
	?>
		<section class="benefits-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<div class="benefits-block__left">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if (is_array($list)) : ?>
						<div class="benefits-block__list">
							<?php
							$delay = 400;

							foreach ($list as $item) {
								$description = $item['description'];
							?>
								<div class="benefits-block__item" data-aos="fade-right" data-aos-delay="<?php echo $delay; ?>">
									<?php if ($description) : ?>
										<div class="benefits-block__item-desc desc"><?php echo $description ?></div>
									<?php endif; ?>
								</div>
							<?php
								$delay += 50;
							} ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if ($image) : ?>
					<div class="benefits-block__img">
						<?php echo wp_get_attachment_image($image, 'full'); ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($gallery_group) :
		$list = $gallery_group['list'];
		$block_id = $gallery_group['block_id'];
	?>
		<section class="gallery-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<div class="swiper  gallery-block__swiper">
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

	<?php if ($products_group) :
		$title = $products_group['title'];
		$list = $products_group['list'];
		$block_id = $products_group['block_id'];
	?>
		<section class="products-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2>
						<?php echo $title ?>
					</h2>
				<?php endif; ?>

				<div class="swiper  products-block__swiper mySwiper">
					<div class="swiper-wrapper">
						<?php foreach ($list as $item) {
							$image = $item['image'];
							$title = $item['title'];
							$price = $item['price'];
						?>
							<div class="swiper-slide">
								<div class="products-grid-image">
									<?php echo wp_get_attachment_image($image, 'full'); ?>
								</div>
								<h3><?php echo $title ?></h3>
								<div class="price"><?php echo $price ?></div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($special_offer_group) :
		$title = $special_offer_group['title'];
		$image = $special_offer_group['image'];
		$overlay = $special_offer_group['overlay'];
		$button = $special_offer_group['button'];
		$block_id = $special_offer_group['block_id'];
	?>
		<section class="price-block" id="<?php echo $block_id ?>" style="background-image: url(<?php echo $overlay['url'] ?>);">
			<div class="container">
				<div class="price-block__box">
					<?php if ($title) : ?>
						<h2><?php echo $title ?></h2>
					<?php endif; ?>
					<?php if ($button) : ?>
						<div class="price-block__box-link">
							<?php echo initLinkHref($button, 'btn-bl', true) ?>
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

	<?php if ($question_group) :
		$title = $question_group['title'];
		$list = $question_group['list'];
		$block_id = $question_group['block_id'];
	?>
		<section class="question-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2 >
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="question-block__group">
					<div class="question-block__list" id="accordion">
						<?php foreach ($list as $key => $item) {
							$title = $item['title'];
							$description = $item['description'];
						?>
							<div class="group question-block__item">
								<h3>
									<?php echo $title ?>
									<div class="btn-arrow"></div>
								</h3>
								<div class="group question-block__item-desc description">
									<p><?php echo $description ?></p>
								</div>
							</div>
						<?php } ?>
					</div>
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
				<div class="testimonials-block__top">
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
				</div>
				<div class="swiper  testimonials-block__swiper">
					<div class="swiper-wrapper">
						<?php
						$count = 0;
						foreach ($list as $item) {
							$image = $item['image'];
							$name = $item['name'];
							$data = $item['data'];
							$testimonial = $item['testimonial'];

						?>
							<div class="swiper-slide <?php echo ($count % 2 == 0) ? ' active-block' : ''; ?>">
								<div class="testimonials-block__avatar"><?php echo wp_get_attachment_image($image, 'full'); ?></div>
								<div class="testimonials-block__box">
									<span><?php echo $data ?></span>
									<h3><?php echo $name ?></h3>
									<div class="testimonials-block__testimonial desc"><?php echo $testimonial ?></div>
								</div>
							</div>
						<?php
							$count++;
						} ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($contact_group) :
		$block_id = $contact_group['block_id'];
		$form_id = $contact_group['form_id'];
		$overlay_contact = $contact_group['overlay_contact'];
		$title = $contact_group['title'];
		$description = $contact_group['description'];
	?>
		<section class="contact-block" id="<?php echo $block_id ?>" style="background-image: url(<?php echo $overlay_contact['url'] ?>);">
			<div class=" container">
				<div class="contact-block__box" data-aos="fade-right">
					<div class="contact-block__box-text">
						<?php if ($title) : ?>
							<h2 data-aos="fade-right" data-aos-delay="500">
								<?php echo $title ?>
							</h2>
						<?php endif; ?>
						<?php if ($description) : ?>
							<div class="contact-block__desc desc" data-aos="fade-right" data-aos-delay="500">
								<?php echo $description ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<?php if ($form_id) : ?>
					<div class="contact-block__form">
						<?php echo do_shortcode($form_id); ?>
					</div>
				<?php endif; ?>

			</div>
		</section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>