<?php
/**
 * Index Contact
 *
 * @package Crypto AirDrop
 */

$cryptoairdrop_contact_disabled = get_theme_mod('cryptoairdrop_contact_disabled', true);
if($cryptoairdrop_contact_disabled == true) {

$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;

if( 'Crypto AirDrop' == $activate_theme ) { 
	$cryptoairdrop_contact_default_content  = get_theme_mod( 'cryptoairdrop_contact_content');
	$cryptoairdrop_contact_container_size = get_theme_mod('cryptoairdrop_contact_container_size', 'container');
	$cryptoairdrop_contact_form = get_theme_mod('cryptoairdrop_contact_form', '');
	$cryptoairdrop_contact_area_title = get_theme_mod('cryptoairdrop_contact_area_title', __('Contact Us','cryptoairdrop'));
	$cryptoairdrop_theme_schema 	= 'theme-light-white';
}
if( 'Crypto Compare' == $activate_theme ) {
	$cryptoairdrop_contact_default_content  = get_theme_mod( 'cryptoairdrop_contact_content');
	$cryptoairdrop_contact_container_size = get_theme_mod('cryptoairdrop_contact_container_size', 'container');
	$cryptoairdrop_contact_form = get_theme_mod('cryptoairdrop_contact_form', '');
	$cryptoairdrop_contact_area_title = get_theme_mod('cryptoairdrop_contact_area_title', __('Contact Us','cryptoairdrop'));
	$cryptoairdrop_theme_schema 	= 'theme-dark';
}
if( 'Crypto Mining' == $activate_theme ) { 
	$cryptoairdrop_contact_default_content  = get_theme_mod( 'cryptoairdrop_contact_content');
	$cryptoairdrop_contact_container_size = get_theme_mod('cryptoairdrop_contact_container_size', 'container');
	$cryptoairdrop_contact_form = get_theme_mod('cryptoairdrop_contact_form', '');
	$cryptoairdrop_contact_area_title = get_theme_mod('cryptoairdrop_contact_area_title', __('Contact Us','cryptoairdrop'));
	$cryptoairdrop_theme_schema 	= 'theme-blue';
}
if( 'Crypto Token' == $activate_theme ) { 
	$cryptoairdrop_contact_default_content  = get_theme_mod( 'cryptoairdrop_contact_content');
	$cryptoairdrop_contact_container_size = get_theme_mod('cryptoairdrop_contact_container_size', 'container');
	$cryptoairdrop_contact_form = get_theme_mod('cryptoairdrop_contact_form', '');
	$cryptoairdrop_contact_area_title = get_theme_mod('cryptoairdrop_contact_area_title', __('Contact Us','cryptoairdrop'));
	$cryptoairdrop_theme_schema 	= 'theme-light-white';
}
if( 'Meme Token' == $activate_theme ) { 
	$cryptoairdrop_contact_default_content  = get_theme_mod( 'cryptoairdrop_contact_content');
	$cryptoairdrop_contact_container_size = get_theme_mod('cryptoairdrop_contact_container_size', 'container');
	$cryptoairdrop_contact_form = get_theme_mod('cryptoairdrop_contact_form', '');
	$cryptoairdrop_contact_area_title = get_theme_mod('cryptoairdrop_contact_area_title', __('Contact Us','cryptoairdrop'));
	$cryptoairdrop_theme_schema 	= 'theme-light-white';
}
?>
	<!-- contact Section -->
	<span id="site-content"></span>
	<section id="contact" class="section contact <?php echo esc_html($cryptoairdrop_theme_schema); ?>">
		<div class="<?php echo esc_html($cryptoairdrop_contact_container_size); ?>">
			<?php if(!empty($cryptoairdrop_contact_area_title)) { ?>
				<div class="row">
					<div class="col-lg-12">
						<div class="section-header">
							<h1 class="section-title"><?php echo esc_html($cryptoairdrop_contact_area_title); ?></h1>
						</div>
					</div>
				</div>
			<?php } ?>

			<div class="row mb-3 contact-content">
				<div class="<?php if(!empty($cryptoairdrop_contact_form)) echo 'col-md-6'; else 'col-md-12' ?>">
					<div class="row">
					<?php 
					if ( ! empty( $cryptoairdrop_contact_default_content ) ) {
						$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
						$cryptoairdrop_contact_default_content = json_decode( $cryptoairdrop_contact_default_content );
						$item = 0;
						foreach ( $cryptoairdrop_contact_default_content as $contact_item ) {
								$icon = ! empty( $contact_item->icon_value ) ? apply_filters( 'cryptoairdrop_translate_single_string', $contact_item->icon_value, 'Contact section' ) : '';
								$title = ! empty( $contact_item->title ) ? apply_filters( 'cryptoairdrop_translate_single_string', $contact_item->title, 'Contact section' ) : '';
								$text = ! empty( $contact_item->text ) ? apply_filters( 'cryptoairdrop_translate_single_string', $contact_item->text, 'Contact section' ) : '';
								$image = ! empty( $contact_item->image_url ) ? apply_filters( 'cryptoairdrop_translate_single_string', $contact_item->image_url, 'Contact section' ) : '';
								$icon_type = ! empty( $contact_item->choice ) ? apply_filters( 'cryptoairdrop_translate_single_string', $contact_item->choice, 'Contact section' ) : '';
								?>
								<div class="<?php if($item == 0) echo 'col-md-12'; else echo 'col-md-6'; ?>">
									<div class="info-box shadow <?php if($item >= 1) echo 'mt-4'; ?>" data-aos="fade-up">
										<?php if($icon_type != 'customizer_repeater_none') { ?>
										<div class="icon">
											<?php if($icon_type == 'customizer_repeater_image') { ?>
												<img src="<?php echo esc_url($image); ?>" />
											<?php } else { ?>
												<i class="fa <?php echo esc_html($icon); ?> icon-lg "></i>
											<?php } ?>
										</div>
										<?php } ?>
										<h3><?php echo esc_html($title); ?></h3>
										<p><?php echo esc_html($text); ?></p>
									</div>
								</div>
								<?php
						$item++;
						}
					} else { ?>
							<div class="col-md-12">
								<div class="info-box shadow" data-aos="fade-up">
									<div class="icon"><img src="<?php echo CRYPTOAIRDROP_THEME_URL ?>/assets/img/token/map.png" /></div>
									<h3><?php esc_html_e('Our Address', 'wpfrank-companion'); ?></h3>
									<p><?php esc_html_e('A108 Adam Street, New York, NY 535022', 'wpfrank-companion'); ?></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box shadow mt-4" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><img src="<?php echo CRYPTOAIRDROP_THEME_URL ?>/assets/img/token/email.png" /></div>
									<h3><?php esc_html_e('Email Us', 'wpfrank-companion'); ?></h3>
									<p><?php esc_html_e('info@example.com', 'wpfrank-companion'); ?></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box shadow mt-4" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><img src="<?php echo CRYPTOAIRDROP_THEME_URL ?>/assets/img/token/phone.png" /></div>
									<h3><?php esc_html_e('Call Us', 'wpfrank-companion'); ?></h3>
									<p><?php esc_html_e('+1 5589 55488 55', 'wpfrank-companion'); ?></p>
								</div>
							</div>
					<?php } ?>
					</div>
				</div>
				<?php if(!empty($cryptoairdrop_contact_form)) { ?>
					<div class="col-lg-6 mt-4 mt-lg-0">
						<?php echo do_shortcode($cryptoairdrop_contact_form); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- End of contact Section -->
<?php } 