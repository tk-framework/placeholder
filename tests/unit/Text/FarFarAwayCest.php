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
class FarFarAwayCest
{
	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function testGenerator(Framework\Test\UnitTester $I) : void
	{
		$expectation = 'Far far away, behind the word mountains, far from the.';
		$textGenerator = new Framework\Placeholder\Text\FarFarAway();

		$I->assertEquals($expectation, $textGenerator->getWords(10));
	}
}
