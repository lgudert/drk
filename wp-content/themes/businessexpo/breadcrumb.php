<?php
/**
 *  Breadcrumb Template
 *
 *  @package BusinessExpo
 */

$businessexpo_page_header_disabled = get_theme_mod( 'businessexpo_page_header_disabled', 'true' );

if ( $businessexpo_page_header_disabled == true ) {
	?>
	<!--Page Title-->
	<section class="page-title-module" style="background: url(<?php header_image(); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 content-center">
					<div class="title text-center">
					<?php
					if ( is_home() || is_front_page() ) {
						echo '<h1 class="text-white">';
						echo single_post_title();
						echo '</h1>';
					} else {
						businessexpo_theme_page_header_title();
					}

						businessexpo_page_header_breadcrumbs();
					?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/End of Page Title-->
	<?php
}
?>
