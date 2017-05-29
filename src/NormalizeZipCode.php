<?php
/**
 * The file for the normalize-zip-code service
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2017 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\NormalizeZipCode;

/**
 * The normalize-zip-code service
 *
 * @since  0.1.0
 */
class NormalizeZipCode
{
	/* !Magic methods */
	
	/**
	 * Called when the class is treated like a function
	 *
	 * @param   string  $string  the zip-code to normalize
	 * @return  string
	 * @since   0.1.0
	 */
	public function __invoke(string $zip): string
	{
		$zip = trim($zip);
		
		// if the zip-code is invalid, short-circuit
		if ( ! preg_match('/^[0-9]{5}(-[0-9]{4})?$/', $zip)) {
			throw new \InvalidArgumentException(
				"__invoke() expects parameter one, zip, to be a valid zip code "
					. "(i.e., five digits, optionally followed by a hyphen and "
					. "four more digits)"
			);
		}
		
		return substr($zip, 0, 5);
	}	
}
