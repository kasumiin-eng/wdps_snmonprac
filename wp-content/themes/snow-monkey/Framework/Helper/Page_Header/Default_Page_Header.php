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

class Default_Page_Header extends Base {

	/**
	 * Return page header image url.
	 *
	 * @param null $null Null.
	 * @return string|false
	 */
	protected static function _get_image_url(
		// phpcs:disable VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable
		$null
		// phpcs:enable
	) {
		return static::_get_default_image_url();
	}

	/**
	 * Return page header title.
	 *
	 * @param null $null Null.
	 * @return string|false
	 */
	protected static function _get_title(
		// phpcs:disable VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable
		$null
		// phpcs:enable
	) {
		return false;
	}

	/**
	 * Return page header alignment.
	 *
	 * @param null $null Null.
	 * @return string|false
	 */
	protected static function _get_align(
		// phpcs:disable VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable
		$null
		// phpcs:enable
	) {
		return false;
	}
}
