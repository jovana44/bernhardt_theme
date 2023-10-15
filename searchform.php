<!-- search -->
<!-- <div class="search-container">
		<form class="search" method="get" action="<?php //echo home_url(); ?>" role="search">
			<input class="search-input" type="search" name="s" placeholder="<?php //_e( 'To search, type and hit enter.', 'batheme' ); ?>">
			<button class="search-submit" type="submit" role="button"><i class="fa fa-search"></i></button>
		</form>
</div> -->

<div class="search-wrap">
   <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <label class="search-input" for="inpt_search" for="s"><?php _x( 'Search for:', 'label' ); ?>
         <input type="text" placeholder="Pretraži..." value="<?php echo get_search_query(); ?>" name="s" id="s" />
         <button class="search-icon" type="submit" id="searchsubmit"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-search.svg"
                                alt="Search icon" width="12" height="12"><span>Search</span></button>
      </label>
   </form>
</div>
<!-- /search -->
