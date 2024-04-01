<?php /* Template name: Home Page */
get_header();
$main_template = get_field('main_template');

if ($main_template) {
	$hero_group = $main_template['hero_group'];
	$about_group = $main_template['about_group'];
	$about_school = $main_template['about_school'];
	$benefits_group = $main_template['benefits_group'];
	$our_help_group = $main_template['our_help_group'];
	$how_we_work_group = $main_template['how_we_work_group'];
	$teachers_group = $main_template['teachers_group'];
	$testimonials_group = $main_template['testimonials_group'];
	$price_group = $main_template['price_group'];
	$certificate_group = $main_template['certificate_group'];
	$blog_group = $main_template['blog_group'];
};
?>
<main class="home-page">
	<?php if ($hero_group) :
		$image = $hero_group['image'];
		$title = $hero_group['title'];
		$button = $hero_group['button'];
		$benefits = $hero_group['benefits'];
		$button_second = $hero_group['button_second'];
	?>
		<section class="hero-block">
			<div class="container">
				<div class="hero-block__box">
					<?php if ($title) : ?>
						<h1 data-aos="fade-right" data-aos-delay="500"><?php echo $title ?></h1>
					<?php endif; ?>
					<div class="hero-block__btn-box">
						<?php if ($button) : ?>
							<div class="hero-block__btn" data-aos="fade-right" data-aos-delay="600">
								<?php echo initLinkHref($button, 'btn') ?>
							</div>
						<?php endif; ?>
						<?php if ($button_second) : ?>
							<div class="hero-block__btn" data-aos="fade-right" data-aos-delay="600">
								<?php echo initLinkHref($button_second, 'btn-tr') ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<?php if ($image) : ?>
					<div class="hero-block__img">
						<?php echo wp_get_attachment_image($image, 'full'); ?>
						<?php if (is_array($benefits)) : ?>
							<div class="hero-block__img-benefits">
								<?php
								$counter = 1;
								foreach ($benefits as $item) {
									$caption = $item['caption'];
								?>
									<div class="hero-block__img-benefits-item" data-aos="flip-up">

										<h3 class="caption-<?php echo $counter ?>"><?php echo $caption ?></h3>
									</div>

								<?php
									$counter++;
								} ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
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
				<div class="about-block__img">
					<?php if ($image) : ?>
						<?php echo wp_get_attachment_image($image, 'full'); ?>
					<?php endif; ?>
				</div>
				<div class="about-block__group">
					<?php if ($title) : ?>
						<h2><?php echo $title ?></h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="about-block__desc desc">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($about_school) :
		$block_id = $about_school['block_id'];
		$description = $about_school['description'];
		$image = $about_school['image'];
		$title_services = $about_school['title_services'];
		$list_services = $about_school['list_services'];
		$caption_services = $about_school['caption_services'];
	?>
		<section class="about-school" id="<?php echo $block_id  ?>">
			<div class="container">
				<div class="about-school__top">
					<?php if ($description) : ?>
						<div class="about-school__desc desc">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
					<div class="about-school__img">
						<?php if ($image) : ?>
							<?php echo wp_get_attachment_image($image, 'full'); ?>
						<?php endif; ?>
					</div>
				</div>

				<?php if ($title_services) : ?>
					<h2><?php echo $title_services ?></h2>
				<?php endif; ?>
				<div class="about-school__services">
					<?php if (is_array($list_services)) : ?>
						<?php foreach ($list_services as $item) {
							$service = $item['service'];
						?>
							<div class="about-school__services-item">
								<?php echo $service ?>
							</div>
						<?php } ?>
					<?php endif; ?>
				</div>
				<?php if ($caption_services) : ?>
					<div data-aos="fade-up" class="about-school__caption caption">
						<?php echo $caption_services ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($benefits_group) :
		$title = $benefits_group['title'];
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
							foreach ($list as $item) {
								$caption = $item['caption'];
							?>
								<div class="benefits-block__item">
									<?php if ($caption) : ?>
										<div class="benefits-block__item-desc desc"><?php echo $caption ?></div>
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

	<?php if ($our_help_group) :
		$block_id = $our_help_group['block_id'];
		$overlay = $our_help_group['overlay'];
		$title = $our_help_group['title'];
		$list = $our_help_group['list'];
		$caption_bottom = $our_help_group['caption'];
	?>
		<section class="our-help" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2><?php echo $title ?></h2>
				<?php endif; ?>
				<div class="our-help__services" style="background-image: url(<?php echo $overlay['url'] ?>);">
					<?php if (is_array($list)) : ?>
						<?php foreach ($list as $item) {
							$caption = $item['caption'];
						?>
							<div class="our-help__services-item" data-aos="fade-up">
								<?php echo $caption ?>
							</div>
						<?php } ?>
					<?php endif; ?>
				</div>
				<?php if ($caption_bottom) : ?>
					<div data-aos="fade-up" class="our-help__caption caption">
						<?php echo $caption_bottom ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($how_we_work_group) :
		$block_id = $how_we_work_group['block_id'];
		$title = $how_we_work_group['title'];
		$description = $how_we_work_group['description'];
		$image = $how_we_work_group['image'];
		$button = $how_we_work_group['button'];
		$title_courses = $how_we_work_group['title_courses'];
		$list_courses = $how_we_work_group['list_courses'];
	?>
		<section class="we-work" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2><?php echo $title ?></h2>
				<?php endif; ?>
				<div class="we-work__top">
					<div class="we-work__top-box">
						<?php if ($description) : ?>
							<div class="we-work__desc desc">
								<?php echo $description ?>
							</div>
						<?php endif; ?>
						<?php if ($button) : ?>
							<div class="we-work__top-btn">
								<?php echo initLinkHref($button, 'btn', true) ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="we-work__img">
						<?php if ($image) : ?>
							<?php echo wp_get_attachment_image($image, 'full'); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="we-work__courses">
					<?php if ($title_courses) : ?>
						<h2><?php echo $title_courses ?></h2>
					<?php endif; ?>
					<div class="we-work__courses-box">
						<div class="swiper  we-work__swiper">
							<div class="swiper-wrapper">
								<?php foreach ($list_courses as $item) {
									$course = $item['course'];
								?>
									<div class="swiper-slide">
										<div class="we-work__course">
											<?php echo $course ?>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="swiper-nav">
							<button type="button" class="swiper-prev-courses nav">
								<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="80" height="80" rx="24" fill="#2F2F2F" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M60 39.9998C60 41.3148 58.8807 42.3807 57.5 42.3807L28.5355 42.3807L39.2678 52.6019C40.2441 53.5317 40.2441 55.0393 39.2678 55.9691C38.2915 56.8989 36.7085 56.8989 35.7322 55.9691L20.7322 41.6834C19.7559 40.7536 19.7559 39.246 20.7322 38.3162L35.7322 24.0305C36.7085 23.1007 38.2915 23.1007 39.2678 24.0305C40.2441 24.9603 40.2441 26.4678 39.2678 27.3977L28.5355 37.6188L57.5 37.6188C58.8807 37.6188 60 38.6848 60 39.9998Z" fill="#1F1E1D" />
								</svg>
							</button>
							<button type="button" class="swiper-next-courses nav">
								<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="80" height="80" rx="24" fill="#2F2F2F" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M20 39.9998C20 38.6849 21.1193 37.6189 22.5 37.6189L51.4645 37.6189L40.7322 27.3977C39.7559 26.4679 39.7559 24.9604 40.7322 24.0305C41.7085 23.1007 43.2915 23.1007 44.2678 24.0305L59.2678 38.3163C60.2441 39.2461 60.2441 40.7536 59.2678 41.6834L44.2678 55.9691C43.2915 56.899 41.7085 56.899 40.7322 55.9691C39.7559 55.0393 39.7559 53.5318 40.7322 52.602L51.4645 42.3808L22.5 42.3808C21.1193 42.3808 20 41.3148 20 39.9998Z" fill="#1F1E1D" />
								</svg>

							</button>
						</div>

					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($teachers_group) :
		$block_id = $teachers_group['block_id'];
		$title = $teachers_group['title'];
		$benefits = $teachers_group['benefits'];
		$teachers = $teachers_group['teachers'];
	?>
		<section class="teachers-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2><?php echo $title ?></h2>
				<?php endif; ?>
				<div class="teachers-block__box">
					<div class="teachers-block__services">
						<?php if (is_array($benefits)) : ?>
							<?php foreach ($benefits as $item) {
								$caption = $item['caption'];
							?>
								<div class="teachers-block__services-item">
									<?php echo $caption ?>
								</div>
							<?php } ?>
						<?php endif; ?>
					</div>
					<div class="teachers-block__courses">
						<div class="teachers-block__courses-box">
							<div class="swiper  teachers-block__swiper">
								<div class="swiper-wrapper">
									<?php foreach ($teachers as $item) {
										$position = $item['position'];
										$image = $item['image'];
										$name = $item['name'];
										$description = $item['description'];
									?>
										<div class="swiper-slide">
											<div class="teachers-block__img">
												<?php echo wp_get_attachment_image($image, 'full'); ?>
											</div>
											<div class="teachers-block__inf">
												<h3 class="teachers-block__name">
													<?php echo $name ?>
													<?php if ($position) : ?>
														<span><?php echo $position ?></span>
													<?php endif; ?>
												</h3>
												<div class="teachers-block__desc">
													<?php echo $description ?>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="swiper-nav">
								<button type="button" class="swiper-prev-teachers nav">
									<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="80" height="80" rx="24" fill="#2F2F2F" />
										<path fill-rule="evenodd" clip-rule="evenodd" d="M60 39.9998C60 41.3148 58.8807 42.3807 57.5 42.3807L28.5355 42.3807L39.2678 52.6019C40.2441 53.5317 40.2441 55.0393 39.2678 55.9691C38.2915 56.8989 36.7085 56.8989 35.7322 55.9691L20.7322 41.6834C19.7559 40.7536 19.7559 39.246 20.7322 38.3162L35.7322 24.0305C36.7085 23.1007 38.2915 23.1007 39.2678 24.0305C40.2441 24.9603 40.2441 26.4678 39.2678 27.3977L28.5355 37.6188L57.5 37.6188C58.8807 37.6188 60 38.6848 60 39.9998Z" fill="#1F1E1D" />
									</svg>
								</button>
								<button type="button" class="swiper-next-teachers nav">
									<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="80" height="80" rx="24" fill="#2F2F2F" />
										<path fill-rule="evenodd" clip-rule="evenodd" d="M20 39.9998C20 38.6849 21.1193 37.6189 22.5 37.6189L51.4645 37.6189L40.7322 27.3977C39.7559 26.4679 39.7559 24.9604 40.7322 24.0305C41.7085 23.1007 43.2915 23.1007 44.2678 24.0305L59.2678 38.3163C60.2441 39.2461 60.2441 40.7536 59.2678 41.6834L44.2678 55.9691C43.2915 56.899 41.7085 56.899 40.7322 55.9691C39.7559 55.0393 39.7559 53.5318 40.7322 52.602L51.4645 42.3808L22.5 42.3808C21.1193 42.3808 20 41.3148 20 39.9998Z" fill="#1F1E1D" />
									</svg>

								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($testimonials_group) :
		$title = $testimonials_group['title'];
		$list = $testimonials_group['list'];
		$button = $testimonials_group['button'];
		$block_id = $testimonials_group['block_id'];
	?>
		<section class="testimonials-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2>
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="testimonials-block__box">
					<div class="swiper  testimonials-block__swiper">
						<div class="swiper-wrapper">
							<?php
							foreach ($list as $item) {
								$image = $item['image'];
								$image_second = $item['image_second'];
							?>
								<div class="swiper-slide">
									<div class="testimonials-block__img">
										<?php echo wp_get_attachment_image($image, 'full'); ?>
									</div>
									<div class="testimonials-block__img-second">
										<?php echo wp_get_attachment_image($image_second, 'full'); ?>
									</div>
								</div>
							<?php
							} ?>
						</div>
					</div>
					<div class="swiper-nav">
						<button type="button" class="swiper-prev-testimonials nav">
							<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="80" height="80" rx="24" fill="#2F2F2F" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M60 39.9998C60 41.3148 58.8807 42.3807 57.5 42.3807L28.5355 42.3807L39.2678 52.6019C40.2441 53.5317 40.2441 55.0393 39.2678 55.9691C38.2915 56.8989 36.7085 56.8989 35.7322 55.9691L20.7322 41.6834C19.7559 40.7536 19.7559 39.246 20.7322 38.3162L35.7322 24.0305C36.7085 23.1007 38.2915 23.1007 39.2678 24.0305C40.2441 24.9603 40.2441 26.4678 39.2678 27.3977L28.5355 37.6188L57.5 37.6188C58.8807 37.6188 60 38.6848 60 39.9998Z" fill="#1F1E1D" />
							</svg>
						</button>
						<button type="button" class="swiper-next-testimonials nav">
							<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="80" height="80" rx="24" fill="#2F2F2F" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M20 39.9998C20 38.6849 21.1193 37.6189 22.5 37.6189L51.4645 37.6189L40.7322 27.3977C39.7559 26.4679 39.7559 24.9604 40.7322 24.0305C41.7085 23.1007 43.2915 23.1007 44.2678 24.0305L59.2678 38.3163C60.2441 39.2461 60.2441 40.7536 59.2678 41.6834L44.2678 55.9691C43.2915 56.899 41.7085 56.899 40.7322 55.9691C39.7559 55.0393 39.7559 53.5318 40.7322 52.602L51.4645 42.3808L22.5 42.3808C21.1193 42.3808 20 41.3148 20 39.9998Z" fill="#1F1E1D" />
							</svg>

						</button>
					</div>
				</div>
				<?php if ($button) : ?>
					<div class="testimonials-block__btn">
						<?php echo initLinkHref($button, 'btn', true) ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($price_group) :
		$title = $price_group['title'];
		$languages = $price_group['languages'];
		$button = $price_group['button'];
		$block_id = $price_group['block_id'];
	?>
		<section class="price-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2>
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="price-block__box">
					<?php if (is_array($languages)) : ?>

						<div class="price-block__languages" id="languages">
							<ul class="price-block__languages-list">
								<?php
								$languages_counter = 1;
								$languages_counter_global = 1;
								foreach ($languages as $item) {
									$language = $item['language']; ?>
									<li class="price-block__languages-item"><a href="#tabs-<?php echo $languages_counter ?>"><?php echo $language ?></a></li>
								<?php
									$languages_counter++;
								} ?>
							</ul>
							<?php
							$duration_counter = 1;
							foreach ($languages as $item) {
								$course_duration = $item['course_duration'];
							?>
								<div class="price-block__course-duration" id="tabs-<?php echo $duration_counter ?>">
									<div id="course-duration-<?php echo $languages_counter_global ?>-<?php echo $duration_counter ?>">
										<ul class="price-block__course-duration-list">
											<?php
											$course_duration_counter = 1;
											if (is_array($course_duration) && count($course_duration) > 0) {
												foreach ($course_duration as $item) {
													$course_period = $item['course_period'];
													$lesson_duration = $item['lesson_duration']; ?>
													<li class="price-block__course-duration-item"><a href="#tabs-2-<?php echo $languages_counter_global ?>-<?php echo $course_duration_counter ?>">
															<h3> <?php echo $course_period ?></h3>
															<span><?php echo $lesson_duration ?></span>
														</a></li>
											<?php
													$course_duration_counter++;
												}
											} ?>
										</ul>
										<?php
										$course_duration_counter_bottom = 1;
										if (is_array($course_duration) && count($course_duration) > 0) {
											foreach ($course_duration as $item) {
												$types_of_courses = $item['types_of_courses'];
										?>
												<div id="tabs-2-<?php echo $languages_counter_global ?>-<?php echo $course_duration_counter_bottom ?>">

													<div class="price-block__type-name" id="course-type-name-<?php echo $languages_counter_global ?>-<?php echo $course_duration_counter_bottom ?>">
														<ul class="price-block__type-name-list">
															<?php
															$course_type_name_counter = 1;
															foreach ($types_of_courses as $item) {
																$course_type_name = $item['course_type_name']; ?>
																<li class="price-block__type-name-item"><a href="#tabs-3-<?php echo $languages_counter_global ?>-<?php echo $course_type_name_counter ?>"><?php echo $course_type_name ?></a></li>
															<?php
																$course_type_name_counter++;
															} ?>
														</ul>
														<?php
														$course_type_name_counter_bottom = 1;
														foreach ($types_of_courses as $item) {
															$groups_courses = $item['groups_courses'];
														?>
															<div class="price-block__groups-courses" id="tabs-3-<?php echo $languages_counter_global ?>-<?php echo $course_type_name_counter_bottom ?>">
																<?php if (is_array($groups_courses)) : ?>
																	<?php
																	$course_lessons = 1;
																	foreach ($groups_courses as $item) {
																		$title = $item['title'];
																		$lessons = $item['lessons'];
																	?>
																		<div class="price-block__groups-courses-item">
																			<h4><?php echo $title ?></h4>
																			<div id="accordion-<?php echo $languages_counter_global ?>-<?php echo $course_lessons ?>-<?php echo $course_type_name_counter_bottom ?>-<?php echo $course_duration_counter_bottom ?>" class=" accordion-item">
																				<?php
																				$firstLesson = reset($lessons)['lesson'];
																				?>
																				<h3><?php echo $firstLesson; ?> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<rect width="24" height="24" rx="8" fill="#5EAEA7" />
																						<path fill-rule="evenodd" clip-rule="evenodd" d="M12 6C12.3945 6 12.7143 6.33579 12.7143 6.75V15.4393L15.7806 12.2197C16.0596 11.9268 16.5118 11.9268 16.7908 12.2197C17.0697 12.5126 17.0697 12.9874 16.7908 13.2803L12.5051 17.7803C12.2261 18.0732 11.7739 18.0732 11.4949 17.7803L7.20921 13.2803C6.93026 12.9874 6.93026 12.5126 7.20921 12.2197C7.48816 11.9268 7.94042 11.9268 8.21936 12.2197L11.2857 15.4393V6.75C11.2857 6.33579 11.6055 6 12 6Z" fill="#1F1E1D" />
																					</svg>
																				</h3>
																				<div>
																					<?php
																					foreach ($lessons as $item) {
																						$lesson = $item['lesson'];
																						if ($lesson !== $firstLesson) {
																					?>
																							<div class="lessons">
																								<?php echo $lesson; ?>
																							</div>
																					<?php
																						}
																					}
																					?>
																				</div>
																			</div>
																		</div>
																	<?php
																		$course_lessons++;
																	} ?>
																<?php endif; ?>
															</div>
														<?php
															$course_type_name_counter_bottom++;
														} ?>
													</div>
												</div>
										<?php
												$course_duration_counter_bottom++;
											}
										} ?>
									</div>
								</div>
							<?php
								$duration_counter++;
								$languages_counter_global++;
							} ?>
						</div>
					<?php endif; ?>
					<div class="price-block__btn">
						<?php echo initLinkHref($button, 'btn', true) ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php if ($certificate_group) :
		$block_id = $certificate_group['block_id'];
		$title = $certificate_group['title'];
		$description = $certificate_group['description'];
		$image = $certificate_group['image'];
		$image_second = $certificate_group['image_second'];
		$button = $certificate_group['button'];
	?>
		<section class="certificate-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2 class="title"><?php echo $title ?></h2>
				<?php endif; ?>
				<div class="certificate-block__top">
					<div class="certificate-block__top-box">
						<?php if ($description) : ?>
							<div class="certificate-block__desc desc">
								<?php echo $description ?>
							</div>
						<?php endif; ?>
						<?php if ($button) : ?>
							<div class="certificate-block__top-btn">
								<?php echo initLinkHref($button, 'btn', true) ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="certificate-block__img">
						<?php if ($image) : ?>
							<div class="certificate-block__img-first">
								<?php echo wp_get_attachment_image($image, 'full'); ?>
							</div>
						<?php endif; ?>
						<?php if ($image_second) : ?>
							<div class="certificate-block__img-second">
								<?php echo wp_get_attachment_image($image_second, 'full'); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php if ($blog_group) :
		$title = $blog_group['title'];
		$list = $blog_group['list'];
		$block_id = $blog_group['block_id'];
		$buttons = $blog_group['buttons'];

		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$posts_per_page = get_option('posts_per_page');

		$posts = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => $posts_per_page,
			'post__in' => $list,
			'orderby' => 'post__in',
			'post_status' => 'publish',
		));

	?>
		<section class="entry-page archive-blog" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2>
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="archive-blog__wrapper">
					<?php {
						if ($posts->have_posts()) {
							while ($posts->have_posts()) : $posts->the_post(); ?>
								<?php get_template_part('post-templates/post-item', get_post_format()); ?>
					<?php endwhile;
							wp_reset_query();
							wp_reset_postdata();
						} else {
							echo ('<p>Posts is empty.</p>');
							wp_reset_query();
							wp_reset_postdata();
						}
					}
					?>
				</div>
				<div class="archive-blog__link">
					<?php echo initLinkHref($buttons, 'btn') ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>