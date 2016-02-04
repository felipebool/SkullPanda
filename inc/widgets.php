<?php
   function ssqt_widgets_init($name, $id, $bw, $aw) {
      register_sidebar(array(
         'name'          => $name,
         'id'            => $id,
         'before_widget' => $bw,
         'after_widget'  => $aw 
      )); 
   }

