<?php
  $key = 'blog';
  $custom_css = '';
  //--------------public css set-------------------
  $sections = best_construction_public_content_default(); 
  $default = $sections[$key];

  //--------------section css set-------------------
  $default_content = best_construction_section_content_default($key);  
  $repeater_value = get_theme_mod( 'repeater_'.$key,$default_content);	
 

  $enable_parallax_background = get_theme_mod( $key.'_enable_parallax_background',$default['parallax']); 
  
  $section_background_image     = ''; 
  
  $parallax_str = '';
  
  if($enable_parallax_background && $section_background_image !=''){  
	  $parallax_str ='data-parallax="scroll" data-image-src="'.$section_background_image.'" '; 
  }
  
  $button_arr  = best_construction_button_default_arr($key);  
  $button_url = esc_url(get_theme_mod( $key.'_button_url',''));  
  $button_text = esc_html(get_theme_mod( $key.'_button_text',$button_arr['button_text']));  
  

  $blog_article_number = get_theme_mod( $key.'_article_number',3);
  $blog_categories = get_theme_mod( $key.'_categories',''); 
?>
<section id="ct_<?php echo $key;?>" class="ct_section ct_<?php echo $key;?> ct_section_<?php echo $key;?> ">
	<div  id="<?php echo $key;?>" class="section_content "   <?php echo $parallax_str;?> >
    	
        <div class="ct-title container">
        	<?php if ( get_theme_mod( $key.'_section_title', $default['title'] ) != '' ) : ?>
            <h1 class="section_title "><?php echo esc_html( get_theme_mod( $key.'_section_title', $default['title'] ) );  ?></h1>
           
			<?php endif; ?>
			<?php if ( get_theme_mod( $key.'_section_description', $default['description'] ) != '' ) : ?>
				<p class="section_text"><?php echo esc_html( get_theme_mod( $key.'_section_description', $default['description'] ) ); ?></p>
			<?php endif; ?>
            
        </div>


        <div class="ct_<?php echo $key;?>_list container">
 			<div class="row">
            
                <?php
		
					
						$options_cat_id = array();
						if(!empty($blog_categories)){
							foreach ($blog_categories as   $category) {
								$options_cat_id[] = get_cat_ID($category) ;
							}
						}
						
						if(empty($options_cat_id)){
							
							$query_posts = array( 
							'showposts' => $blog_article_number,
							'ignore_sticky_posts' => 1,
							
							 ); 
	
						}else{
						
							$query_posts =  array( 
							  'showposts' => $blog_article_number, 
							  'ignore_sticky_posts' => 1,
							  'category__in' => $options_cat_id,
							 );
						}


					$the_query = new WP_Query( $query_posts );					
					 
                    if ($the_query->have_posts()) :  while ($the_query->have_posts()) : $the_query->the_post();                             
                ?>
                    <div class="col-md-4 ct_clear_margin_padding">  
                    
              			<div class="col-md-12  ct_clear_margin_padding">
                            <div id="post-3420" class="ct_vertical_column ct_clear_margin_padding">
                                <div class="ct_post_img">
                                    <a href="<?php the_permalink(); ?>">
                                    <?php
										$exclude_id = get_the_ID();
										$thumb_array = best_construction_get_blog_thumbnail($exclude_id);
                                    ?>
                                        <img src="<?php if($thumb_array['fullpath'] != ''){echo esc_url($thumb_array['fullpath']);}?>" /> 

                                        <div class="meta">
                                            <i class="ct ct-search ct-2x" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


						<div class="col-md-12 ct_blog_info">
                            <div class="ct_post_info">
                                <h3><?php the_title(); ?></h3>
                                <p class="post-meta-2"><i class="ct ct-time-r" aria-hidden="true"></i> <?php the_time('M d, y');?></p>   
                                <div class="post-content"><?php the_excerpt();?> </div>  
                            </div>
                        </div>                    
                    
                    </div><!--div class="ct_row ct_clear_margin_padding"-->

                <?php 
				
					endwhile; 
					wp_reset_postdata();
					endif;
					
				 ?>                             

                <p class="clear"></p>                             

             	<p><a class="btn btn-lg btn-primary" href="<?php echo $button_url; ?>" role="button">
                	<?php echo $button_text; ?> 
                </a></p>                  
                
                
                                                          
            </div>	
        </div><!--div class="ct_gallery_list "-->
        

	</div>
	<div class="clear"></div>
</section>