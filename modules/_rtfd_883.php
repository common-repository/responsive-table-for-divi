<?php
if(!class_exists("ET_Builder_Module_DP_DMB_Module_883")){

    class ET_Builder_Module_DP_DMB_Module_883 extends ET_Builder_Module {        
        
        public $slug = "et_pb_dp_dmb_module_883";
         public $vb_support = "off";    
        
        public function init() {
            $this->name = "SS Responsive Table" ;
            
            
            $this->main_css_element = "%%order_class%%";
        }

        public function get_fields() {
            $fields = array(
                
                    "to_responsive" => array(
                        "label" => __("Is the table responsive? (Read the help text)", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "on",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_1",
                        "description" => __("Here you set the option whether the table is responsive or not.
Note the help text at  &quot;Elements visibility&quot; -&amp;gt; &quot;Hide table header and table footer?&quot;", "dp_dmb"),
                        ),
                            "to_maxrows" => array(
                                "label" => __("Maximum number of lines on a page. (Read the help text)", "dp_dmb"),
                                "type" => "select",
                                "options" => array("-1"=>"-1","1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","20"=>"20","50"=>"50",),
                                "default" => "-1",
                                "tab_slug" => "general",
                                "toggle_slug" => "group_1",
                                "description" => __("With this option you define from how many rows the table creates a next page. 8-ung! Make sure that you have not hidden the display of additional pages. Otherwise the visitor will not be able to see other pages. Or not navigate to them. The value -1 means that no more pages will be created. So the table can go on &quot;infinitely&quot; without creating pages.", "dp_dmb"),
                            ),
                            "to_translation_json" => array(
                                "label" => __("Select the translation file", "dp_dmb"),
                                "type" => "select",
                                "options" => array("en-GB.json"=>"en-GB.json","de-DE.json"=>"de-DE.json",),
                                "default" => "en-GB.json",
                                "tab_slug" => "general",
                                "toggle_slug" => "group_1",
                                "description" => __("Here you choose which language the elements around the table have.", "dp_dmb"),
                            ),
                    "fix_margins" => array(
                        "label" => __("Optimize spacing of search and filter elements", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "on",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_2",
                        "description" => __("Sets better spacing of search and filter elements.", "dp_dmb"),
                        ),
                    "fix_alignment" => array(
                        "label" => __("Optimize mobile view of search and filter elements", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "on",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_2",
                        "description" => __("The search and filter elements are better arranged in the mobile view.", "dp_dmb"),
                        ),
                        "fix_dropdownminwith" => array(
                            "label" => __("Set the minimum size of the first dropdown field", "dp_dmb"),
                            "type" => "text",                         
                            "mobile_options" => false,   
                            "default" => __( "75", "dp_dmb" ),
                            
                            "tab_slug" => "general",
                            "toggle_slug" => "group_2",
                            "description" => __("Here you set the minimum size (min-width) of the first field in the dropdown (mobile view).", "dp_dmb"),
                        ),
                    "fix_wordbreak" => array(
                        "label" => __("Turn off word separation", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "on",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_2",
                        "description" => __("With this option you switch off the word separation. (In the individual cells it is then no longer possible for words to slip onto two lines).", "dp_dmb"),
                        ),
                    "ev_tablehead" => array(
                        "label" => __("Hide table header and table footer. (Read the help text)", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_3",
                        "description" => __("With this option, you can hide the whole table header and the table footer. If you activate this option, this table is no longer responsive! This option overrides the value set under &quot;Table Options&quot; -&amp;gt; &quot;Is the table responsive?", "dp_dmb"),
                        ),
                    "ev_columns" => array(
                        "label" => __("Hide filter for the number of rows", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_3",
                        "description" => __("With this option you can hide the filter for the number of rows.", "dp_dmb"),
                        ),
                    "ev_search" => array(
                        "label" => __("Hide search", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_3",
                        "description" => __("With this option you can hide the search.", "dp_dmb"),
                        ),
                    "ev_tableinfo" => array(
                        "label" => __("Hide table information", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_3",
                        "description" => __("With this option you can hide the table information. (For example, 1 to 3 of 3 entries).", "dp_dmb"),
                        ),
                    "ev_paging" => array(
                        "label" => __("Hide display of additional pages", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_3",
                        "description" => __("With this option you can hide the display of other pages. (Back, Pages, Next)", "dp_dmb"),
                        ),
                    "td_shadow" => array(
                        "label" => __("Hide background shadow of the table", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_4",
                        "description" => __("With this option you can hide the background shadows of the table.", "dp_dmb"),
                        ),
                    "td_border" => array(
                        "label" => __("Hide the table border", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_4",
                        "description" => __("With this option you can hide the border of the table.", "dp_dmb"),
                        ),
                    "td_open_color" => array(
                        "label" => __("Background color of the open icon", "dp_dmb"),
                        "type" => "color-alpha",                         
                        "mobile_options" => false,   
                        "custom_color" => true,
                        "default" => "#31b131",
                        "tab_slug" => "general",
                         "toggle_slug" => "group_4",
                        "description" => __("With this option you can change the background color of the open icon.", "dp_dmb"),
                        ),
                    "td_close_color" => array(
                        "label" => __("Background color of the close icon", "dp_dmb"),
                        "type" => "color-alpha",                         
                        "mobile_options" => false,   
                        "custom_color" => true,
                        "default" => "#d33333",
                        "tab_slug" => "general",
                         "toggle_slug" => "group_4",
                        "description" => __("With this option you can change the background color of the close icon.", "dp_dmb"),
                        ),
                    "tb_border_icon" => array(
                        "label" => __("Hide border of dropdown icon", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "on",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_4",
                        "description" => __("With this option you can remove the border of the dropdown icon.", "dp_dmb"),
                        ),
                    "td_border_shadow" => array(
                        "label" => __("Hide dropdown icon shadow", "dp_dmb"),
                        "type" => "yes_no_button",                         
                        "mobile_options" => false,   
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "on",
                        "tab_slug" => "general",
                        "toggle_slug" => "group_4",
                        "description" => __("With this option you can remove the shadow of the dropdown icon.", "dp_dmb"),
                        ),
                "content" => array(
	"label" => esc_html__( "Content", "dp_dmb" ),
	"type" => "tiny_mce",
	"description" => esc_html__( "Here you can create the content that will be used within the module.", "dp_dmb" ),
	"toggle_slug" => "content",
	), 
            );
            return $fields;
        }
        
        public function get_settings_modal_toggles() {
            
        return array(
            "general" => array(
                "toggles" => array(
                    "group_1"  => esc_html__("Table Options", "dp_dmb" ),"group_2"  => esc_html__("Fixes", "dp_dmb" ),"group_3"  => esc_html__("Elements Visibility", "dp_dmb" ),"group_4"  => esc_html__("Table Design", "dp_dmb" ),
                    "content" => esc_html__("Content", "dp_dmb"),
                    "background" => esc_html__("Background", "dp_dmb"),
                    "admin_label"  => esc_html__("Admin Label", "dp_dmb" ),
                    ),
                ),
                "advanced" => array(
                    "toggles" => array(
                        "icon" => esc_html__("Icons", "dp_dmb"),
                    ),
                ),
        );
        }
        
        public function get_advanced_fields_config() {
            return array(
                "background" => array("use_background_image" => true, "use_background_video" => true,),
                "text" => array("use_background_layout" => true, "options" => array("background_layout" => array("default" => "light",),), "css" => array("text_orientation"=> "%%order_class%%", "background_layout"=> "%%order_class%%")),
                "borders" => array("default" => array("css" => array("main" => "%%order_class%%",))),
                "box_shadow" => array("default" => array("css" => array("main" => "%%order_class%%",))),
                "button" => array(),
                "filters" => array(),
                "fonts" => array(
                "dp_tiny_mce" => array(
                    "label" => __("Body", "dp_dmb" ),
                    "css" => array("main" => "{$this->main_css_element} .dp_field_tinymce",),
                    "line_height" => array("default" => floatval( et_get_option( "body_font_height", "1.7" ) ) . "em",), 
                    "font_size" => array("default" => absint( et_get_option( "body_font_size", "14" ) ) . "px",),
                ),),
                "margin_padding" => array(),
                "max_width" => array(),
                "animation" => array()
            );
        }
        
        public function get_custom_css_fields_config() {
            return array("dp_tiny_mce" => array("label" => __("Body", "dp_dmb" ), "selector" => ".dp_field_tinymce",),);
        }
        
        public function before_render(){
            /**/
             wp_enqueue_script("dmb-module-883");  
			add_filter( "et_late_global_assets_list", array( $this, "require_divi_global_assets" ) );
                         
       }

        public function render( $attrs, $content, $render_slug ) {
            $background_layout    = $this->props["background_layout"];
            $to_responsive = $this->props["to_responsive"]; $to_maxrows = $this->props["to_maxrows"]; $to_translation_json = $this->props["to_translation_json"]; $fix_margins = $this->props["fix_margins"]; $fix_alignment = $this->props["fix_alignment"]; $fix_dropdownminwith = $this->props["fix_dropdownminwith"]; $fix_wordbreak = $this->props["fix_wordbreak"]; $ev_tablehead = $this->props["ev_tablehead"]; $ev_columns = $this->props["ev_columns"]; $ev_search = $this->props["ev_search"]; $ev_tableinfo = $this->props["ev_tableinfo"]; $ev_paging = $this->props["ev_paging"]; $td_shadow = $this->props["td_shadow"]; $td_border = $this->props["td_border"]; $td_open_color = $this->props["td_open_color"]; $td_close_color = $this->props["td_close_color"]; $tb_border_icon = $this->props["tb_border_icon"]; $td_border_shadow = $this->props["td_border_shadow"]; 
                
            $this->add_classname( array(
                "et_pb_bg_layout_{$background_layout}",
                $this->get_text_orientation_classname(),
            ) );
                
                 

            ob_start();
            ?>
            <!-- SS Responsive Table for Divi v 1.0.2  -->


<?php
/* Create TableOptions for JS  */

 echo '<p class="hf_to_r" data-field-type="' . esc_html($to_responsive) . '" style="display:none;"></p>';

 echo '<p class="hf_to_maxrows" data-field-type="' . esc_html($to_maxrows) . '" style="display:none;"></p>';


/* Language check if file is in development environment  */


	/* echo '<p class="hf_to_jason" data-field-type="/wp-content/plugins/ss_assets/assets/datatable/lang/' . $to_translation_json . '" style="display:none;"></p>'; */
	/* */
	$file_pointer = plugin_dir_url(__FILE__) . 'assets/datatable/lang/' . $to_translation_json ;
	$file_pointer = str_replace("modules/", "", $file_pointer);			
	echo '<p class="hf_to_jason" data-field-type="' . esc_html($file_pointer) . '" style="display:none;"></p>';

  
/* Create TableDesign */
  
if($fix_margins === 'on')
{
  echo '<style media="screen" type="text/css">.dataTables_wrapper .dataTables_filter{margin-bottom:15px!important;}</style>';
};
 
if($fix_alignment === 'on')
{
	echo '<style media="screen" type="text/css">.dataTables_length{text-align: left!important;}</style>';
	echo '<style media="screen" type="text/css">.dataTables_filter{text-align: right!important;}</style>';
	echo '<style media="screen" type="text/css">.dataTables_info{text-align: left!important;margin-bottom:25px!important;}</style>';
};
 
// Der Fix für die minwidth wird auch direkt im HTML gestzt. Da immer ein Wert da ist.

if($fix_wordbreak === 'on')
{
  echo '<style media="screen" type="text/css">td{white-space:nowrap!important; white-space: pre!important;}</style>';
};

if($ev_tablehead === 'on')
{
	echo '<style media="screen" type="text/css">thead, tfoot{display:none!important;}</style>';
};

if($ev_columns === 'on')
{
	echo '<style media="screen" type="text/css">.dataTables_length{display:none!important;}</style>';
};

if($ev_search === 'on')
{
	echo '<style media="screen" type="text/css">.dataTables_filter{display:none!important;}</style>';
};

if($ev_tableinfo === 'on')
{
	echo '<style media="screen" type="text/css">.dataTables_info{display:none!important;}</style>';
};

if($ev_paging === 'on')
{
	echo '<style media="screen" type="text/css">.dataTables_wrapper .dataTables_paginate .paginate_button{display:none!important;}</style>';
};

if($td_shadow === 'on')
{
	echo '<style media="screen" type="text/css">td{box-shadow: none!important;}</style>';
};

if($td_border === 'on')
{
	echo '<style media="screen" type="text/css">table{border: none!important;}</style>';
};

// Die Farbeinstellungen können direkt ins html

if($tb_border_icon === 'on')
{
	echo '<style media="screen" type="text/css">td.dtr-control:before{border: none!important;}</style>';
};

if($td_border_shadow === 'on')
{
	echo '<style media="screen" type="text/css">td.dtr-control:before{box-shadow: none!important;}</style>';
};


 echo '<style media="screen" type="text/css">td.dtr-control:before{background-color:' . esc_html($td_open_color) . '!important;}</style>';

 echo '<style media="screen" type="text/css">tr.parent>td.dtr-control:before{background-color:' . esc_html($td_close_color) . '!important;}</style>';

 echo '<style media="screen" type="text/css">.dtr-title{min-width:' . esc_html($fix_dropdownminwith) . 'px!important;}</style>';


/* Ausgabe als tiny_mce  */

echo '<div class="dp_field_tinymce">'.wp_kses_post($this->content).'</div>';
?>
            <?php

            $output = ob_get_clean();
            return $this->_render_module_wrapper( $output, $render_slug );
        }
        
        
		public function require_divi_global_assets($assets_list){
			return $assets_list;
		}  
    }
            
    ?><?php ?><?php

    new ET_Builder_Module_DP_DMB_Module_883; 
}