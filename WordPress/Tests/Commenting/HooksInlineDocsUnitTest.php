<?php
/**
 * Unit test class for WordPress Coding Standard.
 *
 * @package WPCS\WordPressCodingStandards
 * @link    https://github.com/WordPress/WordPress-Coding-Standards
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace WordPressCS\WordPress\Tests\Commenting;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the HooksInlineDOcs sniff.
 *
 * @package WPCS\WordPressCodingStandards
 *
 * @since 3.0.0
 */
class HooksInlineDocsUnitTest extends AbstractSniffUnitTest {
	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array(
			12 => 2,
			13 => 2,
			14 => 2,
			15 => 2,
			16 => 2,
			17 => 2,
			26 => 1,
			31 => 1,
			43 => 1,
			51 => 1,
			59 => 1,
			76 => 1,
			88 => 1,
			96 => 1,
		);
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array();
	}
}
