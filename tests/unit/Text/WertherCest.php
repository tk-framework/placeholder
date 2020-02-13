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
class WertherCest
{
	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function testGenerator(Framework\Test\UnitTester $I) : void
	{
		$expectation = 'A wonderful serenity has taken possession of my entire soul.';
		$textGenerator = new Framework\Placeholder\Text\Werther();

		$I->assertEquals($expectation, $textGenerator->getWords(10));
	}
}
