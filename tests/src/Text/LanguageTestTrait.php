<?php
/**
 * @author Timon Kreis <mail@timonkreis.de>
 * @copyright 2020 Timon Kreis
 * @license http://www.opensource.org/licenses/mit-license.html
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
