<?php
/**
 * Template Name: Species
 * @package cphfish_theme
 */


get_header(); ?>


<main class="species">
	<?php the_title(); ?>
	<div class="inner">
		<div class="teaser-wrapper">
			<?php
			$args = array( 'posts_per_page' => -1, 'category' => 15 );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			
			 	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<a href="<?php the_permalink(); ?>" class="post-teaser" style="background-image: url('<?php echo $image[0]; ?>')">
					<div class="label">Fiskeart</div>
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
			
				</a>
			<?php endforeach; wp_reset_postdata();?>
		</div>
	</div>

<?php get_footer();
