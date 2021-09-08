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
}
