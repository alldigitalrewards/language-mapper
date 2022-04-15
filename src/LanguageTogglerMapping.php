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
            'es_CL' => [
                'main' => 'Spanish (CL)',
                'item' => 'Spanish - CL',
                'flag' => $this->imageBasePath . '/es_CL.png',
            ],
            'es_CR' => [
                'main' => 'Spanish (CR)',
                'item' => 'Spanish - CR',
                'flag' => $this->imageBasePath . '/es_CR.png',
            ],
            'es_GT' => [
                'main' => 'Spanish (GT)',
                'item' => 'Spanish - GT',
                'flag' => $this->imageBasePath . '/es_GT.png',
            ],
            'es_MX' => [
                'main' => 'Spanish (MX)',
                'item' => 'Spanish - MX',
                'flag' => $this->imageBasePath . '/es_MX.png',
            ],
            'es_PE' => [
                'main' => 'Spanish (PE)',
                'item' => 'Spanish - PE',
                'flag' => $this->imageBasePath . '/es_PE.png',
            ],
            'es_PR' => [
                'main' => 'Spanish (PR)',
                'item' => 'Spanish - PR',
                'flag' => $this->imageBasePath . '/es_PR.png',
            ],
        ];
    }
}
