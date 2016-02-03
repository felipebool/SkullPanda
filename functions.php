<?php
   // includes
   include('inc/menus.php');

   // actions
   add_action('after_setup_theme', 'register_menu');

   // filters
   add_filter('pre_get_posts','SearchFilter');


   // to avoid pages in search results
   function SearchFilter($query) {
      if ($query->is_search) {
         $query->set('post_type', 'post');
      }
      return $query;
   }
?>

