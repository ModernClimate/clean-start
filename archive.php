<?php get_header(); ?>

<h1>
  <?php if( is_author() ): ?>
    Author: <?php echo $author_name ?>
  <?php elseif( is_category() ): ?>
    Category: <?php single_cat_title(); ?>
  <?php elseif( is_tag() ): ?>
    Tag: <?php single_tag_title(); ?>
  <?php elseif( is_year() ): ?>
    Archive for <?php the_time('Y'); ?>
  <?php elseif( is_month() ): ?>
    Archive for <?php the_time('F Y'); ?>
  <?php else: ?>
    Archive
  <?php endif; ?>
</h1>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php $author_name = get_the_author_meta('nickname'); ?>
    <h2>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php the_excerpt(); ?>
  <?php endwhile; wp_reset_query(); ?>
<?php else: ?>
  <h2>No posts found</h2>
<?php endif; ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
  <div class="prev">
    <?php next_posts_link( __( '&larr; Older posts' ) ); ?>
  </div>
  <div class="next">
    <?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
  </div>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>