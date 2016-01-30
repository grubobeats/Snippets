<?php



//Custom Grid Element

add_filter( 'vc_grid_item_predefined_templates', 'beat_market_grids' );

function beat_market_grids() {
return array(
  'none' => array(
    'name' => __( 'Basic grid: Default', 'js_composer' ),
    'template' => '[vc_gitem c_zone_position="bottom"][vc_gitem_animated_block][vc_gitem_zone_a height_mode="1-1" link="post_link" featured_image="yes"][vc_gitem_row position="top"][vc_gitem_col width="1/1"][/vc_gitem_col][/vc_gitem_row][vc_gitem_row position="middle"][vc_gitem_col width="1/2"][/vc_gitem_col][vc_gitem_col width="1/2"][/vc_gitem_col][/vc_gitem_row][vc_gitem_row position="bottom"][vc_gitem_col width="1/1"][/vc_gitem_col][/vc_gitem_row][/vc_gitem_zone_a][vc_gitem_zone_b][vc_gitem_row position="top"][vc_gitem_col width="1/1"][/vc_gitem_col][/vc_gitem_row][vc_gitem_row position="middle"][vc_gitem_col width="1/2"][/vc_gitem_col][vc_gitem_col width="1/2"][/vc_gitem_col][/vc_gitem_row][vc_gitem_row position="bottom"][vc_gitem_col width="1/1"][/vc_gitem_col][/vc_gitem_row][/vc_gitem_zone_b][/vc_gitem_animated_block][vc_gitem_zone_c css=".vc_custom_1419240516480{background-color: #f9f9f9 !important;}"][vc_gitem_row][vc_gitem_col width="1/1" featured_image=""][vc_gitem_post_title link="none" font_container="tag:h4|text_align:left" use_custom_fonts="" google_fonts="font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal"][vc_gitem_post_excerpt link="none" font_container="tag:p|text_align:left" use_custom_fonts="" google_fonts="font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal"][vc_btn link="post_link" title="' . __( 'Read more', 'js_composer' ) . '" style="flat" shape="rounded" color="juicy-pink" size="md" align="left"][/vc_gitem_col][/vc_gitem_row][/vc_gitem_zone_c][/vc_gitem]'
  ),
  'basicGrid_ScaleInWithRotation' => array(
    'name' => __( 'Basic grid: Scale in with rotation', 'js_composer' ),
    'template' => '[vc_gitem c_zone_position="bottom"][vc_gitem_animated_block animation="scaleRotateIn"][vc_gitem_zone_a height_mode="1-1" link="post_link" featured_image="yes"][vc_gitem_row position="top"][vc_gitem_col width="1/1"][/vc_gitem_col][/vc_gitem_row][vc_gitem_row position="middle"][vc_gitem_col width="1/2"][/vc_gitem_col][vc_gitem_col width="1/2"][/vc_gitem_col][/vc_gitem_row][vc_gitem_row position="bottom"][vc_gitem_col width="1/1"][/vc_gitem_col][/vc_gitem_row][/vc_gitem_zone_a][vc_gitem_zone_b link="post_link" featured_image="" css=".vc_custom_1419240793832{background-color: rgba(0,0,0,0.3) !important;*background-color: rgb(0,0,0) !important;}"][vc_gitem_row position="top"][vc_gitem_col width="1/1"][/vc_gitem_col][/vc_gitem_row][vc_gitem_row position="middle"][vc_gitem_col width="1/1"][/vc_gitem_col][/vc_gitem_row][vc_gitem_row position="bottom"][vc_gitem_col width="1/1"][/vc_gitem_col][/vc_gitem_row][/vc_gitem_zone_b][/vc_gitem_animated_block][vc_gitem_zone_c css=".vc_custom_1419240595465{background-color: #f9f9f9 !important;}"][vc_gitem_row][vc_gitem_col width="1/1" featured_image=""][vc_gitem_post_title link="none" font_container="tag:h4|text_align:left" use_custom_fonts="" google_fonts="font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal"][vc_gitem_post_excerpt link="none" font_container="tag:p|text_align:left" use_custom_fonts="" google_fonts="font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal"][vc_btn link="post_link" title="' . __( 'Read more', 'js_composer' ) . '" style="flat" shape="rounded" color="juicy-pink" size="md" align="left"][/vc_gitem_col][/vc_gitem_row][/vc_gitem_zone_c][/vc_gitem]'
  ),
);
}


?>