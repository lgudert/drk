<?php
if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 *
	 * @since Twenty Twenty 1.0
	 */
	function wp_body_open() {
		/** This action is documented in wp-includes/general-template.php */
		do_action( 'wp_body_open' );
	}
}
define( 'THEME_COLOR', '#fab702' );

define( 'THEME_DIR', get_stylesheet_directory() );
define( 'THEME_URL', get_stylesheet_directory_uri() );
define( 'THEME_IMG_URL',  get_stylesheet_directory_uri() . '/images/' );


function best_construction_setup(){

	require_once( THEME_DIR.'/custom/inc.php');
	require_once( THEME_DIR . '/custom/setup.php');		
	require_once( THEME_DIR.'/custom/cts-config.php');	

		
	if ( !function_exists('best_construction_themes_pro')) {  
		require_once( THEME_DIR.'/custom/customizer-pro/class-customize.php');		
	}
	
	require_once( THEME_DIR.'/custom/tgm-plugin.php');		

	
	load_child_theme_textdomain( 'best-construction', THEME_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'best_construction_setup' );

function theta_about_page(){
	require_once( THEME_DIR.'/custom/ct-about-page/about-page.php');	
}
add_action( 'after_setup_theme', 'theta_about_page' );		
	
	
function best_construction_custom_scripts()
{
	$theme_info = wp_get_theme();
	
	wp_enqueue_style('coothemes-icon',  THEME_URL.'/css/cts-icon/coothemes-icon.css', false,"1.0.0", false);	
	wp_enqueue_style('animate',  THEME_URL.'/css/animate.min.css', false,"3.6.0", false);			


	wp_enqueue_style('theta-style',  get_template_directory_uri().'/style.css',array('theta-base','font-awesome','bootstrap'),$theme_info->get( 'Version' ), false);
	wp_enqueue_style('best-construction-style', get_stylesheet_directory_uri().'/style.css',array('theta-style'), $theme_info->get( 'Version' ) );	

	wp_enqueue_style(
		'best-construction-custom-style',
		THEME_URL . '/css/custom_script.css'
	);
	
	$custom_css = '';
	$color = THEME_COLOR;
		
	//header css
 	if ( get_theme_mod( 'theme_color',$color) ){
		$color = esc_attr(get_theme_mod( 'theme_color',$color)) ;
	}	
				
	$color_hover = theta_change_color($color,0.8);
	$color_rbg = theta_hex2rgb( $color );

	$header_color_rbg = theta_hex2rgb( '#ffffff' );
	
	$custom_css .= 'section.ct_news p.ct_news_a a{color: '.$color.';}section.ct_news p.ct_news_a a:hover{color: '.$color_hover.';}
					
					.ct_slider .carousel-control .ct-angle-left,.ct_slider  .carousel-control .ct-angle-right {color: '.$color.';
						padding: 15px 4px 15px 4px;
						border-radius: 10px;
						/*background-color:#ffffff;*/
						 background-color: rgba(255,255,255,0.2);

						}					
					.ct_slider .carousel-control .ct-angle-left:hover,.ct_slider  .carousel-control .ct-angle-right:hover{color: '.$color_hover.';}
					
					';	

	
	if( is_front_page() ){	
		$custom_css .= '	
		#theta-top-search span.theta-close-search-field{ color:'.$color.';}#theta-top-search .theta-search-form input{ color:#EFEFEF;}
		header.fixed{background-color:transparent;}
		header.changeh{background-color:rgba(0,0,0,0.5) ;	}
		';
	}

	// get sction live css
	if(is_page_template( 'template-home.php' )){
		$sortable_value = maybe_unserialize( get_theme_mod( 'home_layout', best_construction_section_default_order() ) );
		
	
		if ( ! empty( $sortable_value ) ) : 
		  foreach ( $sortable_value as $checked_value ) :
		  
			$custom_css .= best_construction_section_live_css($checked_value);
	
		  endforeach;
		endif; 
	}

    wp_add_inline_style( 'best-construction-custom-style', $custom_css );

	wp_enqueue_script('waypoints', THEME_URL.'/js/jquery.waypoints.min.js', array( 'jquery' ), '4.0.0', false );
	wp_enqueue_script('parallax', THEME_URL.'/js/parallax.min.js', array( 'jquery' ), '1.5', false );	


			
	wp_enqueue_script('best-construction-main', THEME_URL.'/js/main.js', array( 'jquery','bootstrap','theta-main' ),$theme_info->get( 'Version' ), true );	
	
	if(is_page_template( 'template-home.php' )){
		wp_add_inline_script( 'best-construction-main', best_construction_script_method() );
	}
				
}

add_action( 'wp_enqueue_scripts', 'best_construction_custom_scripts' );


function best_construction_script_method() {	
	$custom_js = 'jQuery(document).ready(function($){';
	
	$custom_js .= 'var height = jQuery(window).height();
	var width = jQuery(window).width();';


		$sortable_value = maybe_unserialize( get_theme_mod( 'home_layout', best_construction_section_default_order() ) );
		
	
		if ( ! empty( $sortable_value ) ) : 
		  foreach ( $sortable_value as $checked_value ) :
		  
			$custom_js .= best_construction_section_live_js($checked_value);
	
		  endforeach;
		endif; 

	$custom_js .= '});';
	

	return $custom_js;
}



if ( ! function_exists( 'best_construction_get_section_menu' ) ) {
	function best_construction_get_section_menu(){
		$section_menu = '';
		$sortable_value = maybe_unserialize( get_theme_mod( 'home_layout',best_construction_section_default_order() ) );	
		if ( ! empty( $sortable_value ) ) : 
		  foreach ( $sortable_value as $checked_value ) :
			$section_menu = '<li data-menuanchor="'.$checked_value.'"><a href="#'.$checked_value.'">'.ucfirst(esc_html(get_theme_mod( $checked_value.'_section_menu_title',$checked_value) )).'</a></li>'.$section_menu;
		  endforeach;
		endif; 
	
		return $section_menu;
	}

}

if ( ! function_exists( 'best_construction_get_blog_thumbnail' ) ) {
	function best_construction_get_blog_thumbnail($post_id)
	{
		if(has_post_thumbnail())
		{
			
			$ct_post_thumbnail_fullpath=wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), "Full");
			$thumb_array['fullpath'] = $ct_post_thumbnail_fullpath[0];
		
		}else{
			$post_content = get_post($post_id)->post_content;
			$thumb_array['fullpath'] = theta_catch_that_image($post_content);
		}	
		
		if($thumb_array['fullpath']=="" )
		{
			$thumb_array['fullpath'] = esc_url(get_theme_mod( 'blog_feature_img', THEME_URL."/images/default.jpg"));		
		}		

		return $thumb_array;
		
	}
}

function best_construction_get_slider_details($page_id)
{
	$slider = array();
 	$page_data = get_page( $page_id ); 	
	
	$slider['title'] = $page_data->post_title;
	$slider['content'] = $page_data->post_content;	
	
	$ct_post_thumbnail_fullpath=wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), "Full");
	$slider['images'] = $ct_post_thumbnail_fullpath[0];
	
	return 	$slider;
}


function best_construction_get_page_details($page_id , $type)
{
	$return = '';
 	$page_data = get_post( $page_id ); 	
	
	if($type == 'title'){
		$return = $page_data->post_title;
	}
	if($type == 'content'){	
		$return = $page_data->post_content;	
	}
	if($type == 'image'){	
		$ct_post_thumbnail_fullpath=wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), "Full");
		$return = $ct_post_thumbnail_fullpath[0];
	}
	
	if($type == 'url'){	

		$return = $page_data->guid;	

	}	
	
	
	return 	$return;
}



function best_construction_import_files() {
	return array(
		array(
			'import_file_name'           => 'Theta All ( Best Construction Pro)',
			'import_file_url'            => trailingslashit( THEME_URL ) . 'custom/demo-content/best-construction.xml',
			'import_customizer_file_url' => trailingslashit( THEME_URL ) . 'custom/demo-content/best-construction.dat',
			'import_preview_image_url'   => trailingslashit( THEME_URL ) . 'custom/demo-content/images/demo1.jpg',
			'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'best-construction' ),
			'preview_url'                => 'http://demo.coothemes.com/best-construction-pro/',
		),
		array(
			'import_file_name'           => 'best-construction Free',
			'import_file_url'            => 'http://demos.coothemes.com/demo-file/best-construction/best-construction-free.xml',
			'import_customizer_file_url' => 'http://demos.coothemes.com/demo-file/best-construction/best-construction-free.dat',			

			'import_preview_image_url'   => trailingslashit( THEME_URL ) . 'custom/demo-content/images/demo1.jpg',
			'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'best-construction' ),
			'preview_url'                => 'http://demo.coothemes.com/best-construction-pro/',
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'best_construction_import_files' );

function best_construction_after_import_setup() {

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
	
	
	$comtize = '';	
	

}
add_action( 'pt-ocdi/after_import', 'best_construction_after_import_setup' );