<?php

namespace AllDigitalRewards\LanguageMapper;

class LanguageMapper
{
    const DEFAULT_LANGUAGE = 'en_US';
    const ACCEPTABLE_LANGUAGES = [
        'es_ES',
        'es_US',
        'en_US',
        'de_DE',
        'fr_CA',
        'fr_FR',
        'hi_IN',
        'it_IT',
        'ja_JP',
        'ko_KR',
        'ms_MY',
        'nl_NL',
        'pt_BR',
        'ru_RU',
        'zh_Hans_CN',
    ];
    const TWO_CHAR_LOCALE_MAPPER = [
        'en' => 'en_US',
        'es' => 'es_US',
        'de' => 'de_DE',
        'fr' => 'fr_CA',
        'hi' => 'hi_IN',
        'it' => 'it_IT',
        'ja' => 'ja_JP',
        'ko' => 'ko_KR',
        'nl' => 'nl_NL',
        'pt' => 'pt_BR',
        'ru' => 'ru_RU',
        'zh' => 'zh_Hans_CN',
    ];

    /**
     * @var string
     */
    private $language = 'en_US';

    /**
     * @param string $language
     */
    public function __construct(string $language)
    {
        $this->setLanguage($language);
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        if (empty($language) === true || empty(trim($language)) === true) {
            $this->language = self::DEFAULT_LANGUAGE;
            return;
        }
        $this->language = $this->hydrateLanguage($language);
    }

    private function hydrateLanguage(string $language): string
    {
        $language = $this->formatLanguageStringForHydration($language);

        if (in_array($language, self::ACCEPTABLE_LANGUAGES) === true) {
            return $language;
        }

        foreach (self::TWO_CHAR_LOCALE_MAPPER as $shortCode => $longCode) {
            if (strtolower($language) === $shortCode) {
                return $longCode;
            }
        }

        return self::DEFAULT_LANGUAGE;
    }

    private function formatLanguageStringForHydration(string $language)
    {
        $language = trim($language);
        return str_replace("-", "_", $language);
    }
}
