<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="search-input" for="input_search" for="s"><?php _x( 'Search for:', 'label' ); ?>
        <input id="input_search" type="text" placeholder="Pretraži..." value="<?php echo get_search_query(); ?>"
            name="s" id="s" />
        <button class="search-icon" type="submit"><img
                src="<?php echo get_template_directory_uri(); ?>/images/icon-search.svg" alt="Search icon" width="12"
                height="12"></button>
    </label>
</form>