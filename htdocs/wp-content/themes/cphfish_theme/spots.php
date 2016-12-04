<?php
/**
 * Template Name: Spots
 * @package cphfish_theme
 */

get_header(); ?>

<main class="Guides">
	<?php the_title(); ?>
	<div class="inner">


	<?php the_content();?>
  </div>
    <div class="fishingspots">
      <div class="teaser-wrapper">
        <?php
        $args = array( 'posts_per_page' => -1, 'category' => 16 );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <a href="<?php the_permalink(); ?>" class="post-teaser" style="background-image: url('<?php echo $image[0]; ?>')">
            <div class="label">Fiskespot</div>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
        
          </a>
        <?php endforeach; wp_reset_postdata();?>

      </div>

    </div>
<?php get_footer();
