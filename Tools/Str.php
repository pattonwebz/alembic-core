<?php

namespace Benlumia007\Alembic\Tools;

class Str {

	public static function slashBefore( $str ) {

		return '/' . ltrim( $str, '/' );
	}

	public static function slashAfter( $str ) {

		return rtrim( $str, '/' ) . '/';
	}

	public static function slashTrim( $str ) {

		return trim( $str, '/' );
	}
}
