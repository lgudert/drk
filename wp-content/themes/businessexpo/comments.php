<?php
/**
 *  Comments Page Template
 *
 *  @package BusinessExpo
 */

if ( post_password_required() ) {
	return;
}
?>
<!-- Comments Area -->
<div id="comments" class="comments-area">
	<?php
		$businessexpo_fields = array(
			'author'  => '<div class="form-group"></span></label><input class="form-control" name="author" id="author" value="" type="text" placeholder="' . esc_attr__( 'Name*', 'businessexpo' ) . '" /></div>',
			'email'   => '<div class="form-group"></span></label><input class="form-control" name="email" id="email" value="" type="email" placeholder="' . esc_attr__( 'Email*', 'businessexpo' ) . '" ></div>',
			'website' => '<div class="form-group"></span></label><input class="form-control" name="website" id="website" value="" type="text" placeholder="' . esc_attr__( 'Website', 'businessexpo' ) . '" ></div>',
		);
		/**
		 * Comments Field Default 
		 */
		function businessexpo_comment_fields( $businessexpo_fields ) {
			return $businessexpo_fields;
		}
		add_filter( 'comment_form_default_fields', 'businessexpo_comment_fields' );
			$defaults = array(
				'fields'              => apply_filters( 'businessexpo_comment_form_default_fields', $businessexpo_fields ),
				'comment_field'       => '<div class="form-group"><textarea id="comments" rows="5" class="form-control" name="comment" placeholder="Add a Comment" type="text" ></textarea></div>',
				'logged_in_as'        => '<p class="logged-in-as">' . esc_html__( 'Logged in as', 'businessexpo' ) . ' ' . '<a href="' . esc_url( admin_url( 'profile.php' ) ) . '">' . esc_html( $user_identity ) . '</a>' . '. ' . '<a href="' . wp_logout_url( get_permalink() ) . '" title="' . esc_attr__( 'Log out of this account', 'businessexpo' ) . '">' . esc_html__( 'Logout', 'businessexpo' ) . '</a>' . '</p>',
				'id_submit'           => 'submit',
				'label_submit'        => esc_html__( 'Post Comment', 'businessexpo' ),
				'comment_notes_after' => '',
				'title_reply'         => '<div class="theme-comment-title"><h5>' . esc_html__( 'Please Post Your Comments & Reviews', 'businessexpo' ) . '</h5></div>',
				'id_form'             => 'action',
			);
			comment_form( $defaults );
			?>
</div>
<!-- Comments Area -->
