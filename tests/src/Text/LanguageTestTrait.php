<?php
/**
 * Copyright by Timon Kreis - All Rights Reserved
 * Visit https://www.timonkreis.de
 */
declare(strict_types = 1);

namespace TimonKreis\Framework\Placeholder\Tests\Text;

use TimonKreis\Framework;

/**
 * @package TimonKreis\Framework\Placeholder\Test\Text
 */
trait LanguageTestTrait
{
	/**
	 * @var string
	 */
	protected $language = 'en';

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function testGettingLanguage(Framework\Test\UnitTester $I) : void
	{
		$textGenerator = new Framework\Placeholder\Text\Cicero();

		$I->assertEquals('*', $textGenerator->getLanguage());
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function testSettingLanguage(Framework\Test\UnitTester $I) : void
	{
		$textGenerator = new Framework\Placeholder\Text\Cicero();

		$I->assertEquals('*', $textGenerator->getLanguage());

		$textGenerator->setLanguage($this->language);

		$I->assertEquals($this->language, $textGenerator->getLanguage());
	}
}
