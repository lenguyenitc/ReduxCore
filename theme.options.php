<?php
global $cms_base;
/* get local fonts. */
$local_fonts = '';
/**
 * Home Options
 * 
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Main Options', 'tutscoffee'),
    'icon' => 'el-icon-dashboard',
    'fields' => array(
        array(
            'id' => 'intro_product',
            'type' => 'intro_product',
        )
    )
);
/* Start Dummy Data*/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$msg = $disabled = '';
if (!class_exists('WPBakeryVisualComposerAbstract') or !class_exists('CmssuperheroesCore') or !function_exists('cptui_create_custom_post_types')){
    $disabled = ' disabled ';
    $msg='You should be install visual composer, Cmssuperheroes and Custom Post Type UI plugins to import data.';
}
$this->sections[] = array(
    'icon' => 'el-icon-briefcase',
    'title' => __('Demo Content', 'tutscoffee'),
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => '<input type=\'button\' name=\'sample\' id=\'dummy-data\' '.$disabled.' value=\'Import Now\' /><div class=\'cms-dummy-process\'><div  class=\'cms-dummy-process-bar\'></div></div><div id=\'cms-msg\'><span class="cms-status"></span>'.$msg.'</div>',
            'id' => 'theme',
            'icon' => true,
            'default' => 'kindergarten',
            'options' => array(
                'kindergarten' => get_template_directory_uri().'/assets/images/dummy/captiol.png'
            ),
            'type' => 'image_select',
            'title' => 'Select Theme'
        )
    )
);
/* End Dummy Data*/
/**
 * Header Options
 * 
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Header', 'tutscoffee'),
    'icon' => 'el-icon-credit-card',
    'fields' => array(
        array(
            'id' => 'header_layout',
            'title' => __('Layouts', 'tutscoffee'),
            'subtitle' => __('select a layout for header', 'tutscoffee'),
            'default' => '',
            'type' => 'image_select',
            'options' => array(
                '' => get_template_directory_uri().'/inc/options/images/header/h-default.png'
            )
        ),
        array(
            'id'       => 'header_background',
            'type'     => 'background',
            'title'    => __( 'Background', 'tutscoffee' ),
            'subtitle' => __( 'header background with image, color, etc.', 'tutscoffee' ),
            'output'   => array('#cshero-header'),
            'default'   => array(
                'background-color'=>'#fff',
                'background-image'=> '',
                'background-repeat'=>'',
                'background-size'=>'',
                'background-attachment'=>'',
                'background-position'=>''
            )
        ),
         array(
            'subtitle' => __('in pixels.', 'tutscoffee'),
            'id' => 'header_height',
            'type' => 'text',
            'title' => 'Header Height',
            'default' => '140px'
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', 'tutscoffee'),
            'id' => 'header_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => ''
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', 'tutscoffee'),
            'id' => 'header_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => ''
        ),
        array(
            'subtitle' => __('enable sticky mode for menu.', 'tutscoffee'),
            'id' => 'menu_sticky',
            'type' => 'switch',
            'title' => __('Sticky Header', 'tutscoffee'),
            'default' => false,
        ),
         array(
            'subtitle' => __('in pixels.', 'tutscoffee'),
            'id' => 'menu_sticky_height',
            'type' => 'text',
            'title' => 'Sticky Header Height',
            'default' => '80px',
            'required' => array( 0 => 'menu_sticky', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('enable sticky mode for menu Tablets.', 'tutscoffee'),
            'id' => 'menu_sticky_tablets',
            'type' => 'switch',
            'title' => __('Sticky Tablets', 'tutscoffee'),
            'default' => false,
            'required' => array( 0 => 'menu_sticky', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('enable sticky mode for menu Mobile.', 'tutscoffee'),
            'id' => 'menu_sticky_mobile',
            'type' => 'switch',
            'title' => __('Sticky Mobile', 'tutscoffee'),
            'default' => false,
            'required' => array( 0 => 'menu_sticky', 1 => '=', 2 => 1 )
        )
    )
);

/* Header Top */

$this->sections[] = array(
    'title' => __('Header Top', 'tutscoffee'),
    'icon' => 'el-icon-minus',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Enable header top.', 'tutscoffee'),
            'id' => 'enable_header_top',
            'type' => 'switch',
            'title' => __('Enable Header Top', 'tutscoffee'),
            'default' => false,
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', 'tutscoffee'),
            'id' => 'header_top_margin',
            'type' => 'text',
            'title' => 'Header Top Margin',
            'default' => '',
            'required' => array( 0 => 'enable_header_top', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', 'tutscoffee'),
            'id' => 'header_top_padding',
            'type' => 'text',
            'title' => 'Header Top Padding',
            'default' => '',
            'required' => array( 0 => 'enable_header_top', 1 => '=', 2 => 1 )
        )
    )
);

/* Logo */
$this->sections[] = array(
    'title' => __('Logo', 'tutscoffee'),
    'icon' => 'el-icon-picture',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => __('Select Logo', 'tutscoffee'),
            'subtitle' => __('Select an image file for your logo.', 'tutscoffee'),
            'id' => 'main_logo',
            'type' => 'media',
            'url' => true,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/logo.png'
            )
        ),
        array(
            'subtitle' => __('in pixels.', 'tutscoffee'),
            'id' => 'main_logo_height',
            'type' => 'text',
            'title' => 'Logo Height',
            'default' => '38px'
        ),
        array(
            'subtitle' => __('in pixels.', 'tutscoffee'),
            'id' => 'sticky_logo_height',
            'type' => 'text',
            'title' => 'Sticky Logo Height',
            'default' => '38px'
        )
    )
);

/* Menu */
$this->sections[] = array(
    'title' => __('Menu', 'tutscoffee'),
    'icon' => 'el-icon-tasks',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => 'Menu position.',
            'id' => 'menu_position',
            'options' => array(
                1 => 'Menu Left',
                2 => 'Menu Right',
            ),
            'type' => 'select',
            'title' => 'Menu Position',
            'default' => '2'
        ),
        array(
            'subtitle' => __('in pixels.', 'tutscoffee'),
            'id' => 'menu_padding_first_level',
            'type' => 'text',
            'title' => 'Menu Padding - First Level',
            'default' => '0 13px'
        ),
        array(
            'subtitle' => __('in pixels.', 'tutscoffee'),
            'id' => 'menu_margin_first_level',
            'type' => 'text',
            'title' => 'Menu Margin - First Level',
            'default' => '0'
        ),
        array(
            'subtitle' => __('in pixels.', 'tutscoffee'),
            'id' => 'menu_fontsize_first_level',
            'type' => 'text',
            'title' => 'Menu Font Size - First Level',
            'default' => '13px'
        ),
        array(
            'subtitle' => __('in pixels.', 'tutscoffee'),
            'id' => 'menu_fontsize_sub_level',
            'type' => 'text',
            'title' => 'Menu Font Size - Sub Level',
            'default' => '13px'
        ),
        array(
            'subtitle' => __('enable sub menu border bottom.', 'tutscoffee'),
            'id' => 'menu_border_color_bottom',
            'type' => 'switch',
            'title' => __('Border Bottom Menu Item Sub Level', 'tutscoffee'),
            'default' => false,
        ),
        array(
            'subtitle' => __('Enable mega menu.', 'tutscoffee'),
            'id' => 'menu_mega',
            'type' => 'switch',
            'title' => __('Mega Menu', 'tutscoffee'),
            'default' => true,
        ),
        array(
            'subtitle' => __('Enable menu first level uppercase.', 'tutscoffee'),
            'id' => 'menu_first_level_uppercase',
            'type' => 'switch',
            'title' => __('Menu First Level Uppercase', 'tutscoffee'),
            'default' => true,
        )
    )
);
/**
 * Optimal Core
 * 
 * Optimal options for theme. optimal speed
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Optimal Core', 'tutscoffee'),
    'icon' => 'el-icon-idea',
    'fields' => array(
        array(
            'subtitle' => __('no minimize , generate css over time...', 'tutscoffee'),
            'id' => 'dev_mode',
            'type' => 'switch',
            'title' => __('Dev Mode (not recommended)', 'tutscoffee'),
            'default' => false
        )
    )
);