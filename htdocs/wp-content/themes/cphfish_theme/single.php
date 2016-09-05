<?php
/**
 * Template Name: Defaultpage
 * @package cphfish_theme
 */

get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); ?>
<div class="top-image" style="background-image: url('<?php if ( has_post_thumbnail() ) { echo $image[0];} ?>')"></div>

	<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_content(); ?>

</article><!-- #post-## -->






	<div class="highlighted">
		<?php
		$post_object = get_field('highlighted_related_post');
		if( $post_object ): 
			$post = $post_object;
			setup_postdata( $post ); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="highlighted_text"><?php the_content(); ?></p>
				<div class="read-more"><a href="<?php the_permalink(); ?>">Read more</a></div>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</div>

	<div class="related teaser-wrapper">

	<?php 
$post_objects = get_field('related_post');

if( $post_objects ): ?>
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
			 	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); ?>
				<a href="<?php the_permalink(); ?>" class="post-teaser" style="background-image: url('<?php if ( has_post_thumbnail() ) { echo $image[0];} ?>')">
					<div class="label">Guide</div>
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
		
				</a>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif;?>

	</div>
<?php endwhile; ?>
<?php endif; ?>





<?php get_footer();
