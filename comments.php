<?php if ( have_comments() ) : ?>
  <h3>Comments</h3>
  <ul>
    <?php wp_list_comments(); ?>
  </ul>

  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <?php previous_comments_link( '&larr; Older Comments'); ?>
    <?php next_comments_link( 'Newer Comments &rarr;'); ?>
  <?php endif; ?>

  <?php if ( ! comments_open() ) : ?>
    <p>Comments are closed.</p>
  <?php endif; ?>

<?php endif; ?>

<?php // Start Comment Form
  if ( comments_open() ) {
    comment_form();
  }
?>