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
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
			<a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<?php endif; ?>
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<strong><a href="<?php echo the_permalink(); ?>">Read more &raquo;</a></strong>
</div>
