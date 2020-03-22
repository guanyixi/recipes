<?php
function loan_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Loans', 'textdomain' ),
        'menu_icon' => 'dashicons-welcome-write-blog',
    );
    register_post_type( 'loans', $args );
}
add_action( 'init', 'loan_post_type' );