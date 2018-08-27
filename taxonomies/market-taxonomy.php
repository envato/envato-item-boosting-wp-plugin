<?php

function envato_boosting_marketplace_taxonomy() {
  
  $labels =  array(
      'label' => __( 'Marketplace', null, 'envato' ),
      'name'  => __('Marketplaces', null, 'envato'),
      'singular_name'     => _x( 'Marketplace', null, 'envato' ),
      'plural_name'     => _x( 'Marketplaces', null, 'envato' ),
      'add_new_item'      => __( 'Add New Marketplace', 'envato' ),
      'new_item_name'     => __( 'New Marketplace Name', 'envato' ),
      'menu_name'         => __( 'Marketplace', 'envato' ),
    );

  $args = array(
    'hierarchical'      => true,
    'labels' =>         $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'marketplace' ),
    'show_in_rest'      => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'marketplace',
    'graphql_plural_name' => 'marketplaces',
  );

  register_taxonomy(
    'marketplace',
    array('post_type_promotion', 'post_type_highlight'),
    $args
  );
}
add_action( 'init', 'envato_boosting_marketplace_taxonomy', 0 );
