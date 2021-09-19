<?php

namespace AllDigitalRewards\LanguageMapper;

class LanguageTogglerMapping
{
    /**
     * @var string
     */
    private $imgaeBasePath = 'https://storage.googleapis.com/language_mapping/flags';

    const CURRENT_LOCALES = [
        'en_US',
        'es_US',
        'es_ES',
    ];

    public function getMapping(): array
    {
        $container = [];
        foreach (self::CURRENT_LOCALES as $locale) {
            $container[$locale] = $this->getLanguageMapping()[$locale];
        }
        return $container;
    }

    public function getLanguageMapping(): array
    {
        return [
            'en_US' => [
                'main' => _('English (US)'),
                'item' => _('English - EN'),
                'flag' => $this->imgaeBasePath . '/en_US.png',
            ],
            'es_US' => [
                'main' => _('Espanol (US)'),
                'item' => _('Espanol - US'),
                'flag' => $this->imgaeBasePath . '/es_US.png',
            ],
            'es_ES' => [
                'main' => _('Espanol (ES)'),
                'item' => _('Espanol - ES'),
                'flag' => $this->imgaeBasePath . '/es_ES.png',
            ],
            'de_DE' => [
                'main' => _('German (DE)'),
                'item' => _('German - DE'),
                'flag' => $this->imgaeBasePath . '/de_DE.png',
            ],
            'fr_CA' => [
                'main' => _('French (CA)'),
                'item' => _('French - CA'),
                'flag' => $this->imgaeBasePath . '/fr_CA.png',
            ],
            'fr_FR' => [
                'main' => _('French (FR)'),
                'item' => _('French - FR'),
                'flag' => $this->imgaeBasePath . '/fr_FR.png',
            ],
            'hi_IN' => [
                'main' => _('Hindu (IN)'),
                'item' => _('Hindu - IN'),
                'flag' => $this->imgaeBasePath . '/hi_IN.png',
            ],
            'ja_JP' => [
                'main' => _('Japanese (JP)'),
                'item' => _('Japanese - JP'),
                'flag' => $this->imgaeBasePath . '/ja_JP.png',
            ],
            'ko_KR' => [
                'main' => _('Korean (KR)'),
                'item' => _('Korean - KR'),
                'flag' => $this->imgaeBasePath . '/ko_KR.png',
            ],
            'ms_MY' => [
                'main' => _('Malaysian (MY)'),
                'item' => _('Malaysian - MY'),
                'flag' => $this->imgaeBasePath . '/ms_MY.png',
            ],
            'nl_NL' => [
                'main' => _('Dutch (NL)'),
                'item' => _('Dutch - NL'),
                'flag' => $this->imgaeBasePath . '/nl_NL.png',
            ],
            'pt_BR' => [
                'main' => _('Portuguese (BR)'),
                'item' => _('Portuguese - BR'),
                'flag' => $this->imgaeBasePath . '/pt_BR.png',
            ],
            'ru_RU' => [
                'main' => _('Russian (RU)'),
                'item' => _('Russian - RU'),
                'flag' => $this->imgaeBasePath . '/ru_RU.png',
            ],
            'zh_Hans_CN' => [
                'main' => _('Chinese (Hans_CN)'),
                'item' => _('Chinese - Hans_CN'),
                'flag' => $this->imgaeBasePath . '/zh_Hans_CN.png',
            ],
        ];
    }
}
