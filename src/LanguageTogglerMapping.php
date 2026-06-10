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
                'label' => 'Portuguese',
                'flag' => $this->imageBasePath . '/pt_BR.png',
            ],
            'pt_PT' => [
                'main' => 'Portuguese (PT)',
                'item' => 'Portuguese - PT',
                'label' => 'Portuguese',
                'flag' => $this->imageBasePath . '/pt_PT.png',
            ],
            'en_GB' => [
                'main' => 'English (UK)',
                'item' => 'English - UK',
                'label' => 'English',
                'flag' => $this->imageBasePath . '/en_GB.png',
            ],
            'en_PH' => [
                'main' => 'English (PH)',
                'item' => 'English - PH',
                'label' => 'English',
                'flag' => $this->imageBasePath . '/en_PH.png',
            ],
            'en_NZ' => [
                'main' => 'English (NZ)',
                'item' => 'English - NZ',
                'label' => 'English',
                'flag' => $this->imageBasePath . '/en_NZ.png',
            ],
            'en_AU' => [
                'main' => 'English (AU)',
                'item' => 'English - AU',
                'label' => 'English',
                'flag' => $this->imageBasePath . '/en_AU.png',
            ],
            'en_IE' => [
                'main' => 'English (IE)',
                'item' => 'English - IE',
                'label' => 'English',
                'flag' => $this->imageBasePath . '/en_IE.png',
            ],
            'ga_IE' => [
                'main' => 'Gaelic (IE)',
                'item' => 'Gaelic - IE',
                'label' => 'Gaelic',
                'flag' => $this->imageBasePath . '/ga_IE.png',
            ],
            'fr_FR' => [
                'main' => 'French (FR)',
                'item' => 'French - FR',
                'label' => 'French',
                'flag' => $this->imageBasePath . '/fr_FR.png',
            ],
            'de_DE' => [
                'main' => 'German (DE)',
                'item' => 'German - DE',
                'label' => 'German',
                'flag' => $this->imageBasePath . '/de_DE.png',
            ],
            'de_CH' => [
                'main' => 'Swiss (CH)',
                'item' => 'Swiss - CH',
                'label' => 'Swiss',
                'flag' => $this->imageBasePath . '/de_CH.png',
            ],
            'de_AT' => [
                'main' => 'Austrian (AT)',
                'item' => 'Austrian - AT',
                'label' => 'Austrian',
                'flag' => $this->imageBasePath . '/de_AT.png',
            ],
            'hi_IN' => [
                'main' => 'Hindu (IN)',
                'item' => 'Hindu - IN',
                'label' => 'Hindu',
                'flag' => $this->imageBasePath . '/hi_IN.png',
            ],
            'ja_JP' => [
                'main' => 'Japanese (JP)',
                'item' => 'Japanese - JP',
                'label' => 'Japanese',
                'flag' => $this->imageBasePath . '/ja_JP.png',
            ],
            'ko_KR' => [
                'main' => 'Korean (KR)',
                'item' => 'Korean - KR',
                'label' => 'Korean',
                'flag' => $this->imageBasePath . '/ko_KR.png',
            ],
            'zh_CN' => [
                'main' => 'Chinese (CN)',
                'item' => 'Chinese - CN',
                'label' => 'Chinese',
                'flag' => $this->imageBasePath . '/zh_CN.png',
            ],
            'zh_TW' => [
                'main' => 'Chinese (TW)',
                'item' => 'Chinese - TW',
                'label' => 'Chinese',
                'flag' => $this->imageBasePath . '/zh_TW.png',
            ],
            'zh_MO' => [
                'main' => 'Chinese (MO)',
                'item' => 'Chinese - MO',
                'label' => 'Chinese',
                'flag' => $this->imageBasePath . '/zh_MO.png',
            ],
            'zh_SG' => [
                'main' => 'Chinese (SG)',
                'item' => 'Chinese - SG',
                'label' => 'Chinese',
                'flag' => $this->imageBasePath . '/zh_SG.png',
            ],
            'zh_HK' => [
                'main' => 'Chinese (HK)',
                'item' => 'Chinese - HK',
                'label' => 'Chinese',
                'flag' => $this->imageBasePath . '/zh_HK.png',
            ],
            'nl_NL' => [
                'main' => 'Dutch (NL)',
                'item' => 'Dutch - NL',
                'label' => 'Dutch',
                'flag' => $this->imageBasePath . '/nl_NL.png',
            ],
            'nl_BE' => [
                'main' => 'Dutch (BE)',
                'item' => 'Dutch - BE',
                'label' => 'Dutch',
                'flag' => $this->imageBasePath . '/nl_BE.png',
            ],
            'ml_IN' => [
                'main' => 'Malayalam (IN)',
                'item' => 'Malayalam - IN',
                'label' => 'Malayalam',
                'flag' => $this->imageBasePath . '/ml_IN.png',
            ],
            'fr_CA' => [
                'main' => 'French (CA)',
                'item' => 'French - CA',
                'label' => 'French',
                'flag' => $this->imageBasePath . '/fr_CA.png',
            ],
            'ru_RU' => [
                'main' => 'Russian (RU)',
                'item' => 'Russian - RU',
                'label' => 'Russian',
                'flag' => $this->imageBasePath . '/ru_RU.png',
            ],
            'es_ES' => [
                'main' => 'Espanol (ES)',
                'item' => 'Espanol - ES',
                'label' => 'Espanol',
                'flag' => $this->imageBasePath . '/es_ES.png',
            ],
            'it_IT' => [
                'main' => 'Italian (IT)',
                'item' => 'Italian - IT',
                'label' => 'Italian',
                'flag' => $this->imageBasePath . '/it_IT.png',
            ],
            'es_US' => [
                'main' => 'Espanol (US)',
                'item' => 'Espanol - US',
                'label' => 'Espanol',
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
            'en_US' => [
                'main' => 'English (US)',
                'item' => 'English - US',
                'label' => 'English',
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
            'es_CL' => [
                'main' => 'Spanish (CL)',
                'item' => 'Spanish - CL',
                'label' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_CL.png',
            ],
            'es_CR' => [
                'main' => 'Spanish (CR)',
                'item' => 'Spanish - CR',
                'label' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_CR.png',
            ],
            'es_GT' => [
                'main' => 'Spanish (GT)',
                'item' => 'Spanish - GT',
                'label' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_GT.png',
            ],
            'es_MX' => [
                'main' => 'Spanish (MX)',
                'item' => 'Spanish - MX',
                'label' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_MX.png',
            ],
            'es_PE' => [
                'main' => 'Spanish (PE)',
                'item' => 'Spanish - PE',
                'label' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_PE.png',
            ],
            'es_PR' => [
                'main' => 'Spanish (PR)',
                'item' => 'Spanish - PR',
                'label' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_PR.png',
            ],
            'es_UY' => [
                'main' => 'Spanish (UY)',
                'item' => 'Spanish - UY',
                'label' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_UY.png',
            ],
            'es_CO' => [
                'main' => 'Spanish (CO)',
                'item' => 'Spanish - CO',
                'label' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_CO.png',
            ],
            'es_AR' => [
                'main' => 'Spanish (AR)',
                'item' => 'Spanish - AR',
                'label' => 'Spanish',
                'flag' => $this->imageBasePath . '/es_AR.png',
            ],
            'ur_PK' => [
                'main' => 'Pakistani (PK)',
                'item' => 'Pakistani - PK',
                'label' => 'Pakistani',
                'flag' => $this->imageBasePath . '/ur_PK.png',
            ],
            'vi_VN' => [
                'main' => 'Vietnamese (VN)',
                'item' => 'Vietnamese - VN',
                'label' => 'Vietnamese',
                'flag' => $this->imageBasePath . '/vi_VN.png',
            ],
            'tr_TR' => [
                'main' => 'Turkish (TR)',
                'item' => 'Turkish - TR',
                'label' => 'Turkish',
                'flag' => $this->imageBasePath . '/tr_TR.png',
            ],
            'th_TH' => [
                'main' => 'Thai (TH)',
                'item' => 'Thai - TH',
                'label' => 'Thai',
                'flag' => $this->imageBasePath . '/th_TH.png',
            ],
            'ar_SA' => [
                'main' => 'Arabic (SA)',
                'item' => 'Arabic - SA',
                'label' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_SA.png',
            ],
            'ar_QA' => [
                'main' => 'Arabic (QA)',
                'item' => 'Arabic - QA',
                'label' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_QA.png',
            ],
            'ar_OM' => [
                'main' => 'Arabic (OM)',
                'item' => 'Arabic - OM',
                'label' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_OM.png',
            ],
            'ar_KW' => [
                'main' => 'Arabic (KW)',
                'item' => 'Arabic - KW',
                'label' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_KW.png',
            ],
            'ar_JO' => [
                'main' => 'Arabic (JO)',
                'item' => 'Arabic - JO',
                'label' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_JO.png',
            ],
            'ar_EG' => [
                'main' => 'Egyptian (EG)',
                'item' => 'Egyptian - EG',
                'label' => 'Egyptian',
                'flag' => $this->imageBasePath . '/ar_EG.png',
            ],
            'ar_BH' => [
                'main' => 'Arabic (BH)',
                'item' => 'Arabic - BH',
                'label' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_BH.png',
            ],
            'ar_AE' => [
                'main' => 'Arabic (AE)',
                'item' => 'Arabic - AE',
                'label' => 'Arabic',
                'flag' => $this->imageBasePath . '/ar_AE.png',
            ],
            'nn_NO' => [
                'main' => 'Norwegian (NO)',
                'item' => 'Norwegian - NO',
                'label' => 'Norwegian',
                'flag' => $this->imageBasePath . '/nn_NO.png',
            ],
            'si_LK' => [
                'main' => 'Sri Lankan (LK)',
                'item' => 'Sri Lankan - LK',
                'label' => 'Sri Lankan',
                'flag' => $this->imageBasePath . '/si_LK.png',
            ],
            'he_IL' => [
                'main' => 'Israeli (IL)',
                'item' => 'Israeli - IL',
                'label' => 'Israeli',
                'flag' => $this->imageBasePath . '/he_IL.png',
            ],
            'id_ID' => [
                'main' => 'Indonesian (ID)',
                'item' => 'Indonesian - ID',
                'label' => 'Indonesian',
                'flag' => $this->imageBasePath . '/id_ID.png',
            ],
            'hu_HU' => [
                'main' => 'Hungarian (HU)',
                'item' => 'Hungarian - HU',
                'label' => 'Hungarian',
                'flag' => $this->imageBasePath . '/hu_HU.png',
            ],
            'hr_HR' => [
                'main' => 'Croatian (HR)',
                'item' => 'Croatian - HR',
                'label' => 'Croatian',
                'flag' => $this->imageBasePath . '/hr_HR.png',
            ],
            'bn_BD' => [
                'main' => 'Bengali (BD)',
                'item' => 'Bengali - BD',
                'label' => 'Bengali',
                'flag' => $this->imageBasePath . '/bn_BD.png',
            ],
            'ro_RO' => [
                'main' => 'Romanian (RO)',
                'item' => 'Romanian - RO',
                'label' => 'Romanian',
                'flag' => $this->imageBasePath . '/ro_RO.png',
            ],
            'sl_SI' => [
                'main' => 'Slovakian (SI)',
                'item' => 'Slovakian - SI',
                'label' => 'Slovakian',
                'flag' => $this->imageBasePath . '/sl_SI.png',
            ],
            'sv_SE' => [
                'main' => 'Swedish (SE)',
                'item' => 'Swedish - SE',
                'label' => 'Swedish',
                'flag' => $this->imageBasePath . '/sv_SE.png',
            ],
            'pl_PL' => [
                'main' => 'Polish (PL)',
                'item' => 'Polish - PL',
                'label' => 'Polish',
                'flag' => $this->imageBasePath . '/pl_PL.png',
            ],
            'el_GR' => [
                'main' => 'Greek (GR)',
                'item' => 'Greek - GR',
                'label' => 'Greek',
                'flag' => $this->imageBasePath . '/el_GR.png',
            ],
            'fi_FI' => [
                'main' => 'Finnish (FI)',
                'item' => 'Finnish - FI',
                'label' => 'Finnish',
                'flag' => $this->imageBasePath . '/fi_FI.png',
            ],
            'sv_FI' => [
                'main' => 'Finnish (SV)',
                'item' => 'Finnish - SV',
                'label' => 'Finnish',
                'flag' => $this->imageBasePath . '/sv_FI.png',
            ],
            'da_DK' => [
                'main' => 'Danish (DK)',
                'item' => 'Danish - DK',
                'label' => 'Danish',
                'flag' => $this->imageBasePath . '/da_DK.png',
            ],
            'cs_CZ' => [
                'main' => 'Czech (CZ)',
                'item' => 'Czech - CZ',
                'label' => 'Czech',
                'flag' => $this->imageBasePath . '/cs_CZ.png',
            ],
            'bg_BG' => [
                'main' => 'Bulgarian (BG)',
                'item' => 'Bulgarian - BG',
                'label' => 'Bulgarian',
                'flag' => $this->imageBasePath . '/bg_BG.png',
            ],
        ];
    }
}
