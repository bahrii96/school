<?php
get_header();
$terms = get_the_terms($post->ID, 'category');
$author_id = get_post_field('post_author', $post->ID);
$first_name = get_the_author_meta('first_name', $author_id);
$last_name = get_the_author_meta('last_name', $author_id);
$url = get_author_posts_url($author_id);
?>
<section class="entry-page single-page-post">
	<div class="container">
		<div class="single-page-post__wrapper">
			<div class="single-page-post__meta">
				<?php
				$postDay = get_the_date('d');
				$postMonth = get_the_date('m');
				$postYear = get_the_date('Y');
				?>
				<div class="date"><?php echo $postDay; ?>.<?php echo $postMonth; ?>.<?php echo $postYear; ?></div>
			</div>
			<h1 class="single-page-post__title"><?php the_title(); ?></h1>

			<div class="single-page-post__featured">
				<?php
				if (wp_get_attachment_image(get_post_thumbnail_id())) {
					imageShowPost(get_post_thumbnail_id(), 'full');
				} else {
				?>
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/thumbnail-default.jpg'; ?>" />
				<?php
				}
				?>
			</div>
			<div class="single-page-post__content default-content ">
				<?php the_content(); ?>
				<a class="back-link" href="/bloh">

					<?php if (pll_current_language() == 'ru') {
						_e('Назад в блог', 'my-custom-theme');
					} else {
						_e('Назад до блогу', 'my-custom-theme');
					}
					?> </a>

			</div>
		</div>
		<div class="single-page-post__sidebar">
			<h2 class="sidebar-title">
				<?php
				if (pll_current_language() == 'ru') {
					_e('Похожие', 'my-custom-theme');
				} else {
					_e('Схожі', 'my-custom-theme');
				}
				?>
				<span style="color: rgb(37, 169, 225);">
					<?php
					if (pll_current_language() == 'ru') {
						_e('публикации', 'my-custom-theme');
					} else {
						_e('публікації', 'my-custom-theme');
					}
					?>
				</span>
			</h2>

			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$posts_per_page = get_option('posts_per_page');

			$posts = new WP_Query(array(
				'post_type' => 'post',
				'posts_per_page' => 2,
				'post_status' => 'publish',
				'paged' => $paged,
				'orderby' => 'rand',
			)); ?>
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
		</div>
	</div>
</section>
<?php get_footer(); ?>