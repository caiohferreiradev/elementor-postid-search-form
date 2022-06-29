<?php

 /*
 * Action for post ID
 */ 

 
add_action( 'pre_get_posts', 'searchById' );

/**
 * @param WP_Query $query
 */

function searchById($query) {

    $id = filter_input(INPUT_GET, 's');

    if (!is_admin() && $query->is_search && is_numeric($id)) {

        $query->set('s', '');

        $query->set('post__in', [ (int)$id ]);
    }
}

require_once 'custom-elementor.php';
