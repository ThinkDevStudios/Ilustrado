<?php

/**
 * application.php - Write your custom code below.
 */

PostType::make('testimonials', 'Testimonials', 'Testimonial')->set([
    'public'        => true,
    'menu_position' => 20,
    'supports'      => ['title'],
    'rewrite'       => false,
    'query_var'     => false
]);