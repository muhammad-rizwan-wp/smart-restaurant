<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/* Short excerpt helper */
function smart_restaurant_short_excerpt($limit = 15) {
	return wp_trim_words( get_the_excerpt(), $limit );
}