<?php
add_theme_support('html5', array('search-form'));
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support(
  'post-formats',
  array(
    'link',
    'gallery',
    'image',
  )
);

if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}

function enregistre_mon_menu()
{
  register_nav_menu('menu_principal', __('Menu principal'));
}
add_action('init', 'enregistre_mon_menu');

function register_student_post_types()
{

  // CPT Apprenant
  $labels = array(
    'name' => 'Apprenants',
    'all_items' => 'Tous les apprenants',
    'view_item' => 'Voir les apprenants',
    'singular_name' => 'Apprenant',
    'add_new' => 'Ajouter un apprenant',
    'edit_item' => 'Modifier un apprenant',
    'menu_name' => 'Apprenant'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('category', 'post_tag'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-users',
  );

  register_post_type('apprenant', $args);
}
add_action('init', 'register_student_post_types'); // Le hook init lance la fonction

function register_presentation_post_types()
{

  // CPT Presentation
  $labels = array(
    'name' => 'Presentations',
    'all_items' => 'Toutes les presentations',
    'view_item' => 'Voir les presentations',
    'singular_name' => 'Presentation',
    'add_new' => 'Ajouter une presentation',
    'edit_item' => 'Modifier une presentation',
    'menu_name' => 'Presentation'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('category', 'post_tag'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-page',
  );

  register_post_type('presentation', $args);
}
add_action('init', 'register_presentation_post_types'); // Le hook init lance la fonction

// Fonction limit excerpt
function custom_excerpt_length($length)
{
  return 10;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);



add_shortcode('ajaxloadmoreblogdemo', 'ajaxloadmoreblogdemo');
function ajaxloadmoreblogdemo($atts, $content = null)
{
  ob_start();
  $atts = shortcode_atts(
    array(
      'post_type' => 'post',
      'initial_posts' => '4',
      'loadmore_posts' => '2',
      'category_id' => ''
    ),
    $atts,
  );
  $additonalArr = array();
  $additonalArr['appendBtn'] = true;
  $additonalArr["offset"] = 0; ?>
  <div class="dcsAllPostsWrapper">
    <input type="hidden" name="initialPost" value="<?= $atts['initial_posts'] ?>">
    <input type="hidden" name="dcsPostType" value="<?= $atts['post_type'] ?>">
    <input type="hidden" name="offset" value="0">
    <input type="hidden" name="dcsloadMorePosts" value="<?= $atts['loadmore_posts'] ?>">
    <div class="dcsDemoWrapper container-articles">
      <?php dcsGetPostsFtn($atts, $additonalArr); ?>
    </div>
  </div>
  <?php
  return ob_get_clean();
}

function dcsGetPostsFtn($atts, $additonalArr = array())
{
  $args = array(
    'post_type' => $atts['post_type'],
    'posts_per_page' => $atts['initial_posts'],
    'offset' => $additonalArr["offset"],
  );
  if (!empty($atts['category_id']) && $atts['category_id']!= 3 ) {
    $args = 'cat= ' . $atts['category_id'] . '';
    $the_query = new WP_Query($args);
    while ($the_query->have_posts()) {
      $the_query->the_post(); ?>
      <article class="accueil-articles loadMoreRepeat">
        <div class="article innerWrap">
          <?php the_post_thumbnail('medium'); ?>

          <div class="description">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
          </div>

          <div class="desc-btn">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>./assets/Arrow.png" width="20px" height="30px" alt="" /></a>
          </div>
        </div>
      </article>
      <?php
    }
    wp_reset_postdata();
  } else {
    $the_query = new WP_Query($args);
    $havePosts = true;
    if ($the_query->have_posts()) {
      while ($the_query->have_posts()) {
        $the_query->the_post(); ?>
        <article class="accueil-articles loadMoreRepeat">
          <div class="article innerWrap">
            <?php the_post_thumbnail('medium'); ?>

            <div class="description">
              <h2><?php the_title(); ?></h2>
              <p><?php the_excerpt(); ?></p>
            </div>

            <div class="desc-btn">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>./assets/Arrow.png" width="20px" height="30px" alt="" /></a>
            </div>
          </div>
        </article>
      <?php
      }
    } else {
      $havePosts = false;
    }
    wp_reset_postdata();
    if ($havePosts && $additonalArr['appendBtn']) { ?>
      <div class="btnLoadmoreWrapper">
        <a href="javascript:void(0);" class="btn btn-primary dcsLoadMorePostsbtn">Charger plus d'articles</a>
      </div>

      <!-- loader for ajax -->
      <div class="dcsLoaderImg" style="display: none;">
        <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve" style="
    color: #ff7361;">
          <path fill="#ff7361" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
            <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite"></animateTransform>
          </path>
        </svg>
      </div>

      <p class="noMorePostsFound" style="display: none;">On touche le fond</p>
<?php
    }
  }
}



function dcsEnqueue_scripts()
{
  wp_enqueue_script('dcsLoadMorePostsScript', get_template_directory_uri() . '/js/loadmore.js', array('jquery'), '20131205', true);
  wp_localize_script(
    'dcsLoadMorePostsScript',
    'dcs_frontend_ajax_object',
    array(
      'ajaxurl' => admin_url('admin-ajax.php')
    )
  );
}
add_action('wp_enqueue_scripts', 'dcsEnqueue_scripts');

add_action("wp_ajax_dcsAjaxLoadMorePostsAjaxReq", "dcsAjaxLoadMorePostsAjaxReq");
add_action("wp_ajax_nopriv_dcsAjaxLoadMorePostsAjaxReq", "dcsAjaxLoadMorePostsAjaxReq");
function dcsAjaxLoadMorePostsAjaxReq()
{
  extract($_POST);
  $additonalArr = array();
  $additonalArr['appendBtn'] = false;
  $additonalArr["offset"] = $offset;
  $atts["initial_posts"] = $dcsloadMorePosts;
  $atts["post_type"] = $postType;
  dcsGetPostsFtn($atts, $additonalArr);
  die();
}

add_filter('allowed_block_types', function ($block_types, $post) {
  $allowed = [
    'core/paragraph',
    'core/file',
  ];
  if ($post->post_type == 'presentation') {
    return $allowed;
  }
  return $block_types;
}, 10, 2);
// add_action('wp_insert_post', 'wpc_champs_personnalises_defaut');
// function wpc_champs_personnalises_defaut($post_id) {
// 	if ( $_GET['post_type'] != 'page' ) {
// 		add_post_meta($post_id, 'image', '', true);
// 		add_post_meta($post_id, 'custom_field_2', '', true);
// 	}
// 	return true;
// }
add_filter('acf/settings/remove_wp_meta_box', '__return_false');