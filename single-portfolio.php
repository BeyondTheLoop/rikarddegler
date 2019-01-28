<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part('template-parts/breadcrumbs'); //Breadcrumbs ?>

<div id="portfolio-single-post" role="main">

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('row'); ?> id="post-<?php the_ID(); ?>">
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">
			<div class="columns large-9 left-column">
				<?php
				$images = get_field('single_portfolio_gallery');
				$count = 0;
				if( $images ): ?>
					<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
						<ul class="orbit-container">
			        <?php foreach( $images as $image ): ?>
		            <li class="orbit-slide is-active">
									<figure class="orbit-figure">
			              <a href="<?php echo $image['url']; ?>" target="_blank"><img class="orbit-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
										<figcaption class="orbit-caption"><?php echo $image['caption']; ?></figcaption>
									</figure>
		            </li>
								<?php $count++; ?>
			        <?php endforeach; ?>
				    </ul>
						<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span> &#9664;&#xFE0E;</button>
						<button class="orbit-next"><span class="show-for-sr">Next Slide</span> &#9654;&#xFE0E;</button>
						<?php $a = 0; ?>
						<nav class="orbit-bullets">
							<?php while ($a < $count) : ?>
								<?php if ($a == 0) : ?>
									<button class="is-active" data-slide="<?php echo $a; ?>"><span class="show-for-sr"><?php echo $a; ?></span><span class="show-for-sr">Current Slide</span></button>
								<?php else : ?>
									<button data-slide="<?php echo $a; ?>"><span class="show-for-sr"><?php echo $a; ?></span></button>
								<?php endif; ?>
								<?php $a++; ?>
							<?php endwhile; ?>
						</nav>
					</div>
				<?php endif; ?>
			</div><!-- End left block -->
			<div class="columns large-3 right-column">
		    <h2 class="work-feature-block-header"><?php the_title(); ?></h2>
		    <?php the_content(); ?>
		  </div><!-- End right block -->
		</div>

		<?php $video = get_field('video_url'); ?>

		<?php if( $video ): //Check if has video ?>
			<div class="columns large-9 left-column-video">
				<div class="responsive-embed">
					<iframe width="1024" height="315" src="<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div><!-- End video left block -->
			<div class="columns large-3 right-column-video">
				<h2 class="work-feature-block-header">Video</h2>
			</div><!-- End video right block -->
		<?php endif; //End check if video ?>

		<div class="small-12 columns">
			<a href="<?php echo get_permalink(380); ?>" class="button">&laquo; All portfolio items</a>
		</div>
	</article>

<?php endwhile; ?>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
