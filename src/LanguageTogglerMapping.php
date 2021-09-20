<?php

namespace AllDigitalRewards\LanguageMapper;

class LanguageTogglerMapping
{
    /**
     * @var string
     */
    private $imageBasePath = 'https://storage.googleapis.com/language_mapping/flags';

    public function getMapping(): array
    {
        return [
            'en_US' => [
                'main' => _('English (US)'),
                'item' => _('English - EN'),
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
            'es_US' => [
                'main' => _('Espanol (US)'),
                'item' => _('Espanol - US'),
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
            'es_ES' => [
                'main' => _('Espanol (ES)'),
                'item' => _('Espanol - ES'),
                'flag' => $this->imageBasePath . '/es_ES.png',
            ],
            'de_DE' => [
                'main' => _('German (DE)'),
                'item' => _('German - DE'),
                'flag' => $this->imageBasePath . '/de_DE.png',
            ],
            'fr_CA' => [
                'main' => _('French (CA)'),
                'item' => _('French - CA'),
                'flag' => $this->imageBasePath . '/fr_CA.png',
            ],
            'fr_FR' => [
                'main' => _('French (FR)'),
                'item' => _('French - FR'),
                'flag' => $this->imageBasePath . '/fr_FR.png',
            ],
            'hi_IN' => [
                'main' => _('Hindu (IN)'),
                'item' => _('Hindu - IN'),
                'flag' => $this->imageBasePath . '/hi_IN.png',
            ],
            'ja_JP' => [
                'main' => _('Japanese (JP)'),
                'item' => _('Japanese - JP'),
                'flag' => $this->imageBasePath . '/ja_JP.png',
            ],
            'ko_KR' => [
                'main' => _('Korean (KR)'),
                'item' => _('Korean - KR'),
                'flag' => $this->imageBasePath . '/ko_KR.png',
            ],
            'ms_MY' => [
                'main' => _('Malaysian (MY)'),
                'item' => _('Malaysian - MY'),
                'flag' => $this->imageBasePath . '/ms_MY.png',
            ],
            'nl_NL' => [
                'main' => _('Dutch (NL)'),
                'item' => _('Dutch - NL'),
                'flag' => $this->imageBasePath . '/nl_NL.png',
            ],
            'pt_BR' => [
                'main' => _('Portuguese (BR)'),
                'item' => _('Portuguese - BR'),
                'flag' => $this->imageBasePath . '/pt_BR.png',
            ],
            'ru_RU' => [
                'main' => _('Russian (RU)'),
                'item' => _('Russian - RU'),
                'flag' => $this->imageBasePath . '/ru_RU.png',
            ],
            'zh_Hans_CN' => [
                'main' => _('Chinese (Hans_CN)'),
                'item' => _('Chinese - Hans_CN'),
                'flag' => $this->imageBasePath . '/zh_Hans_CN.png',
            ],
        ];
    }
}
