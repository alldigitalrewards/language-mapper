<?php

namespace AllDigitalRewards\LanguageMapper;

class LanguageTogglerMapping
{
    /**
     * Make sure to update this when/if more countries are added
     * to LanguageMapper class
     * @return array[]
     */
    public function getLanguageMapping(): array
    {
        return [
            'en_US' => [
                'main' => _('English (US)'),
                'item' => _('English - EN'),
                'flag' => __DIR__ . '/../images/flags/en_US.png',
            ],
            'es_US' => [
                'main' => _('Espanol (US)'),
                'item' => _('Espanol - US'),
                'flag' => __DIR__ . '/../images/flags/es_US.png',
            ],
            'es_ES' => [
                'main' => _('Espanol (ES)'),
                'item' => _('Espanol - ES'),
                'flag' => __DIR__ . '/../images/flags/es_ES.png',
            ],
            'de_DE' => [
                'main' => _('German (DE)'),
                'item' => _('German - DE'),
                'flag' => __DIR__ . '/../images/flags/de_DE.png',
            ],
            'fr_CA' => [
                'main' => _('French (CA)'),
                'item' => _('French - CA'),
                'flag' => __DIR__ . '/../images/flags/fr_CA.png',
            ],
            'fr_FR' => [
                'main' => _('French (FR)'),
                'item' => _('French - FR'),
                'flag' => __DIR__ . '/../images/flags/fr_FR.png',
            ],
            'hi_IN' => [
                'main' => _('Hindu (IN)'),
                'item' => _('Hindu - IN'),
                'flag' => __DIR__ . '/../images/flags/hi_IN.png',
            ],
            'ja_JP' => [
                'main' => _('Japanese (JP)'),
                'item' => _('Japanese - JP'),
                'flag' => __DIR__ . '/../images/flags/ja_JP.png',
            ],
            'ko_KR' => [
                'main' => _('Korean (KR)'),
                'item' => _('Korean - KR'),
                'flag' => __DIR__ . '/../images/flags/ko_KR.png',
            ],
            'ms_MY' => [
                'main' => _('Malaysian (MY)'),
                'item' => _('Malaysian - MY'),
                'flag' => __DIR__ . '/../images/flags/ms_MY.png',
            ],
            'nl_NL' => [
                'main' => _('Dutch (NL)'),
                'item' => _('Dutch - NL'),
                'flag' => __DIR__ . '/../images/flags/nl_NL.png',
            ],
            'pt_BR' => [
                'main' => _('Portuguese (BR)'),
                'item' => _('Portuguese - BR'),
                'flag' => __DIR__ . '/../images/flags/pt_BR.png',
            ],
            'ru_RU' => [
                'main' => _('Russian (RU)'),
                'item' => _('Russian - RU'),
                'flag' => __DIR__ . '/../images/flags/ru_RU.png',
            ],
            'zh_Hans_CN' => [
                'main' => _('Chinese (Hans_CN)'),
                'item' => _('Chinese - Hans_CN'),
                'flag' => __DIR__ . '/../images/flags/zh_Hans_CN.png',
            ],
        ];
    }
}
