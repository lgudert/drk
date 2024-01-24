<?php
/**
 * Index FAQ
 *
 * @package Crypto AirDrop
 */

$cryptoairdrop_faq_disabled  = get_theme_mod( 'cryptoairdrop_faq_disabled', true);
if($cryptoairdrop_faq_disabled == true) {
	
$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;

if( 'Crypto AirDrop' == $activate_theme ) {
	$cryptoairdrop_faqs_default_content  = get_theme_mod( 'cryptoairdrop_faqs_content');
	$cryptoairdrop_faq_title  = get_theme_mod( 'cryptoairdrop_faq_title', 'Frequently Asked Questions');
	$cryptoairdrop_faq_image_disable  = get_theme_mod( 'cryptoairdrop_faq_image_disable', 'enable');
	$cryptoairdrop_faq_image  = get_theme_mod( 'cryptoairdrop_faq_image', get_template_directory_uri() . '/assets/img/token/faq.png');
	$cryptoairdrop_theme_schema 	= 'theme-light-white';
}
if( 'Crypto Compare' == $activate_theme ) {
	$cryptoairdrop_faqs_default_content  = get_theme_mod( 'cryptoairdrop_faqs_content');
	$cryptoairdrop_faq_title  = get_theme_mod( 'cryptoairdrop_faq_title', 'Frequently Asked Questions');
	$cryptoairdrop_faq_image_disable  = get_theme_mod( 'cryptoairdrop_faq_image_disable', 'enable');
	$cryptoairdrop_faq_image  = get_theme_mod( 'cryptoairdrop_faq_image', wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/faq.png');
	$cryptoairdrop_theme_schema 	= 'theme-dark';
}
?>
<?php  ?>
<!-- FAQ Section -->
<section id="faq" class="section faq <?php echo esc_html($cryptoairdrop_theme_schema); ?>">
	<div class="container">

		<?php if(!empty($cryptoairdrop_faq_title)) { ?>
			<div class="row">
				<div class="col-lg-12 ">
					<div class="section-header">
						<h1 class="section-title"><?php echo esc_html($cryptoairdrop_faq_title); ?></h1>
					</div>
				</div>
			</div>
		<?php } ?>

		<div class="row mb-3 faq-content">
			<div class="<?php if($cryptoairdrop_faq_image_disable == 'enable') echo 'col-lg-8'; else echo 'col-lg-12'; ?>">
			<?php
			if ( ! empty( $cryptoairdrop_faqs_default_content ) ) {
				$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array(),'p' => array());
				$cryptoairdrop_faqs_default_content = json_decode( $cryptoairdrop_faqs_default_content );
				$item = 0;
				foreach ( $cryptoairdrop_faqs_default_content as $faq_item ) {
						$title = ! empty( $faq_item->title ) ? apply_filters( 'cryptoairdrop_translate_single_string', $faq_item->title, 'FAQ section' ) : '';
						$text = ! empty( $faq_item->text ) ? apply_filters( 'cryptoairdrop_translate_single_string', $faq_item->text, 'FAQ section' ) : '';
						?>
						<div id="accordion-1" class="shadow">
							<div class="head">
								<h5><?php echo esc_html($title); ?></h5>
								<i class="fas fa-angle-down arrow"></i>
							</div>
							<div class="content">
								<?php echo wp_kses( html_entity_decode( $text ), $allowed_html );  ?>
							</div>
						</div>
						<?php
					} 
				} else { ?>
					<div id="accordion-1" class="shadow">
						<div class="head">
							<h5><?php esc_html_e('01. What is New Crypto Token?', 'wpfrank-companion'); ?></h5>
							<i class="fas fa-angle-down arrow"></i>
						</div>
						<div class="content">
							<p>
								At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati. Temporibus autem quibusdam
								et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus,aut officiis debitis aut
								rerum ut aut reiciendis voluptatibus maiores alias.
							</p>
						</div>
					</div>
					<div id="accordion-1" class="shadow">
						<div class="head">
							<h5><?php esc_html_e('02. Who can invest in New Crypto Token?', 'wpfrank-companion'); ?></h5>
							<i class="fas fa-angle-down arrow"></i>
						</div>
						<div class="content">
							<p>
								<?php esc_html_e('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.', 'wpfrank-companion'); ?>
							</p>
						</div>
					</div>
					<div id="accordion-1" class="shadow">
						<div class="head">
							<h5><?php esc_html_e('03. Where to buy New Crypto Token?', 'wpfrank-companion'); ?></h5>
							<i class="fas fa-angle-down arrow"></i>
						</div>
						<div class="content" class="shadow">
							<p>
								<?php esc_html_e('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.', 'wpfrank-companion'); ?>
							</p>
						</div>
					</div>
					<div id="accordion-1" class="shadow">
						<div class="head">
							<h5><?php esc_html_e('04. What is the future of New Crypto Token?', 'wpfrank-companion'); ?></h5>
							<i class="fas fa-angle-down arrow"></i>
						</div>
						<div class="content">
							<p>
								<?php esc_html_e('Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus,aut officiis debitis aut rerum ut aut reiciendis voluptatibus maiores alias.', 'wpfrank-companion'); ?>
							</p>
						</div>
					</div>
				<?php } ?>
			</div>

			<?php if($cryptoairdrop_faq_image_disable == 'enable') { ?>
				<div class="col-lg-4 faq-image">
					<img src="<?php echo esc_url($cryptoairdrop_faq_image); ?>" />
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<script>
	jQuery(window).load(function() {
	// acordian FAQ
		jQuery('.head').click(function() {
		  jQuery(this).toggleClass('active');
		  jQuery(this).parent().find('.arrow').toggleClass('arrow-animate');
		  jQuery(this).parent().find('.content').slideToggle(280);
		});
		
		// parallax
		jQuery(window).scroll(function() {
				var scrollDistance = jQuery(window).scrollTop();

				// Show/hide menu on scroll
				//if (scrollDistance >= 850) {
				//		jQuery('nav').fadeIn("fast");
				//} else {
				//		jQuery('nav').fadeOut("fast");
				//}
			
				// Assign active class to nav links while scolling
				jQuery('.section').each(function(i) {
					if (jQuery(this).position().top <= scrollDistance) {
						jQuery('.menu li.active').removeClass('active');
						jQuery('.menu li').eq(i).addClass('active');
					}
				});
		}).scroll();
	});
</script>
<!-- End of FAQ Section -->
<?php } 