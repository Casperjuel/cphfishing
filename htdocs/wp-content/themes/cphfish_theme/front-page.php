<?php
/**
 * Template Name: Frontpage
 * @package cphfish_theme
 */


get_header(); ?>


<main class="frontpage">

<section class="frontpage-top">
	<div class="inner">
		<div class="left">
			<div class="frontpage-featured"></div>
		</div>
		<div class="right">
			<div class="perm-teaser"></div>
			<div class="perm-teaser"></div>
		</div>
	</div>
</section>

<section class="frontpage-articles">
	<div class="inner">
	<h2 class="section-title">Nyeste Artikler<a class="see-all" href="/artikler">Se alle</a></h2>
		<?php query_posts('category_name=artikler&showposts=4'); ?>
		<div class="teaser-wrapper">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="post-teaser">
			<?php the_post_thumbnail() ?>
				<div class="label">Artikel</div>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
			</a>
		<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>

<section class="frontpage-guides">
	<div class="inner">
	<h2 class="section-title">Nyeste Guides<a class="see-all" href="/guides">Se alle</a></h2>
		<?php query_posts('category_name=guides&showposts=4'); ?>
		<div class="teaser-wrapper">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<a href="<?php the_permalink(); ?>" class="post-teaser">
			<?php the_post_thumbnail() ?>				<div class="label">Guide</div>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
			</a>
		<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>

<section class="frontpage-spots">
	<div class="inner">
	<h2 class="section-title">Fiskespots</h2>
	</div>
</section><?php
get_footer();
