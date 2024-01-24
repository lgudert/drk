<?php
	/* TopBar */
	$businessexpo_topbar  = get_theme_mod( 'businessexpo_topbar_enabled', true );
	$businessexpo_phone   = get_theme_mod( 'businessexpo_tbar_phone_text', '+012-012' );
	$businessexpo_email   = get_theme_mod( 'businessexpo_tbar_email_text', 'mail@example.com' );
	$businessexpo_btn     = get_theme_mod( 'businessexpo_tbar_btn_text', 'Buy Now' );
	$businessexpo_btn_url = get_theme_mod( 'businessexpo_tbar_btn_url', 'mail@example.com' );


if ( $businessexpo_topbar == true ) { ?>
	<!--Top Info Bar-->
	<header class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12">	
					<ul class="header-contact-info">
						<?php if ( ! empty( $businessexpo_phone ) && ! empty( $businessexpo_email ) ) { ?>
						<li>
							<?php if ( ! empty( $businessexpo_phone ) ) { ?>
							<i class="fas fa-phone-alt"></i> <span class="info-phone"><?php esc_html_e( 'Call Us:', 'businessexpo' ); ?> <?php echo esc_html( $businessexpo_phone ); ?></span></span>
								<?php
							}
							if ( ! empty( $businessexpo_email ) ) {
								?>
							 
							<i class="fas fa-envelope"></i> <span class="info-email"><?php esc_html_e( 'Email:', 'businessexpo' ); ?> <?php echo esc_html( $businessexpo_email ); ?></span></span>
								<?php
							}
						}
						?>
						</li>
					</ul> 
				</div>
				<div class="col-md-4 col-sm-12">
					<?php if ( ! empty( $businessexpo_btn ) ) { ?>
					<ul class="buy-button">
						<a href="<?php echo esc_url( $businessexpo_btn_url ); ?>" class="btn btn-radius header-buy-button btn-animation"><?php echo esc_html( $businessexpo_btn ); ?></a>
					</ul>
					<?php } ?>
				</div>
			</div>
		</div>
	</header>
	<!--/End Top Info Bar-->
	<?php } ?>
