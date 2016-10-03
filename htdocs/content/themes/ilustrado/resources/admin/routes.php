<?php

add_action('init', function()
{
    // Create the query var use for custom page.
    add_rewrite_tag('%ir_page%', '([^&]+)');

    add_rewrite_rule('([^/]+)/?$','index.php?ir_page=$matches[1]','top');
 });

function is_custom_page( $var, $cond ) {
  $query_var = get_query_var( $var );
  if ( $query_var == $cond ) {
      return TRUE;
  }
  if ( $query_var == '' ) {
      // Possibly checked before get_query_var function can work.
      global $wp;
      if ( isset( $wp->query_vars[$var] ) && $wp->query_vars[$var] == $cond ) {
          return TRUE;
      }
  }
  return FALSE;
}

function is_news()
{
    $return = is_custom_page('custom_page', 'news');
    return $return;
}

add_filter('themosisRouteConditions', function($conds)
{
    $conds['news'] = 'is_news';

    return $conds; // Always return an associative array.
});

