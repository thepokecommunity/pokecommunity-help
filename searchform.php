<?php
	echo '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
                <label>
                    <span class="screen-reader-text">' . _x( 'Search for:', 'label' ) . '</span>
                    <input type="search" class="search-field form-control" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />
                </label>
                <input type="submit" class="search-submit btn btn-primary" value="'. esc_attr_x( 'Search', 'submit button' ) .'" />
</form>';
?>