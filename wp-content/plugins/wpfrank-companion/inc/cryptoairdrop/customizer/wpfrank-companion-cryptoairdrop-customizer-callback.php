<?php

	// Slider Image
	function cryptoairdrop_main_slider_media_image ( $control ) {
		return true === ( $control->manager->get_setting( 'cryptoairdrop_main_slider_media_type' )->value() == 'slide_image' ); 
	}

	// Slider Video
	function cryptoairdrop_main_slider_media_video ( $control ) {
		return true === ( $control->manager->get_setting( 'cryptoairdrop_main_slider_media_type' )->value() == 'slide_video' ); 
	}
