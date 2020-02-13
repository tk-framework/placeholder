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
class LiEuropanLinguesCest
{
	use Framework\Placeholder\Tests\Text\LanguageTestTrait;

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function testGenerator(Framework\Test\UnitTester $I) : void
	{
		$expectation = 'Li Europan lingues es membres del sam familie. Lor separat.';
		$textGenerator = new Framework\Placeholder\Text\LiEuropanLingues();

		$I->assertEquals($expectation, $textGenerator->getWords(10));
	}
}
