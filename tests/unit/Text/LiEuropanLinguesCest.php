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
