<?php

/*

	Hook that disables top Wordpress Admin bar menu in front-end

*/

function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );

?>