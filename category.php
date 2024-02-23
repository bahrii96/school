<?php
get_header();
?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$category = get_queried_object();

$postsCategories = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 5,
  'post_status' => 'publish',
  'category__in' => array($category->term_id),
  'paged' => $paged,
));
?>

<section class="hero-services">
  <div class="container">
    <div class="hero-services__content">

    </div>
  </div>
</section>
<section class="entry-page blog-index-page">
  <div class="container">
    <h1><?php echo $category->name; ?></h1>
    <div class="blog-index-page__wrapper">
      <?php {
        if ($postsCategories->have_posts()) {
          while ($postsCategories->have_posts()) : $postsCategories->the_post(); ?>
            <?php get_template_part('post-templates/post-item-meta', get_post_format()); ?>
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
      <div class="blog-index-page__pagination">
        <?php pagination_bar($postsCategories); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>