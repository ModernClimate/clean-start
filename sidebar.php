<ul>
  <?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?>
    <li>
      <?php get_search_form(); ?>
    </li>
    <li>
      <h4>Archives</h4>
      <ul>
        <?php wp_get_archives( 'type=monthly' ); ?>
      </ul>
    </li>
  <?php endif; ?>
</ul>