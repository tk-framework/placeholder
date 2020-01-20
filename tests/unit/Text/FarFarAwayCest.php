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
