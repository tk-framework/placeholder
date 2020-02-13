<?php
/**
 * @author Timon Kreis <mail@timonkreis.de>
 * @copyright 2020 Timon Kreis
 * @license http://www.opensource.org/licenses/mit-license.html
 */
declare(strict_types = 1);

use TimonKreis\Framework;

/**
 * @category tk-framework
 * @package placeholder
 */
class PangramCest
{
	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function testGenerator(Framework\Test\UnitTester $I) : void
	{
		$expectation = 'The quick, brown fox jumps over a lazy dog. DJs.';
		$textGenerator = new Framework\Placeholder\Text\Pangram();

		$I->assertEquals($expectation, $textGenerator->getWords(10));
	}
}
