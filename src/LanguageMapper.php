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

    /**
     * @var string
     */
    private string $language = 'en_US';

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
        $language = trim($language);
        $this->language = $this->hydrateLanguage($language);
    }

    private function hydrateLanguage(string $language): string
    {
        if (in_array($language, self::ACCEPTABLE_LANGUAGES) === true) {
            return $language;
        }

        return self::DEFAULT_LANGUAGE;
    }
}
