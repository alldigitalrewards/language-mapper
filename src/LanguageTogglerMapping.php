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
            'pt_BR' => [
                'main' => 'Portuguese (BR)',
                'item' => 'Portuguese - BR',
                'flag' => $this->imageBasePath . '/pt_BR.png',
            ],
            'en_GB' => [
                'main' => 'English (UK)',
                'item' => 'English - UK',
                'flag' => $this->imageBasePath . '/en_GB.png',
            ],
            'fr_FR' => [
                'main' => 'French (FR)',
                'item' => 'French - FR',
                'flag' => $this->imageBasePath . '/fr_FR.png',
            ],
            'de_DE' => [
                'main' => 'German (DE)',
                'item' => 'German - DE',
                'flag' => $this->imageBasePath . '/de_DE.png',
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
            'zh_CN' => [
                'main' => 'Chinese (CN)',
                'item' => 'Chinese - CN',
                'flag' => $this->imageBasePath . '/zh_CN.png',
            ],
            'zh_TW' => [
                'main' => 'Chinese (TW)',
                'item' => 'Chinese - TW',
                'flag' => $this->imageBasePath . '/zh_TW.png',
            ],
            'nl_NL' => [
                'main' => 'Dutch (NL)',
                'item' => 'Dutch - NL',
                'flag' => $this->imageBasePath . '/nl_NL.png',
            ],
            'nl_BE' => [
                'main' => 'Dutch (BE)',
                'item' => 'Dutch - BE',
                'flag' => $this->imageBasePath . '/nl_BE.png',
            ],
            'ms_SG' => [
                'main' => 'Malaysian (SG)',
                'item' => 'Malaysian - SG',
                'flag' => $this->imageBasePath . '/ms_SG.png',
            ],
            'ml_IN' => [
                'main' => 'Malayalam (IN)',
                'item' => 'Malayalam - IN',
                'flag' => $this->imageBasePath . '/ml_IN.png',
            ],
            'fr_CA' => [
                'main' => 'French (CA)',
                'item' => 'French - CA',
                'flag' => $this->imageBasePath . '/fr_CA.png',
            ],
            'ru_RU' => [
                'main' => 'Russian (RU)',
                'item' => 'Russian - RU',
                'flag' => $this->imageBasePath . '/ru_RU.png',
            ],
            'es_ES' => [
                'main' => 'Espanol (ES)',
                'item' => 'Espanol - ES',
                'flag' => $this->imageBasePath . '/es_ES.png',
            ],
            'it_IT' => [
                'main' => 'Italian (IT)',
                'item' => 'Italian - IT',
                'flag' => $this->imageBasePath . '/it_IT.png',
            ],
            'es_US' => [
                'main' => 'Espanol (US)',
                'item' => 'Espanol - US',
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
            'en_US' => [
                'main' => 'English (US)',
                'item' => 'English - US',
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
        ];
    }
}
