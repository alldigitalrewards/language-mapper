<?php

namespace AllDigitalRewards\LanguageMapper;

class LanguageMapper
{
    const DEFAULT_LANGUAGE = 'en_US';
    const ACCEPTABLE_LANGUAGES = [
        'pt_BR', // Brazilian Portuguese
        'en_GB', // United Kingdom English
        'fr_FR', // France French
        'de_DE', // Germany German
        'hi_IN', // India Hindi
        'ja_JP', // Japan Japanese
        'ko_KR', // South Korea Korean
        'zh_CN', // China Simplified Chinese
        'zh_TW', // Taiwan Traditional Chinese
        'nl_NL', // Netherlands Dutch
        'nl_BE', // Belgium Dutch
        'ms_SG', // Singapore Malay
        'ml_IN', // India Malayalam
        'fr_CA', // Canada French
        'ru_RU', // Russia Russian
        'es_ES', // Spain Spanish
        'it_IT', // Italy Italian
        'es_US', // United States Spanish
        'en_US', // United States English
        'es_CL', // Chile Spanish
        'es_CR', // Costa Rica Spanish
        'es_GT', // Guatemala Spanish
        'es_MX', // Mexico Spanish
        'es_PE', // Peru Spanish
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
    public function setLanguage(string $language)
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

        return self::DEFAULT_LANGUAGE;
    }

    private function formatLanguageStringForHydration(string $language)
    {
        $language = trim($language);
        return str_replace("-", "_", $language);
    }
}
