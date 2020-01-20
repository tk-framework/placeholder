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
