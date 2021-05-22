<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 14.0.0
 */

namespace Framework\Model\Page_Header;

use Framework\Helper;
use Framework\Helper\Page_Header\Archive_Page_Header as Page_Header_Helper;
use Framework\Contract\Model\Page_Header as Base;

class Archive_Page_Header extends Base {

	/**
	 * Return page header image url.
	 *
	 * @return string|false
	 */
	protected static function _get_image_url() {
		$post_type        = get_post_type();
		$post_type_object = get_post_type_object( $post_type );

		if ( is_post_type_archive( $post_type ) ) {
			$eyecatch_position = get_theme_mod( 'archive-' . $post_type . '-eyecatch' );

			return in_array( $eyecatch_position, static::$image_mods, true )
				? Page_Header_Helper::get_image_url( $post_type_object )
				: false;
		}

		if ( is_home() || is_archive() ) {
			$eyecatch_position = get_theme_mod( 'archive-eyecatch' );

			return in_array( $eyecatch_position, static::$image_mods, true )
				? Page_Header_Helper::get_image_url( null )
				: false;
		}

		return false;
	}

	/**
	 * Return page header title.
	 *
	 * @return string|false
	 */
	protected static function _get_title() {
		$post_type        = get_post_type();
		$post_type_object = get_post_type_object( $post_type );

		if ( is_post_type_archive( $post_type ) ) {
			$eyecatch_position = get_theme_mod( 'archive-' . $post_type . '-eyecatch' );

			return in_array( $eyecatch_position, static::$title_mods, true )
				? Page_Header_Helper::get_title( $post_type_object )
				: false;
		}

		if ( is_home() || is_archive() ) {
			$eyecatch_position = get_theme_mod( 'archive-eyecatch' );

			return in_array( $eyecatch_position, static::$title_mods, true )
				? Page_Header_Helper::get_title( null )
				: false;
		}

		return false;
	}

	/**
	 * Return page header alignment.
	 *
	 * @return string|false
	 */
	protected static function _get_align() {
		$post_type        = get_post_type();
		$post_type_object = get_post_type_object( $post_type );

		if ( is_post_type_archive( $post_type ) ) {
			$eyecatch_position = get_theme_mod( 'archive-' . $post_type . '-eyecatch' );

			return in_array( $eyecatch_position, static::$title_mods, true )
				? Page_Header_Helper::get_align( $post_type_object )
				: false;
		}

		if ( is_home() || is_archive() ) {
			$eyecatch_position = get_theme_mod( 'archive-eyecatch' );

			return in_array( $eyecatch_position, static::$title_mods, true )
				? Page_Header_Helper::get_align( null )
				: false;
		}

		return false;
	}
}
