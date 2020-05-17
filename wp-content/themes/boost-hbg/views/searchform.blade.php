<?php
    global $searchFormNode;
    $searchFormNode = ($searchFormNode) ? $searchFormNode + 1 : 1;
?>
<div class="search" itemscope itemtype="http://schema.org/WebSite">
    <meta itemprop="url" content="{{ home_url() }}">

    <form
        method="get"
        action="{{ apply_filters('Municipio/search_form/action', home_url()) }}"
        itemscope
        itemprop="potentialAction"
        itemtype="http://schema.org/SearchAction">
        <meta itemprop="target" content="{{ home_url('?s=') }}{search_term_string}">

        <div class="input-group input-group-lg">
            <input
                class="form-control form-control-lg"
                id="searchkeyword-{{ $searchFormNode }}"
                type="search"
                itemprop="query-input"
                autocomplete="off"
                name="s"
                required
                placeholder="{{
                    get_field('search_placeholder_text', 'option') ?
                        get_field('search_placeholder_text', 'option') :
                        'What are you looking for?'
                }}"
                value="<?php echo (!empty(get_search_query())) ? get_search_query() : ''; ?>">
            <span class="input-group-addon-btn">
                <input
                    class="btn btn-primary btn-lg"
                    type="submit"
                    value="{{
                        get_field('search_button_text', 'option') ?
                            get_field('search_button_text', 'option') :
                            __('Search', 'municipio')
                    }}">
            </span>
        </div>
    </form>
</div>
