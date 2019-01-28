<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<div class="entry-content row">
		<div class="columns medium-8">
			<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
				<a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		</div>
		<div class="columns medium-4">
			<h2 class="work-feature-block-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_content(); ?></p>
			<footer>
				<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
				<strong><a href="<?php echo the_permalink(); ?>" class="button">Read more &raquo;</a></strong>
			</footer>
		</div>
	</div>
</div>
