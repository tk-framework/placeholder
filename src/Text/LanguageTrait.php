<?php
/**
 * @author Timon Kreis <mail@timonkreis.de>
 * @copyright 2020 Timon Kreis
 * @license http://www.opensource.org/licenses/mit-license.html
 */
declare(strict_types = 1);

namespace TimonKreis\Framework\Placeholder\Text;

/**
 * @category tk-framework
 * @package placeholder
 *
 * @property array[] $words
 * @property string $language
 */
trait LanguageTrait
{
	/**
	 * Get the language
	 *
	 * @return string
	 */
	public function getLanguage() : string
	{
		return $this->language;
	}

	/**
	 * set the language
	 *
	 * @param string $language
	 * @return $this
	 */
	public function setLanguage(string $language = '*') : AbstractText
	{
		$this->language = isset($this->words[$language]) ? $language : '*';

		return $this;
	}
}
