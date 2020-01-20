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
 */
abstract class AbstractText
{
	/**
	 * @var string
	 */
	protected $language = '*';

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
	public function setLanguage(string $language) : AbstractText
	{
		$this->language = isset($this->words[$language]) ? $language : '*';

		return $this;
	}

	/**
	 * Get the desired amount of words
	 *
	 * @param int|null $count
	 * @return string
	 */
	public function getWords(int $count = null) : string
	{
		$text = '';
		$wordCount = count($this->words[$this->language]);

		for ($i = 0; $i < ($count ?? $wordCount); ++$i) {
			if ($i == $wordCount) {
				$i = 0;
				$count -= $wordCount;
			}

			$text .= $this->words[$this->language][$i] . ' ';
		}

		return rtrim($text, '!:,. ') . '.';
	}

	/**
	 * Get the desired amount of paragraphs
	 *
	 * @param int $count
	 * @return string
	 */
	public function getParagraphs(int $count) : string
	{
		$text = '';

		for ($i = 0; $i < $count; ++$i) {
			$text .= implode(' ', $this->words[$this->language]) . PHP_EOL;
		}

		return rtrim($text);
	}
}
