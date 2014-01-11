<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header >
            <h1 class="post--title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="post--content">
            <?php the_content(); ?>
        </div>
        <footer class="post--metadata">
            <section class="post--metadata_categories">
                <span class="post--metadata--title"><?php _e('Categories: ', 'spring'); ?></span> <?php the_category(', '); ?>
            </section>
            <section class="post--metadata_tags">
                <?php the_tags('<span class="post--metadata--title">Tags:</span> ', ', ', ''); ?>
            </section>
        </footer>
        <?php wp_link_pages(array('before' => '<nav class="nav-pager"><p>' . __('Pages:', 'spring'), 'after' => '</p></nav>')); ?>
        <?php comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>
