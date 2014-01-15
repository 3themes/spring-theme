<?php
if (post_password_required()) {
    return;
}

if (have_comments()) : ?>
    <section class="comments" id="comments">
        <h3 class="comments--title"><?php printf(_n('One Response to &ldquo;%2$s&rdquo;', '%1$s Responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'spring'), number_format_i18n(get_comments_number()), get_the_title()); ?></h3>

        <ol class="comments--list">
            <?php wp_list_comments(array('walker' => new spring_Walker_Comment)); ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav>
                <ul class="comments--pager pager">
                    <?php if (get_previous_comments_link()) : ?>
                        <li class="pager--previous"><?php previous_comments_link(__('&larr; Older comments', 'spring')); ?></li>
                    <?php endif; ?>
                    <?php if (get_next_comments_link()) : ?>
                        <li class="pager--next"><?php next_comments_link(__('Newer comments &rarr;', 'spring')); ?></li>
                    <?php endif; ?>
                </ul>
            </nav>
        <?php endif; ?>

        <?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
            <div class="alert alert-warning">
                <?php _e('Comments are closed.', 'spring'); ?>
            </div>
        <?php endif; ?>
    </section><!-- /#comments -->
<?php endif; ?>

<?php if (!have_comments() && !comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
    <section id="comments">
        <div class="alert alert-warning">
            <?php _e('Comments are closed.', 'spring'); ?>
        </div>
    </section><!-- /#comments -->
<?php endif; ?>

<?php if (comments_open()) : ?>
    <section class="comments--respond" id="respond">
        <h3><?php comment_form_title(__('Leave a Reply', 'spring'), __('Leave a Reply to %s', 'spring')); ?></h3>

        <p class="comments--cancel-reply"><?php cancel_comment_reply_link(); ?></p>
        <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
            <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'spring'), wp_login_url(get_permalink())); ?></p>
        <?php else : ?>
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                <?php if (is_user_logged_in()) : ?>
                    <p>
                        <?php printf(__('Logged in as <a href="%s/wp-admin/profile.php">%s</a>.', 'spring'), get_option('siteurl'), $user_identity); ?>
                        <a href="<?php echo wp_logout_url(get_permalink()); ?>"
                           title="<?php __('Log out of this account', 'spring'); ?>"><?php _e('Log out &raquo;', 'spring'); ?></a>
                    </p>
                <?php else : ?>
                    <div class="comments--form-row form-row">
                        <label for="commentsAuthor"><?php _e('Name', 'spring');
                            if ($req) _e(' (required)', 'spring'); ?></label>
                        <input type="text" placeholder="Your name..." class="textbox" name="author" id="commentsAuthor"
                               value="<?php echo esc_attr($comment_author); ?>"
                               size="22" <?php if ($req) echo 'aria-required="true"'; ?>>
                    </div>
                    <div class="comments--form-row form-row">
                        <label for="commentsEmail"><?php _e('Email (will not be published)', 'spring');
                            if ($req) _e(' (required)', 'spring'); ?></label>
                        <input type="email" placeholder="Your email address..." class="textbox" name="email"
                               id="commentsEmail" value="<?php echo esc_attr($comment_author_email); ?>"
                               size="22" <?php if ($req) echo 'aria-required="true"'; ?>>
                    </div>
                    <div class="comments--form-row form-row">
                        <label for="commentsUrl"><?php _e('Website', 'spring'); ?></label>
                        <input type="url" placeholder="Your homepage..." class="textbox" name="url" id="commentsUrl"
                               value="<?php echo esc_attr($comment_author_url); ?>" size="22">
                    </div>
                <?php endif; ?>
                <div class="comments--form-row form-row">
                    <label for="commentsComment"><?php _e('Comment', 'spring'); ?></label>
                    <textarea name="comment" placeholder="The text of your comment..." id="commentsComment"
                              class="form-control" rows="5" aria-required="true"></textarea>
                </div>
                <div class="button-wrapper">
                    <input name="submit" class="button" type="submit" id="submit"
                           value="<?php _e('Submit Comment', 'spring'); ?>">
                </div>
                <?php comment_id_fields(); ?>
                <?php do_action('comment_form', $post->ID); ?>
            </form>
        <?php endif; ?>
    </section><!-- /#respond -->
<?php endif; ?>
