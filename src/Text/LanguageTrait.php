<?php
/**
 * Copyright by Timon Kreis - All Rights Reserved
 * Visit https://www.timonkreis.de
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
