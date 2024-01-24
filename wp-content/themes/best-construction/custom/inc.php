<?php
function best_construction_section_default_order() 
{
	$section_default = array( 	
		'slider',
		'blog',	
		'news',			
	);		
	return $section_default;
}


if ( !function_exists( 'best_construction_get_default_title_font' ) ){
  function best_construction_get_default_title_font($key)
  { 
	switch($key){
		  
		  	  
		case 'tool':		
		  $section_title_default_font     = array(
				  'font-family'    => 'Montserrat',
				  'variant'        => 'lighter',
				  'font-size'      => '30px',
				  'color'          => '#ffffff',
				  'text-transform' => 'none',
				  'text-align'     => 'left'
			  ); 
		  break;	
		

	
		default:
		  $section_title_default_font     = array(
				  'font-family'    => 'Montserrat',
				  'variant'        => 'lighter',
				  'font-size'      => '40px',
				  'color'          => '#000000',
				  'text-transform' => 'Uppercase',
				  'text-align'     => 'center'
			  ); 
	}
	return $section_title_default_font;	
	 
  }
}

if ( !function_exists( 'best_construction_get_description_font' ) ){
  function best_construction_get_description_font($key)
  {  
	switch($key){

	  
	case 'blog':
	  $section_description_default_font     = array(
			  'font-family'    => 'Roboto',
			  'variant'        => 'regular',
			  'font-size'      => '14px',
			  'color'          => '#353535',
			  'text-transform' => 'none',
			  'text-align'     => 'center'
		  );
	  break;	  
	  
	case 'tool':	
	  $section_description_default_font     = array(
			  'font-family'    => 'Roboto',
			  'variant'        => 'regular',
			  'font-size'      => '16px',
			  'color'          => '#dedede',
			  'text-transform' => 'none',
			  'text-align'     => 'left'
		  );
	  break;

	default:
	  $section_description_default_font     = array(
			  'font-family'    => 'Roboto',
			  'variant'        => 'regular',
			  'font-size'      => '14px',
			  'color'          => '#666666',
			  'text-transform' => 'none',
			  'text-align'     => 'center'
		);   
	}
	return $section_description_default_font;
	 
  }
}

function best_construction_public_content_default()
{   
  return $sections_default = array(
 
	
   	'tool'		 => array(
		'title'		 => '',
		'description'	=> '',
  		'menu'		 => 'tool',				
  		'color'		 => '#252425',
  		'opacity'		 => 1,	
  		'parallax'		 => 0,	
  		'img'	 => '',
  		'padding_top'	 => '60px',
  		'padding_bottom'	 => '40px',
		
  	),		
	
 
   	'blog'		 => array(
		'title'		 => __( 'what we offer', 'best-construction' ),
		'description'	=> __( 'You can write a description of the section here!', 'best-construction' ),
  		'menu'		 => 'blog',
  		'color'		 => '#ffffff',
  		'opacity'		 => 1,
  		'parallax'		 => 0,
  		'img'	 => '',
  		'padding_top'	 => '100px',
  		'padding_bottom'	 => '80px',
		
  	), 
	 


   	'news'		 => array(
		'title'		 => __( 'Events of The Month', 'best-construction' ),
		'description'	=> __( 'You can write a description of the section here! You can write a description of the section here!', 'best-construction' ),
  		'menu'		 => 'news',				
  		'color'		 => '#f3f3f3',
  		'opacity'		 => 1,	
  		'parallax'		 => 0,		
  		'img'	 => '',
  		'padding_top'	 => '100px',
  		'padding_bottom'	 => '80px',
		
  	),  

 	
  );
}

function best_construction_section_content_default($key)
{  

  switch($key){


	case 'tool':	
		$default     = array(
			array(
				'tool_2_icon' => 'ct-home-alt',
				'tool_2_text' => esc_attr__( 'here is your location', 'best-construction' ),												
			),
	
			array(
				'tool_2_icon' => 'ct-telephone-o',
				'tool_2_text' => esc_attr__( 'here is your phone number', 'best-construction' ),											
			),
	
			array(
				'tool_2_icon' => 'ct-envelope-o',
				'tool_2_text' => esc_attr__( 'here is your email address', 'best-construction' ),									
			),
	
	
			array(
				'tool_2_icon' => 'ct-internet-explorer',
				'tool_2_text' => esc_attr__( 'here is your website URL', 'best-construction' ),											
			),
	
		);
 	  break;
	  

	

	default:
	  $default     = array();	
	  	  

  }
  return $default;
}


function best_construction_button_default_arr($key) 
{
	$default     = array();	
 switch($key){

	case 'news':	
	  $default     = array(
		'key'=>'news',
		'button_text'=>__( 'View All Events', 'best-construction' ),
		'opacity'=>0,
		'button_font'=>array(
				'font-family'    => 'Roboto',
				'variant'        => '300',
				'font-size'      => '16px',
				'color'          => THEME_COLOR,
				'text-transform' => 'Uppercase',
				'text-align'     => 'center'
			),
		'button_radius'=>30,	
			
		'button_spacing'=>array(
				  'top'    => '12px',
				  'bottom' => '12px',
				  'left'   => '30px',
				  'right'  => '30px',
			  )
	  );
 	  break;	  

	case 'blog':	
	  $default     = array(
		'key'=>'blog',
		'button_text'=>__( 'View The Blog', 'best-construction' ),
		'opacity'=>0,
		'button_font'=>array(
				'font-family'    => 'Roboto',
				'variant'        => '300',
				'font-size'      => '16px',
				'color'          => THEME_COLOR,
				'text-transform' => 'Uppercase',
				'text-align'     => 'center'
			),
		'button_radius'=>30,	
			
		'button_spacing'=>array(
				  'top'    => '12px',
				  'bottom' => '12px',
				  'left'   => '30px',
				  'right'  => '30px',
			  )
	  );
 	  break;
	  	
	default:
	  $default     = array();	
	  	  

  }
  return $default;
}

?>