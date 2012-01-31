<?php get_header(); ?>

<h1><?php printf( __( 'Search Results for: %s' ), '' . get_search_query() . '' ); ?></h1>
<?php if ( have_posts() ) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php the_excerpt(); ?>
  <?php endwhile; ?>
<?php else: ?>
  <h2>Nothing Found</h2>
  <p>
    Sorry, but nothing matched your search criteria. Please try again with some different keywords.
  </p>
<?php endif; ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
  <div class="prev">
    <?php previous_posts_link( __( 'Prev' ) ); ?>
  </div>
  <div class="next">
    <?php next_posts_link( __( 'Next' ) ); ?>
  </div>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
