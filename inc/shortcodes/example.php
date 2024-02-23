<?php

add_shortcode('example_shortcode', 'theme_example_shortcode');

function theme_example_shortcode($atts)
{
	$a = shortcode_atts([
		'href' => '#', // Link of the button
		'title' => '', // The title of the section
		'bullet1' => '', // Text of the 1st bullet
		'bullet2' => '', // Text of the 2nd bullet
		'bullet3' => '', // Text of the 3d bullet
		'cta' => '' // Text of the section's button
	], $atts);

	ob_start();

?>

	<div class="example-shortcode">

	</div>

<?php

	$output = ob_get_clean();

	wp_reset_postdata();

	return $output;
}
