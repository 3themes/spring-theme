<!-- kd -->
<?php get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
  <?php _e('Sorry, but the page you were trying to view does not exist.', 'spring'); ?>
</div>

<p><?php _e('It looks like this was the result of either:', 'spring'); ?></p>
<ul>
  <li><?php _e('a mistyped address', 'spring'); ?></li>
  <li><?php _e('an out-of-date link', 'spring'); ?></li>
</ul>

<?php get_search_form(); ?>
