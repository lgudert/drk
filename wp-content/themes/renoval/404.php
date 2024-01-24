<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Renoval
 */

get_header();
$pg_404_ttl	= get_theme_mod('pg_404_ttl','4<span class="card404icon"><i class="fa fa-wrench"></i></span>4');
?>

<!--=========================-->
<!-- Start: 404 Section
=======================-->
<section id="page-404" class="page-404 bg-image-404 wow fadeInUp">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="text-404">
					<img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/404.png'); ?>" alt="<?php echo esc_attr__('Image','renoval'); ?>">	
						<?php if ( ! empty($pg_404_ttl) ) : ?>		
							<h1><?php echo wp_kses_post($pg_404_ttl); ?></h1>    
						<?php endif; ?>	
						
						<p><?php esc_html_e('A work is Always Interested','renoval');?></p>
					
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-button"><span><?php esc_html_e('Back','renoval');?></span></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End: 404 Section
=======================-->
<?php get_footer(); ?>
