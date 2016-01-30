<?php


// Visual Composer Default Templates

add_action( 'vc_load_default_templates_action','my_custom_template_for_vc' ); // Hook in
 
function my_custom_template_for_vc() {
    $data               = array(); // Create new array
    $data['name']       = __( 'Custom template', 'my-text-domain' ); // Assign name for your custom template
    $data['weight']     = 0; // Weight of your template in the template list
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'images/custom_template_thumbnail.jpg', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px
    $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $data['content']    = <<<CONTENT
        [vc_row parallax="content-moving" css=".vc_custom_1453746979761{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(http://localhost/wordpress/wp-content/uploads/2016/01/black-background.jpg?id=203) !important;}" row_type="row" type="full_width" quconlayout="qu_full_width" text_align="left" quoverlay="qu_ov_def"][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][vc_column width="2/3"][vc_text_separator title="OUR STORE" title_align="separator_align_left" align="align_left" color="white" style="dashed" border_width="10" accent_color="rgba(221,0,0,0.67)" el_class="red white"][vc_row_inner row_type="row" use_as_box="" type="full_width" anchor="" text_align="left" background_color="" background_image="" border_color="" padding="" padding_top="" padding_bottom=""][vc_column_inner el_class="" width="1/1"][vc_basic_grid post_type="product" max_items="4" style="all" items_per_page="10" show_filter="" element_width="3" gap="20" orderby="date" order="DESC" filter_source="category" filter_style="default" filter_align="center" filter_color="grey" filter_size="md" button_style="rounded" button_color="blue" button_size="md" arrows_design="none" arrows_position="inside" arrows_color="blue" paging_design="radio_dots" paging_color="grey" loop="" autoplay="-1" item="525" grid_id="vc_gid:1454145219709-823f62d1-9f40-1"][vc_btn title="SEE MORE" style="outline" shape="round" color="orange" size="md" align="center" i_align="left" i_type="fontawesome" i_icon_fontawesome="fa fa-bullhorn" i_icon_openiconic="vc-oi vc-oi-dial" i_icon_typicons="typcn typcn-adjust-brightness" i_icon_entypo="entypo-icon entypo-icon-note" i_icon_linecons="vc_li vc_li-heart" link="url:http%3A%2F%2Flocalhost%2Fwordpress%2Findex.php%2Fshop%2F||" button_block="" add_icon="true" i_icon_pixelicons="vc_pixel_icon vc_pixel_icon-alert" el_class="see_events"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="" parallax="content-moving" parallax_image="" row_type="row" type="full_width" quconlayout="qu_full_width" qubackstyle="" anchor="" text_align="left" background_image="" quoverlay="qu_ov_def" background_color="" border_color="" side_padding="" padding_top="" padding_bottom="" css=".vc_custom_1453449818137{padding-top: 100px !important;padding-bottom: 100px !important;}" el_id=""][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][vc_column width="2/3"][vc_text_separator title="UPCOMING EVENTS" title_align="separator_align_left" align="align_left" border_width="10" color="white" style="dashed" el_width="" accent_color="rgba(221,0,0,0.67)" el_class="red white"][vc_column_text css_animation="right-to-left"]

[qem posts='3']

[/vc_column_text][vc_btn title="SEE ALL EVENTS" style="outline" shape="round" color="orange" size="md" align="center" i_align="left" i_type="fontawesome" i_icon_fontawesome="fa fa-bullhorn" i_icon_openiconic="vc-oi vc-oi-dial" i_icon_typicons="typcn typcn-adjust-brightness" i_icon_entypo="entypo-icon entypo-icon-note" i_icon_linecons="vc_li vc_li-heart" css_animation="" link="url:http%3A%2F%2Flocalhost%2Fwordpress%2Findex.php%2Fevents-2%2F||" button_block="" add_icon="true" i_icon_pixelicons="vc_pixel_icon vc_pixel_icon-alert" el_class="see_events"][/vc_column][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][/vc_row][vc_row parallax="content-moving" css=".vc_custom_1453399495589{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(http://localhost/wordpress/wp-content/uploads/2016/01/city_night-00000.jpg?id=311) !important;background-position: center;background-repeat: no-repeat !important;background-size: cover !important;}" el_id="crew" el_class="wow flipInY"][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][vc_column width="2/3"][vc_text_separator title="THE CREW" title_align="separator_align_left" align="align_left" color="custom" style="dashed" border_width="10" el_class="red"][vc_media_grid style="all" items_per_page="10" element_width="4" gap="35" button_style="rounded" button_color="blue" button_size="md" arrows_design="none" arrows_position="inside" arrows_color="blue" paging_design="radio_dots" paging_color="grey" loop="" autoplay="-1" item="205" grid_id="vc_gid:1453209041295-420d815a-1c93-2" include="181,182,180"][vc_column_text]
<div id="lipsum">

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempus elementum magna et malesuada. Curabitur sagittis arcu quis elit fringilla feugiat. Integer tincidunt nunc quis posuere ornare. Curabitur a lacinia nibh. Vestibulum semper mi nec eleifend interdum. Donec cursus eros lectus, ut euismod urna vulputate eget. Vivamus rutrum euismod elit. Cras malesuada fringilla dictum. Donec dapibus eget lorem id sollicitudin. Pellentesque et sapien sed sapien imperdiet tincidunt ac et lectus.

Etiam ornare, est et semper sollicitudin, urna magna ultricies libero, vitae dignissim sapien justo et orci. Quisque urna nulla, maximus a diam malesuada, tempus volutpat mauris. Sed finibus sed nibh et congue. Nam sit amet commodo elit. Sed ornare diam justo, quis cursus eros accumsan in. Pellentesque pretium, velit eu.</div>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][/vc_row][vc_row parallax="content-moving" css=".vc_custom_1453876768514{padding-top: 100px !important;padding-bottom: 100px !important;}" el_id="videos" el_class="wow fadeIn" row_type="row" type="full_width" quconlayout="qu_full_width" text_align="left" quoverlay="qu_ov_def"][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][vc_column width="2/3"][vc_text_separator title="NEW VIDEO" title_align="separator_align_left" align="align_left" color="white" style="dashed" border_width="10" accent_color="rgba(221,0,0,0.67)" el_class="red"][vc_video link="https://www.youtube.com/watch?v=WS2H73Q3WsE"][vc_column_text css_animation="top-to-bottom"]
<p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis placerat sem a condimentum. Nam molestie porttitor leo, sit amet convallis sapien aliquet pellentesque. Pellentesque ultricies nulla a lectus egestas, at aliquam nisi vehicula. Donec id tellus eu nisl vestibulum viverra at id elit. Sed et feugiat eros. Pellentesque pellentesque.</p>

[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][/vc_row][vc_row parallax="content-moving" css=".vc_custom_1453454954225{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(http://localhost/wordpress/wp-content/uploads/2016/01/Money-Background-7.jpg?id=305) !important;background-position: center;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][vc_column width="2/3"][vc_text_separator title="GET SOCIAL" title_align="separator_align_center" align="align_center" color="custom" style="dashed" border_width="10" el_class="red wow wobble"][vc_column_text css_animation=""]
<p style="text-align: center;">[tweets_slider]</p>

[/vc_column_text][vc_separator color="grey" align="align_center"][vc_column_text]
<p style="text-align: center;">[social]</p>

[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
[/vc_column_text][/vc_column][/vc_row][vc_row parallax="content-moving" css=".vc_custom_1453876869116{padding-top: 100px !important;padding-bottom: 100px !important;background-position: center;background-repeat: no-repeat !important;background-size: cover !important;}" row_type="row" type="full_width" quconlayout="qu_full_width" text_align="left" quoverlay="qu_ov_def" el_class="wow slideInDown"][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][vc_column width="2/3"][vc_text_separator title="BLOG" title_align="separator_align_left" align="align_left" color="white" style="dashed" border_width="10" accent_color="rgba(221,0,0,0.67)" el_class="red"][vc_basic_grid post_type="post" max_items="4" style="all" items_per_page="10" show_filter="" element_width="6" gap="30" orderby="date" order="DESC" filter_source="category" filter_style="default" filter_align="center" filter_color="grey" filter_size="md" button_style="rounded" button_color="blue" button_size="md" arrows_design="none" arrows_position="inside" arrows_color="blue" paging_design="radio_dots" paging_color="grey" loop="" autoplay="-1" item="422" grid_id="vc_gid:1453544160309-02b7e1ef-94f5-3"][vc_btn title="READ MORE" style="outline" shape="round" color="orange" size="md" align="center" i_align="left" i_type="fontawesome" i_icon_fontawesome="fa fa-bullhorn" i_icon_openiconic="vc-oi vc-oi-dial" i_icon_typicons="typcn typcn-adjust-brightness" i_icon_entypo="entypo-icon entypo-icon-note" i_icon_linecons="vc_li vc_li-heart" link="url:http%3A%2F%2Flocalhost%2Fwordpress%2Findex.php%2Fevents-2%2F||" button_block="" add_icon="true" i_icon_pixelicons="vc_pixel_icon vc_pixel_icon-alert" el_class="see_events"][/vc_column][vc_column width="1/6"][vc_column_text css_animation=""]
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
  
    vc_add_default_templates( $data );
}




?>