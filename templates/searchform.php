<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url('/'); ?>">
    <div class="input-group">
        <label for="txtSearch"><?php _e('Search for:', 'spring'); ?></label>
        <input id="txtSearch" type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'spring'); ?> <?php bloginfo('name'); ?>">
        <button type="submit" class="search-button"><?php _e('Search', 'spring'); ?></button>
    </div>
</form>
