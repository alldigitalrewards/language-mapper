<?php

namespace AllDigitalRewards\LanguageMapper;

class LanguageMapper
{
    const DEFAULT_LANGUAGE = 'en_US';
    const ACCEPTABLE_LANGUAGES = [
        'pt_BR', // Brazilian Portuguese
        'pt_PT', // Portugal Portuguese
        'en_GB', // United Kingdom English
        'en_AU', // Australian English
        'en_PH', // Filipino English
        'fr_FR', // France French
        'de_DE', // Germany German
        'de_AT', // Austrian
        'de_CH', // Swiss
        'hi_IN', // India Hindi
        'ja_JP', // Japan Japanese
        'ko_KR', // South Korea Korean
        'zh_CN', // China Simplified Chinese
        'zh_TW', // Taiwan Traditional Chinese
        'zh_HK', // Hong Kong Chinese
        'zh_SG', // Singapore
        'zh_MO', // Macao
        'nl_NL', // Netherlands Dutch
        'nl_BE', // Belgium Dutch
        'ml_IN', // India Malayalam
        'fr_CA', // Canada French
        'ru_RU', // Russia Russian
        'es_ES', // Spain Spanish
        'it_IT', // Italy Italian
        'es_US', // United States Spanish
        'en_US', // United States English
        'es_CL', // Chile Spanish
        'es_CR', // Costa Rica Spanish
        'es_CO', // Colombian Spanish
        'es_GT', // Guatemala Spanish
        'es_MX', // Mexico Spanish
        'es_PE', // Peru Spanish
        'es_PR', // Puerto Rico Spanish
        'es_AR', // Argentian Spanish
        'es_UY', // Uruguay Spanish
        'bg_BG', // Bulgarian
        'cs_CZ', // Czech Republic
        'da_DK', // Denmark
        'sv_FI', // Finnish
        'fi_FI', // Finnish
        'el_GR', // Greek
        'ga_IE', // Irish
        'en_IE', // Irish
        'pl_PL', // Polish
        'sv_SE', // Swedish
        'sl_SI', // Slovenia
        'ro_RO', // Romania
        'ar_AE', // United Arab Emirates
        'bn_BD', // Bangladesh
        'ar_BH', // Bahrain
        'ar_EG', // Egyptian
        'hr_HR', // Croatian
        'hu_HU', // Hungarian
        'id_ID', // Indonesian
        'he_IL', // Israeli
        'ar_JO', // Jordan
        'ar_KW', // Kuwait
        'si_LK', // Sri Lankan
        'nn_NO', // Norway
        'en_NZ', // New Zealand
        'ar_OM', // Oman
        'ar_QA', // Qatar
        'ar_SA', // Saudi Arabian
        'th_TH', // Thailand
        'tr_TR', // Turkey
        'vi_VN', // Vietnamese
        'ur_PK', // Pakistani
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
