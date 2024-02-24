<!DOCTYPE html>
<html lang="en-US">

<head>
	<?php
	get_template_part('structure/meta');
	wp_head();
	?>
</head>
<?php

$links = get_field('liks', 'options');
?>

<body <?php body_class(); ?>>
	<div class="header__top">
		<div class="container">
			<?php if (is_array($links)) : ?>
				<?php foreach ($links as $item) {
					$icon = $item['icon'];
					$link = $item['link'];
				?>
					<div class="header__top-item">
						<i class="<?php echo $icon ?>"></i>

						<?php echo initLinkHref($link) ?>
					</div> <?php } ?>
			<?php endif; ?>
		</div>
	</div>
	<header class="header">
		<div class="container">
			<span class="menu-toggle">
				<small></small>
			</span>
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

			<nav>

				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary_left',
					'menu_class' => 'main-nav',
					'walker' => new Custom_Walker_Nav_Menu
				));
				?>
		</div>
	</header>