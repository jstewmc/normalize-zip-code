<?php
/**
 * The file for the normalize-zip-code tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2017 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\NormalizeZipCode;

use Jstewmc\TestCase\TestCase;

/**
 * The normalize-zip-code service
 *
 * @since  0.1.0
 */
class NormalizeZipCodeTest extends TestCase
{
	/**
	 * __invoke should throw exception if zip code is invalid
	 */
	public function testInvokeThrowsExceptionIfZipCodeIsInvalid()
	{
		$this->expectException(\InvalidArgumentException::class);
		
		(new NormalizeZipCode())('foo');
		
		return;
	}
	
	/**
	 * __invoke() should return string if zip-code has five digits
	 */
	public function testInvokeReturnsStringIfZipCodeHasFiveDigits()
	{
		$this->assertEquals('12345', (new NormalizeZipCode())('12345'));
		
		return;
	}
	
	/**
	 * __invoke() should return string if zip-code has nine digits
	 */
	public function testInvokeReturnsStringIfZipCodeHasNineDigits()
	{
		$this->assertEquals('12345', (new NormalizeZipCode())('12345-6789'));
		
		return;
	}
}
