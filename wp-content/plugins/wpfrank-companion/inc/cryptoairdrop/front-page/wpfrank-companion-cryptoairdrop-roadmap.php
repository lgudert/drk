<?php
/**
 * Index Roadmap
 *
 * @package Crypto AirDrop
 */

$cryptoairdrop_roadmap_default_content  = get_theme_mod( 'cryptoairdrop_roadmap_content');
$cryptoairdrop_roadmap_title  = get_theme_mod( 'cryptoairdrop_roadmap_title', 'Progress Map');
$cryptoairdrop_roadmap_disabled  = get_theme_mod( 'cryptoairdrop_roadmap_disabled', 'True');
//$cryptoairdrop_roadmap_progress = get_theme_mod('cryptoairdrop_roadmap_progress', array('slider' => 75,'suffix' => '',));

if($cryptoairdrop_roadmap_disabled == true) { 

$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;
?>
<style>
.road-map-tl-event li:first-child:after, .road-map-tl-event li:nth-child(2):after {
	height: 75%;
}
</style>

<!-- Roadmap Section -->
<section id="roadmap" class="section roadmap theme-blue">
	<div class="container">
		<?php if(!empty($cryptoairdrop_roadmap_title)) { ?>
			<div class="row">
				<div class="col-lg-12">
					<div class="section-header">
						<h1 class="section-title"><?php echo esc_html($cryptoairdrop_roadmap_title); ?></h1>
					</div>
				</div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="road-map-timeline">
				<ul class="road-map-tl-event list-unstyled">
				<?php
				if ( ! empty( $cryptoairdrop_roadmap_default_content ) ) {
					$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array(),'p' => array());
					$cryptoairdrop_roadmap_default_content = json_decode( $cryptoairdrop_roadmap_default_content );
					$item = 0;
					foreach ( $cryptoairdrop_roadmap_default_content as $roadmap_item ) {
							$title = ! empty( $roadmap_item->title ) ? apply_filters( 'cryptoairdrop_translate_single_string', $roadmap_item->title, 'Roadmap section' ) : '';
							$date = ! empty( $roadmap_item->date ) ? apply_filters( 'cryptoairdrop_translate_single_string', $roadmap_item->date, 'Roadmap section' ) : '';
							$text = ! empty( $roadmap_item->text ) ? apply_filters( 'cryptoairdrop_translate_single_string', $roadmap_item->text, 'Roadmap section' ) : '';
							$status = ! empty( $roadmap_item->event_completed ) ? apply_filters( 'cryptoairdrop_translate_single_string', $roadmap_item->event_completed, 'Roadmap section' ) : '';
						?>
							<li class="road-map-row <?php echo esc_html($status); ?> item-<?php echo esc_html($item); ?>">
								<?php if($status == 'circle-row') { echo '<div class="waves"></div>'; } ?>
								<div class="road-map-event event wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceInLeft;">
									<div class="content shadow">
										<h3><?php echo esc_html($date); ?></h3>
										<div class="timeline-cont-info">
											<h5><?php echo esc_html($title); ?></h5>
											<?php echo wp_kses( html_entity_decode( $text ), $allowed_html );  ?>
										</div>
									</div>
								</div>
							</li>
						<?php
						$item++;
					}
				} else if( 'Meme Token' == $activate_theme ) { 
					?>
					<li class="road-map-row item-0">
						<div class="road-map-event event wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceInLeft;">
							<div class="content shadow">
								<h3><?php esc_html_e('20th January', 'wpfrank-companion'); ?></h3>
								<div class="timeline-cont-info">
									<h5><?php esc_html_e('Stage I', 'wpfrank-companion'); ?></h5>
									<p><?php esc_html_e('Sullamco laboris nisi ut aliquip ex onse quamet, consectetur adip isicing elit, sed do eiusmod', 'wpfrank-companion'); ?></p>
								</div>
							</div>
						</div>
					</li>
					<li class="road-map-row item-1">
						<div class="road-map-event event wow bounceInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceInRight;">
							<div class="content shadow">
								<h3><?php esc_html_e('15th August', 'wpfrank-companion'); ?></h3>
								<div class="timeline-cont-info">
									<h5><?php esc_html_e('Stage II', 'wpfrank-companion'); ?></h5>
									<p><?php esc_html_e('Lapatta hoyaga asochsa onec dictum lectus ac sem posuere venenatis. Cras sodales', 'wpfrank-companion'); ?></p>
								</div>
							</div>
						</div>
					</li>
					<li class="road-map-row circle-row item-2">
						<div class="waves"></div>
						<div class="road-map-event event wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceInLeft;">
							<div class="content shadow">
								<h3><?php esc_html_e('10th December', 'wpfrank-companion'); ?></h3>
								<div class="timeline-cont-info">
									<h5><?php esc_html_e('Stage III', 'wpfrank-companion'); ?></h5>
									<p><?php esc_html_e('Tormu khtaami beiman ex mauris lacinia mauris ac leo pulvinar vitae cursus odio thakukna', 'wpfrank-companion'); ?></p>
								</div>
							</div>
						</div>
					</li>

					<li class="road-map-row circle-row2 item-3">
						<div class="road-map-event event wow bounceInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceInRight;">
							<div class="content shadow">
								<h3><?php esc_html_e('16th March', 'wpfrank-companion'); ?></h3>
								<div class="timeline-cont-info">
									<h5><?php esc_html_e('The Launch', 'wpfrank-companion'); ?></h5>
									<p><?php esc_html_e('Demet pellentesque urna semper Cras sodales, massa et sagittis aliquam, elit lectus sollicitu', 'wpfrank-companion'); ?></p>
								</div>
							</div>
						</div>
					</li>
					<?php
				} else { 
					?>
						<li class="road-map-row">
							<div class="road-map-event event wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceInLeft;">
								<div class="content shadow">
									<h3><?php esc_html_e('August 20, 2018', 'wpfrank-companion'); ?></h3>
									<div class="timeline-cont-info">
										<h5><?php esc_html_e('Idea Generation', 'wpfrank-companion'); ?></h5>
										<p><?php esc_html_e('Sullamco laboris nisi ut aliquip ex onse quamet, consectetur adip isicing elit, sed do eiusmod', 'wpfrank-companion'); ?></p>
									</div>
								</div>
							</div>
						</li>
						<li class="road-map-row">
							<div class="road-map-event event wow bounceInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceInRight;">
								<div class="content shadow">
									<h3><?php esc_html_e('September 12, 2018', 'wpfrank-companion'); ?></h3>
									<div class="timeline-cont-info">
										<h5><?php esc_html_e('Concept Making', 'wpfrank-companion'); ?></h5>
										<p><?php esc_html_e('Lapatta hoyaga asochsa onec dictum lectus ac sem posuere venenatis. Cras sodales', 'wpfrank-companion'); ?></p>
									</div>
								</div>
							</div>
						</li>
						<li class="road-map-row">
							<div class="road-map-event event wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceInLeft;">
								<div class="content shadow">
									<h3><?php esc_html_e('November 20, 2018', 'wpfrank-companion'); ?></h3>
									<div class="timeline-cont-info">
										<h5><?php esc_html_e('R &amp; D', 'wpfrank-companion'); ?></h5>
										<p><?php esc_html_e('Tormu khtaami beiman ex mauris lacinia mauris ac leo pulvinar vitae cursus odio thakukna', 'wpfrank-companion'); ?></p>
									</div>
								</div>
							</div>
						</li>

						<li class="road-map-row circle-row">
							<div class="waves"></div>
							<div class="road-map-event event wow bounceInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceInRight;">
								<div class="content shadow">
									<h3><?php esc_html_e('December 01, 2018', 'wpfrank-companion'); ?></h3>
									<div class="timeline-cont-info">
										<h5><?php esc_html_e('The Launch', 'wpfrank-companion'); ?></h5>
										<p><?php esc_html_e('Demet pellentesque urna semper Cras sodales, massa et sagittis aliquam, elit lectus sollicitu', 'wpfrank-companion'); ?></p>
									</div>
								</div>
							</div>
						</li>
						<li class="road-map-row circle-row2">
							<div class="road-map-event event wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceInLeft;">
								<div class="content shadow">
									<h3><?php esc_html_e('December 23, 2018', 'wpfrank-companion'); ?></h3>
									<div class="timeline-cont-info">
										<h5><?php esc_html_e('Pre Sale', 'wpfrank-companion'); ?></h5>
										<p><?php esc_html_e('Amar ei baje sovab ex sliquam vel porttitor lorem. Nam porta ipsum nec tortor intkono din', 'wpfrank-companion'); ?></p>
									</div>
								</div>
							</div>
						</li>
				<?php
				} ?>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- End of Roadmap Section -->
<?php } 