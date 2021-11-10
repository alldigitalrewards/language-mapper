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
                'main' => 'English (US)',
                'item' => 'English - US',
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
            'es_US' => [
                'main' => 'Espanol (US)',
                'item' => 'Espanol - US',
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
            'es_ES' => [
                'main' => 'Espanol (ES)',
                'item' => 'Espanol - ES',
                'flag' => $this->imageBasePath . '/es_ES.png',
            ],
            'de_DE' => [
                'main' => 'German (DE)',
                'item' => 'German - DE',
                'flag' => $this->imageBasePath . '/de_DE.png',
            ],
            'fr_CA' => [
                'main' => 'French (CA)',
                'item' => 'French - CA',
                'flag' => $this->imageBasePath . '/fr_CA.png',
            ],
            'fr_FR' => [
                'main' => 'French (FR)',
                'item' => 'French - FR',
                'flag' => $this->imageBasePath . '/fr_FR.png',
            ],
            'hi_IN' => [
                'main' => 'Hindu (IN)',
                'item' => 'Hindu - IN',
                'flag' => $this->imageBasePath . '/hi_IN.png',
            ],
            'ja_JP' => [
                'main' => 'Japanese (JP)',
                'item' => 'Japanese - JP',
                'flag' => $this->imageBasePath . '/ja_JP.png',
            ],
            'ko_KR' => [
                'main' => 'Korean (KR)',
                'item' => 'Korean - KR',
                'flag' => $this->imageBasePath . '/ko_KR.png',
            ],
            'it_IT' => [
                'main' => 'Italian (IT)',
                'item' => 'Italian - IT',
                'flag' => $this->imageBasePath . '/it_IT.png',
            ],
            'ms_MY' => [
                'main' => 'Malaysian (MY)',
                'item' => 'Malaysian - MY',
                'flag' => $this->imageBasePath . '/ms_MY.png',
            ],
            'nl_NL' => [
                'main' => 'Dutch (NL)',
                'item' => 'Dutch - NL',
                'flag' => $this->imageBasePath . '/nl_NL.png',
            ],
            'pt_BR' => [
                'main' => 'Portuguese (BR)',
                'item' => 'Portuguese - BR',
                'flag' => $this->imageBasePath . '/pt_BR.png',
            ],
            'ru_RU' => [
                'main' => 'Russian (RU)',
                'item' => 'Russian - RU',
                'flag' => $this->imageBasePath . '/ru_RU.png',
            ],
            'zh_Hans_CN' => [
                'main' => 'Chinese (Hans_CN)',
                'item' => 'Chinese - Hans_CN',
                'flag' => $this->imageBasePath . '/zh_Hans_CN.png',
            ],
        ];
    }
}
