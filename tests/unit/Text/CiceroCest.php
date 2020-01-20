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
class CiceroCest
{
	use Framework\Placeholder\Tests\Text\LanguageTestTrait;

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function testGenerator(Framework\Test\UnitTester $I) : void
	{
		$expectation = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.';
		$textGenerator = new Framework\Placeholder\Text\Cicero();

		$I->assertEquals($expectation, $textGenerator->getWords(10));
	}
}
