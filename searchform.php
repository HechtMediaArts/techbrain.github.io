<form role="search" method="get" class="search-form" action="<?php echo home_url( '/suchergebnisse/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Suchbegriff eingeben...', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="q"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>