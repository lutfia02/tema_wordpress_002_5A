
<form role="search" method="get" class="search-form"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <label class="search-label" for="silfiedu-search">
        <span class="screen-reader-text">Cari artikel:</span>
        <input
            type="search"
            id="silfiedu-search"
            class="search-field"
            placeholder="Cari artikel..."
            value="<?php echo esc_attr( get_search_query() ); ?>"
            name="s"
            required
        >
    </label>

    <button type="submit" class="search-submit">
        Cari
    </button>

</form>
