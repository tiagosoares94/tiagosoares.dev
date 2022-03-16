<?php

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

add_action('init', 'type_post_projetos');
function type_post_projetos() {
  $labels = array(
    'name' => _x('Projetos', 'post type general name'),
    'singular_name' => _x('Projetos', 'post type singular name'),
    'add_new' => _x('Novo Post', 'label'),
    'add_new_item' => _x('Adicionar Novo Projeto', 'label'),
    'edit_item' => _x('Editar Projeto', 'label')
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_position' => 2,
    'supports' => array('title', 'editor', 'thumbnail')
  );
  register_post_type('projetos', $args);
  flush_rewrite_rules();
}