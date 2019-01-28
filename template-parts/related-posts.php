<?php
/**
 *
 * Related posts
 *
 */

//Get related posts
$related_posts = new WP_Query(
    array(
        'category__in'   => wp_get_post_categories( $post->ID ),
        'posts_per_page' => '2',
        'post__not_in'   => array( $post->ID )
    )
);
wp_reset_postdata(); ?>

<?php if( $related_posts->have_posts() ) { ?>
  <section id="related-posts" class="section-border-top">
    <div class="row">
      <h3>Related posts</h3>
      <?php
      while( $related_posts->have_posts() ) {
        $related_posts->the_post();
      ?>
      <div class="columns medium-6">
        <a href="<?php echo the_permalink(); ?>"><h5 class="entry-title"><?php the_title(); ?></h5></a>
        <?php if ( has_post_thumbnail( $post->ID ) ) : ?>
          <a href="<?php echo get_permalink(); ?>" class="featured-image-link"><?php the_post_thumbnail(); ?></a>
        <?php endif; ?>
      </div>
      <?php } //end while ?>
    </div>
  </section>
<?php } //end if ?>
