<?php echo get_avatar($comment, $size = '64'); ?>
<div class="comment--body">
    <header class="comment--name">
        <?php echo get_comment_author_link(); ?>
    </header>
    <section class="comment--byline">
        <time datetime="<?php echo comment_date('c'); ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>"><?php printf(__('%1$s', 'spring'), get_comment_date(),  get_comment_time()); ?></a></time>
    </section>

    <?php if ($comment->comment_approved == '0') : ?>
        <section class="comment--awaiting-moderation alert alert-info">
            <?php _e('Your comment is awaiting moderation.', 'spring'); ?>
        </section>
    <?php endif; ?>

    <main class="comment--text">
        <?php comment_text(); ?>
        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?> &#8226; <?php edit_comment_link(__('(Edit)', 'spring'), '', ''); ?>
    </main>
</div>