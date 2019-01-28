<?php
/*
Template Name: Portfolio index
*/


get_header(); ?>

<!-- BREADCRUMBS -->
<?php get_template_part('template-parts/breadcrumbs'); ?>
<!-- BREADCRUMBS -->

<div id="portfolio" role="main">
	<?php
	$loop = new WP_Query( array(
	    'post_type' => 'Portfolio',
	    'posts_per_page' => -1
	  )
	);
	$count = '1';
	?>

	<?php if ( $loop->have_posts() ) : ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); //start the loop ?>
			<?php if (!wp_is_mobile()) : ?>
				<?php if ($count % 2 == 0) : ?>
					<?php get_template_part( 'template-parts/content', 'portfolio-right' ); //Get template with right aligned image ?>
				<?php else: ?>
					<?php get_template_part( 'template-parts/content', 'portfolio-left' ); //Get template with left aligned image ?>
				<?php endif; ?>
				<?php $count++; ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'portfolio-left' ); //Get template with left aligned image ?>
			<?php endif; ?>
		<?php endwhile; wp_reset_query(); //end while and reset query ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>
</div>

<?php get_footer();
