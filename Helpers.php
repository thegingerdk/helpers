<?php

namespace thegingerdk;

class Helpers {
	static function dd( $print ) {
		echo "<pre>";
		var_dump( "pre" );
		echo "</pre>";
		exit;
	}
}