<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 14.0.0
 */

namespace Framework\Helper\Page_Header;

use Framework\Helper;
use Framework\Contract\Helper\Page_Header\Page_Header as Base;

class Archive_Page_Header extends Base {

	/**
	 * Return page header image url.
	 *
	 * @param WP_Post_Type|null $wp_post_type WP_Post_Type object.
	 * @return string|false
	 */
	protected static function _get_image_url( $wp_post_type ) {
		if ( is_a( $wp_post_type, '\WP_Post_Type' ) ) {
			$post_type = $wp_post_type->name;

			return Helper::has_post_type_archive_thumbnail( $post_type )
				? Helper::get_the_post_type_archive_thumbnail_url( $post_type )
				: static::_get_default_image_url();
		}

		if ( is_null( $wp_post_type ) ) {
			return Helper::has_homepage_thumbnail()
				? Helper::get_the_homepage_thumbnail_url( static::_get_thumbnail_size() )
				: static::_get_default_image_url();
		}

		return false;
	}

	/**
	 * Return page header title.
	 *
	 * @param WP_Post_Type|null $wp_post_type WP_Post_Type object.
	 * @return string|false
	 */
	protected static function _get_title( $wp_post_type ) {
		if ( is_a( $wp_post_type, '\WP_Post_Type' ) ) {
			return Helper::get_page_title_from_breadcrumbs();
		}

		if ( is_null( $wp_post_type ) ) {
			return Helper::get_page_title_from_breadcrumbs();
		}

		return false;
	}

	/**
	 * Return page header alignment.
	 *
	 * @param WP_Post_Type|null $wp_post_type WP_Post_Type object.
	 * @return string|false
	 */
	protected static function _get_align( $wp_post_type ) {
		if ( is_a( $wp_post_type, '\WP_Post_Type' ) ) {
			$post_type = $wp_post_type->name;

			return get_theme_mod( 'archive-' . $post_type . '-page-header-align' );
		}

		if ( is_null( $wp_post_type ) ) {
			return get_theme_mod( 'archive-page-header-align' );
		}

		return false;
	}
}
