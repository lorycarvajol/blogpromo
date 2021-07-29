<?php
//search form for wordpress 
function blogpromo_searchform()
{
    global $wp_query;
    $search = get_search_query();
    $search = esc_attr($search);

    $searchform = '<form role="search" method="get" id="searchform" class="searchform" action="' . get_option('home') . '">
		<input type="text" value="' . $search . '" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="' . __('Search', 'blogpromo') . '" />
		</form>';
    echo $searchform;
}
?>
<?php
function my_search_form($form)
{
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url('/') . '" >
    <div>
    <input type="text" placeholder="Chercher..." value="' . get_search_query() . '" name="s" id="s" />
   
   <button type="submit" id="searchsubmit" class="glyphicon glyphicon-search"></button>
    </div>
    </form>';
    return $form;
}
add_filter('get_search_form', 'my_search_form');

// search filter
function my_search_filter($query)
{
    if (!is_admin()) {
        if ($query->is_search) {
            $query->set('post_type', 'post'); //pour exclure les pages
            $query->set('category__not_in', array(37));
        }
        return $query;
    }
}
add_filter('pre_get_posts', 'my_search_filter');
