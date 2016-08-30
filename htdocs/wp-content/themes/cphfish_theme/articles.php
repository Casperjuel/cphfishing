<?php
/**
 * Template Name: Articles
 * @package cphfish_theme
 */


get_header(); ?>


<main class="articles">
	<?php the_title(); ?>

	<div class="inner">
		<?php query_posts('category_name=artikler'); ?>
		<div class="teaser-wrapper">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<div class="post-teaser" style="background-image: url('<?php echo $image[0]; ?>')">
				<div class="label">Artikel</div>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
			</div>
		<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>

<?php
get_footer();
