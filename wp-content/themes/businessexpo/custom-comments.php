<?php
/**
 *  Custom Comments Page Template
 *
 *  @package BusinessExpo
 */

/**
 * My custom comments output html
 */
function businessexpo_custom_comments( $comment, $args, $depth ) {

	// Get correct tag used for the comments.
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	} ?>
	<<?php echo esc_html( $tag ); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID(); ?>">
	<?php
	// Switch between different comment types.
	switch ( $comment->comment_type ) :
		case 'pingback':
		case 'trackback':
			?>
		<div class="pingback-entry"><span class="pingback-heading"><?php esc_html_e( 'Pingback:', 'businessexpo' ); ?></span> <?php comment_author_link(); ?></div>
			<?php
			break;
		default:
			?>
		<div class="comment-details">
			<div class="comment-author vcard bio">
				<?php
				// Display avatar unless size is set to 0.
				if ( $args['avatar_size'] != 0 ) {
					$avatar_size = ! empty( $args['avatar_size'] ) ? $args['avatar_size'] : 70; // set default avatar size.
						echo get_avatar( $comment, $avatar_size );
				}
				?>
			</div>
			<div class="comment-body">
				<h5>
					<?php
						// author link
						printf( ( '%s' ), get_comment_author_link() );
					?>
				</h5>
				<div class="meta mb-2 comment-meta commentmetadata">
					<?php comment_date( 'j F Y' ); ?><?php esc_html_e( ',', 'businessexpo' ); ?>&nbsp;<?php comment_time( 'g:i a' ); ?>
				</div>
				<div class="comment-text"><?php comment_text(); ?></div><!-- .comment-text -->
				<?php
				// Display comment moderation text.
				if ( $comment->comment_approved == '0' ) {
					?>
					<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'businessexpo' ); ?></em><br/>
																			  <?php
				}
				?>
				<div class="reply-btn">
					<?php
					// Display comment reply link.
					comment_reply_link(
						array_merge(
							$args,
							array(
								'reply_text' => __( 'Reply', 'businessexpo' ),
								'add_below'  => $add_below,
								'depth'      => $depth,
								'max_depth'  => $args['max_depth'],
							)
						)
					);

					?>
				</div>
				<div class="edit-btn">
					<?php edit_comment_link( __( 'Edit', 'businessexpo' ), '  ', '' ); ?>
				</div>
			</div><!-- .comment-details -->
			<span> </span>
		</div>
			<?php
			break;
	endswitch; // End comment_type check.
}
