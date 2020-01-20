<?php
/**
 * Copyright by Timon Kreis - All Rights Reserved
 * Visit https://www.timonkreis.de
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
