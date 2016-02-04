<?php
   // includes
   include('inc/menus.php');
   include('inc/widgets.php');

   // ACTIONS ------------------------------------------------------------------
   // menu
   add_action('after_setup_theme', 'register_menu');

   // widget
   add_action('widgets_init', 'ssqt_widgets_init', 10, 4);
   do_action('widgets_init', 'Sidebar', 'widget_sidebar_1', '<div id="widget">', '</div>');


   // FILTERS ------------------------------------------------------------------
   add_filter('pre_get_posts','SearchFilter'); 

   // to avoid pages in search results, only posts
   function SearchFilter($query) {
      if ($query->is_search) {
         $query->set('post_type', 'post');
      }
      return $query;
   }

