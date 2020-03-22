<?php
register_rest_route(
    'octane/v1',
    '/loans/all',
array(
    'methods' => 'GET',
    'callback' => 'get_all_loans'
)
);

function get_all_loans(){

    $query = new WP_Query(
      array(
        'post_type' => 'loans',
        'posts_per_page'   => -1
      )
    );
    
      $loans = [];
    
    if ($query->have_posts()){
  
      while ($query->have_posts()){
        $query->the_post();
  
        $item = [];
  
        $item['borrower_name'] = get_field('borrower_name') ;
        $item['loan_id'] = get_field('loan_id') ;
        $item['lock'] = get_field('lock') ;
        $item['todos'] = get_field('todos') ;
        $item['status'] = get_field('status') ;
        $item['closing_date'] = get_field('closing_date') ;
  
        $loans[] = $item;
      }
  
    }

    return $loans;
}