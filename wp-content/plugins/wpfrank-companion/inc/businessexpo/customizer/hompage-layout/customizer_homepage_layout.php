<?php // Adding customizer layout manager settings
function businessexpo_layout_manager_customizer( $wp_customize ){

class WP_businessexpo_layout_Customize_Control extends WP_Customize_Control {	

	public $type = 'new_menu';
	
	public function render_content() {
		
		$front_page = get_theme_mod('front_page_data','slider,service,funfact,team,wooproduct,testimonial,blog,callout,sponsors');
		$data_enable = explode(",",$front_page);	
		$defaultenableddata=array('slider','service','funfact','team','wooproduct','testimonial','blog','callout','sponsors');
		$layout_disable=array_diff($defaultenableddata,$data_enable);  
		?>
		
		<h3><?php esc_attr_e('Enable','businessexpo'); ?></h3>
		  <ul class="sortable customizer_layout" id="enable">
		  <?php if( !empty($data_enable[0]) )    { foreach( $data_enable as $value ){ ?>
		  <li class="ui-state" id="<?php echo $value; ?>"><?php echo $value; ?></li>
		  <?php } } ?>
		  </ul>
  
  
		 <h3><?php esc_attr_e('Disable','businessexpo'); ?></h3> 
		 <ul class="sortable customizer_layout" id="disable">
		 <?php if(!empty($layout_disable)){ foreach($layout_disable as $val){ ?>
		  <li class="ui-state" id="<?php echo $val; ?>"><?php echo $val; ?></li>
		  <?php } } ?>
		 </ul>
		 <div class="section">
		 <p> <b><?php esc_attr_e('Note','businessexpo'); ?> </b> <?php esc_attr_e('By default, all sections are enabled on homepage. If you wish not to display a section, just drag it onto the "disabled" box.','businessexpo'); ?><p>
		</div>
<script>
jQuery(document).ready(function($) {
    $( ".sortable" ).sortable({
		connectWith: '.sortable'
	});
  });
   
jQuery(document).ready(function($){	
	
	// Get items id you can chose
	function businessexpoItems(awptheme)
	{
		var columns = [];
		$(awptheme + ' #enable').each(function(){
			columns.push($(this).sortable('toArray').join(','));
		});
		return columns.join('|');
	}
	
	function awpthemeItems_disable(awptheme)
	{
		var columns = [];
		$(awptheme + ' #disable').each(function(){
			columns.push($(this).sortable('toArray').join(','));
		});
		return columns.join('|');
	}
	
	//onclick check id
	$('#enable .ui-state,#disable .ui-state').mouseleave(function(){ 
		var enable = businessexpoItems('#customize-control-layout_manager');
		$("#customize-control-front_page_data input[type = 'text']").val(enable);
		$("#customize-control-front_page_data input[type = 'text']").change();		
	});

  });
</script>
<?php } }
	/* layout manager section */
	$wp_customize->add_section( 'frontpage_layout' , array(
		'title'     => __('Homepage Layout', 'businessexpo'),
		'panel'		=> 'businessexpo_frontpage_settings',
		'priority'  => 1000,
   	) );
	
	$wp_customize->add_setting(
		'layout_manager',
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			
		)	
	);
	$wp_customize->add_control( new WP_businessexpo_layout_Customize_Control( $wp_customize, 'layout_manager', array(
			'section' => 'frontpage_layout',
			'setting' => 'layout_manager',
		))
	);
	
	$wp_customize->add_setting(
		'front_page_data',
		array(
			'default'           =>  'slider,service,funfact,team,wooproduct,testimonial,blog,callout,sponsors',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
		)	
	);
	$wp_customize->add_control('front_page_data', array(
			'label' => __('Enable','businessexpo'),
			'section' => 'frontpage_layout',
			'type'    =>  'text'
	));	 // enable textbox
	
}
add_action( 'customize_register', 'businessexpo_layout_manager_customizer' );