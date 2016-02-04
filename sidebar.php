<?php
   echo "sidebar<br>";

   // primary sidebar
   if (is_active_sidebar('widget_sidebar_1'))
      dynamic_sidebar('widget_sidebar_1');

