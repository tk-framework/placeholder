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
class LoremIpsumCest
{
	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function testGenerator(Framework\Test\UnitTester $I) : void
	{
		$expectation = 'Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod.';
		$textGenerator = new Framework\Placeholder\Text\LoremIpsum();

		$I->assertEquals($expectation, $textGenerator->getWords(10));
	}
}
