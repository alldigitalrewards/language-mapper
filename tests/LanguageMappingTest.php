<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\LanguageMapper\LanguageMapper;
use PHPUnit\Framework\TestCase;

class LanguageMappingTest extends TestCase
{
    public function testReturnsEnUSDefaultLanguageSinceNotFound()
    {
        $mapper = new LanguageMapper('nz_NZ');
        $this->assertSame('en_US', $mapper->getLanguage());
    }

    public function testReturnsAcceptableLanguages()
    {
        $languages = LanguageMapper::ACCEPTABLE_LANGUAGES;
        foreach ($languages as $language) {
            $mapper = new LanguageMapper($language);
            $this->assertSame($language, $mapper->getLanguage());
        }
    }

    public function testLanguageCodeWithDashesReturnsLongCode()
    {
        $mapper = new LanguageMapper('en-US');
        $this->assertSame('en_US', $mapper->getLanguage());
        $mapper = new LanguageMapper('en_US');
        $this->assertSame('en_US', $mapper->getLanguage());
    }

    public function testShortLocaleCodesDefaultToEnglish()
    {
        $mapper = new LanguageMapper('en');
        $this->assertSame('en_US', $mapper->getLanguage());
        $mapper = new LanguageMapper('es');
        $this->assertSame('en_US', $mapper->getLanguage());
        $mapper = new LanguageMapper('pt');
        $this->assertSame('en_US', $mapper->getLanguage());
    }
}
