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
                'main' => 'Portuguese',
                'item' => 'Portuguese',
                'flag' => $this->imageBasePath . '/pt_BR.png',
            ],
            'pt_PT' => [
                'main' => 'Portuguese',
                'item' => 'Portuguese',
                'flag' => $this->imageBasePath . '/pt_PT.png',
            ],
            'en_GB' => [
                'main' => 'English',
                'item' => 'English',
                'flag' => $this->imageBasePath . '/en_GB.png',
            ],
            'en_PH' => [
                'main' => 'English',
                'item' => 'English',
                'flag' => $this->imageBasePath . '/en_PH.png',
            ],
            'en_NZ' => [
                'main' => 'English',
                'item' => 'English',
                'flag' => $this->imageBasePath . '/en_NZ.png',
            ],
            'en_AU' => [
                'main' => 'English',
                'item' => 'English',
                'flag' => $this->imageBasePath . '/en_AU.png',
            ],
            'en_IE' => [
                'main' => 'English',
                'item' => 'English',
                'flag' => $this->imageBasePath . '/en_IE.png',
            ],
            'ga_IE' => [
                'main' => 'Gaelic',
                'item' => 'Gaelic',
                'flag' => $this->imageBasePath . '/ga_IE.png',
            ],
            'fr_FR' => [
                'main' => 'French',
                'item' => 'French',
                'flag' => $this->imageBasePath . '/fr_FR.png',
            ],
            'de_DE' => [
                'main' => 'German',
                'item' => 'German',
                'flag' => $this->imageBasePath . '/de_DE.png',
            ],
            'de_CH' => [
                'main' => 'Swiss',
                'item' => 'Swiss',
                'flag' => $this->imageBasePath . '/de_CH.png',
            ],
            'de_AT' => [
                'main' => 'Austrian',
                'item' => 'Austrian',
                'flag' => $this->imageBasePath . '/de_AT.png',
            ],
            'hi_IN' => [
                'main' => 'Hindu',
                'item' => 'Hindu',
                'flag' => $this->imageBasePath . '/hi_IN.png',
            ],
            'ja_JP' => [
                'main' => 'Japanese',
                'item' => 'Japanese',
                'flag' => $this->imageBasePath . '/ja_JP.png',
            ],
            'ko_KR' => [
                'main' => 'Korean',
                'item' => 'Korean',
                'flag' => $this->imageBasePath . '/ko_KR.png',
            ],
            'zh_CN' => [
                'main' => 'Chinese',
                'item' => 'Chinese',
                'flag' => $this->imageBasePath . '/zh_CN.png',
            ],
            'zh_TW' => [
                'main' => 'Chinese',
                'item' => 'Chinese',
                'flag' => $this->imageBasePath . '/zh_TW.png',
            ],
            'zh_MO' => [
                'main' => 'Chinese',
                'item' => 'Chinese',
                'flag' => $this->imageBasePath . '/zh_MO.png',
            ],
            'zh_SG' => [
                'main' => 'Chinese',
                'item' => 'Chinese',
                'flag' => $this->imageBasePath . '/zh_SG.png',
            ],
            'zh_HK' => [
                'main' => 'Chinese',
                'item' => 'Chinese',
                'flag' => $this->imageBasePath . '/zh_HK.png',
            ],
            'nl_NL' => [
                'main' => 'Dutch',
                'item' => 'Dutch',
                'flag' => $this->imageBasePath . '/nl_NL.png',
            ],
            'nl_BE' => [
                'main' => 'Dutch',
                'item' => 'Dutch',
                'flag' => $this->imageBasePath . '/nl_BE.png',
            ],
            'ml_IN' => [
                'main' => 'Malayalam',
                'item' => 'Malayalam',
                'flag' => $this->imageBasePath . '/ml_IN.png',
            ],
            'fr_CA' => [
                'main' => 'French',
                'item' => 'French',
                'flag' => $this->imageBasePath . '/fr_CA.png',
            ],
            'ru_RU' => [
                'main' => 'Russian',
                'item' => 'Russian',
                'flag' => $this->imageBasePath . '/ru_RU.png',
            ],
            'es_ES' => [
                'main' => 'Espanol',
                'item' => 'Espanol',
                'flag' => $this->imageBasePath . '/es_ES.png',
            ],
            'it_IT' => [
                'main' => 'Italian',
                'item' => 'Italian',
                'flag' => $this->imageBasePath . '/it_IT.png',
            ],
            'es_US' => [
                'main' => 'Espanol',
                'item' => 'Espanol',
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
            'en_US' => [
                'main' => 'English',
                'item' => 'English',
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
            'es_CL' => [
                'main' => 'Spanish',
                'item' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_CL.png',
            ],
            'es_CR' => [
                'main' => 'Spanish',
                'item' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_CR.png',
            ],
            'es_GT' => [
                'main' => 'Spanish',
                'item' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_GT.png',
            ],
            'es_MX' => [
                'main' => 'Spanish',
                'item' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_MX.png',
            ],
            'es_PE' => [
                'main' => 'Spanish',
                'item' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_PE.png',
            ],
            'es_PR' => [
                'main' => 'Spanish',
                'item' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_PR.png',
            ],
            'es_UY' => [
                'main' => 'Spanish',
                'item' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_UY.png',
            ],
            'es_CO' => [
                'main' => 'Spanish',
                'item' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_CO.png',
            ],
            'es_AR' => [
                'main' => 'Spanish',
                'item' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_AR.png',
            ],
            'ur_PK' => [
                'main' => 'Pakistani',
                'item' => 'Pakistani',
                'flag' => $this->imageBasePath . '/ur_PK.png',
            ],
            'vi_VN' => [
                'main' => 'Vietnamese',
                'item' => 'Vietnamese',
                'flag' => $this->imageBasePath . '/vi_VN.png',
            ],
            'tr_TR' => [
                'main' => 'Turkish',
                'item' => 'Turkish',
                'flag' => $this->imageBasePath . '/tr_TR.png',
            ],
            'th_TH' => [
                'main' => 'Thai',
                'item' => 'Thai',
                'flag' => $this->imageBasePath . '/th_TH.png',
            ],
            'ar_SA' => [
                'main' => 'Arabic',
                'item' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_SA.png',
            ],
            'ar_QA' => [
                'main' => 'Arabic',
                'item' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_QA.png',
            ],
            'ar_OM' => [
                'main' => 'Arabic',
                'item' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_OM.png',
            ],
            'ar_KW' => [
                'main' => 'Arabic',
                'item' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_KW.png',
            ],
            'ar_JO' => [
                'main' => 'Arabic',
                'item' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_JO.png',
            ],
            'ar_EG' => [
                'main' => 'Egyptian',
                'item' => 'Egyptian',
                'flag' => $this->imageBasePath . '/ar_EG.png',
            ],
            'ar_BH' => [
                'main' => 'Arabic',
                'item' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_BH.png',
            ],
            'ar_AE' => [
                'main' => 'Arabic',
                'item' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_AE.png',
            ],
            'nn_NO' => [
                'main' => 'Norwegian',
                'item' => 'Norwegian',
                'flag' => $this->imageBasePath . '/nn_NO.png',
            ],
            'si_LK' => [
                'main' => 'Sri Lankan',
                'item' => 'Sri Lankan',
                'flag' => $this->imageBasePath . '/si_LK.png',
            ],
            'he_IL' => [
                'main' => 'Israeli',
                'item' => 'Israeli',
                'flag' => $this->imageBasePath . '/he_IL.png',
            ],
            'id_ID' => [
                'main' => 'Indonesian',
                'item' => 'Indonesian',
                'flag' => $this->imageBasePath . '/id_ID.png',
            ],
            'hu_HU' => [
                'main' => 'Hungarian',
                'item' => 'Hungarian',
                'flag' => $this->imageBasePath . '/hu_HU.png',
            ],
            'hr_HR' => [
                'main' => 'Croatian',
                'item' => 'Croatian',
                'flag' => $this->imageBasePath . '/hr_HR.png',
            ],
            'bn_BD' => [
                'main' => 'Bengali',
                'item' => 'Bengali',
                'flag' => $this->imageBasePath . '/bn_BD.png',
            ],
            'ro_RO' => [
                'main' => 'Romanian',
                'item' => 'Romanian',
                'flag' => $this->imageBasePath . '/ro_RO.png',
            ],
            'sl_SI' => [
                'main' => 'Slovakian',
                'item' => 'Slovakian',
                'flag' => $this->imageBasePath . '/sl_SI.png',
            ],
            'sv_SE' => [
                'main' => 'Swedish',
                'item' => 'Swedish',
                'flag' => $this->imageBasePath . '/sv_SE.png',
            ],
            'pl_PL' => [
                'main' => 'Polish',
                'item' => 'Polish',
                'flag' => $this->imageBasePath . '/pl_PL.png',
            ],
            'el_GR' => [
                'main' => 'Greek',
                'item' => 'Greek',
                'flag' => $this->imageBasePath . '/el_GR.png',
            ],
            'fi_FI' => [
                'main' => 'Finnish',
                'item' => 'Finnish',
                'flag' => $this->imageBasePath . '/fi_FI.png',
            ],
            'sv_FI' => [
                'main' => 'Finnish',
                'item' => 'Finnish',
                'flag' => $this->imageBasePath . '/sv_FI.png',
            ],
            'da_DK' => [
                'main' => 'Danish',
                'item' => 'Danish',
                'flag' => $this->imageBasePath . '/da_DK.png',
            ],
            'cs_CZ' => [
                'main' => 'Czech',
                'item' => 'Czech',
                'flag' => $this->imageBasePath . '/cs_CZ.png',
            ],
            'bg_BG' => [
                'main' => 'Bulgarian',
                'item' => 'Bulgarian',
                'flag' => $this->imageBasePath . '/bg_BG.png',
            ],
        ];
    }
}
