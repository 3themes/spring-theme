<article <?php post_class(); ?>>
    <header>
        <h1 class="post--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </header>
    <?php if ( has_post_thumbnail() ) : ?>
        <figure class="post--thumbnail"><?php the_post_thumbnail() ?></figure>
    <?php endif; ?>
    <?php get_template_part('templates/entry-meta'); ?>
    <div class="post--summary">
        <?php the_content('<p>Continue Reading...</p>'); ?>
    </div>
    <footer class="post--metadata">
        <section class="post--metadata_categories">
            <span class="post--metadata--title"><?php _e('Categories: ', 'spring'); ?></span> <?php the_category(', '); ?>
        </section>
        <section class="post--metadata_tags">
            <?php the_tags('<span class="post--metadata--title">Tags:</span> ', ', ', ''); ?>
        </section>
    </footer>
</article>
