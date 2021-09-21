<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\LanguageMapper\LanguageMapper;
use AllDigitalRewards\LanguageMapper\LanguageTogglerMapping;
use PHPUnit\Framework\TestCase;

class LanguageMappingTest extends TestCase
{
    public function testReturnsEnUSDefaultLanguageSinceNotFound()
    {
        $mapper = new LanguageMapper('nz_NZ');
        $this->assertSame('en_US', $mapper->getLanguage());
    }

    public function testReturnsEsES()
    {
        $mapper = new LanguageMapper('es_ES');
        $this->assertSame('es_ES', $mapper->getLanguage());
    }

    public function testReturnsAcceptableLanguages()
    {
        $languages = LanguageMapper::ACCEPTABLE_LANGUAGES;
        foreach ($languages as $language) {
            $mapper = new LanguageMapper($language);
            $this->assertSame($language, $mapper->getLanguage());
        }
    }

    public function testShortCodeReturnsLongCode()
    {
        $mapper = new LanguageMapper('fr');
        $this->assertSame('fr_CA', $mapper->getLanguage());
    }

    public function testENLongCodeWithDashesReturnsLongCode()
    {
        $mapper = new LanguageMapper('en-US');
        $this->assertSame('en_US', $mapper->getLanguage());
    }

    public function testEsLongCodeWithDashesReturnsLongCode()
    {
        $mapper = new LanguageMapper('es-ES');
        $this->assertSame('es_ES', $mapper->getLanguage());
    }
}
