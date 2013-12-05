<?php get_template_part('templates/header'); ?>
<div class="wrapper" role="document">
  <div class="content row">
    <main class="main <?php echo spring_main_class(); ?>" role="main">
      <?php include spring_template_path(); ?>
    </main><!-- /.main -->
    <?php if (spring_display_sidebar()) : ?>
      <aside class="sidebar <?php echo spring_sidebar_class(); ?>" role="complementary">
        <?php include spring_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>
  </div><!-- /.content -->
</div><!-- /.wrap -->

<?php get_template_part('templates/footer'); ?>

</body>
</html>
