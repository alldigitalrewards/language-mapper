<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\LanguageMapper\LanguageTogglerMapping;
use PHPUnit\Framework\TestCase;

class LanguageTogglerMappingTest extends TestCase
{
    public function testItemLabelsOmitRegionSuffix()
    {
        foreach ($this->getMapping() as $locale => $entry) {
            $this->assertSame(
                0,
                preg_match('/ - [A-Z]{2}$/', $entry['item']),
                "item label for {$locale} still carries a region suffix: {$entry['item']}"
            );
        }
    }

    public function testMainLabelsOmitRegionSuffix()
    {
        foreach ($this->getMapping() as $locale => $entry) {
            $this->assertSame(
                0,
                preg_match('/ \([A-Z]{2}\)$/', $entry['main']),
                "main label for {$locale} still carries a region suffix: {$entry['main']}"
            );
        }
    }

    public function testMainAndItemLabelsMatch()
    {
        foreach ($this->getMapping() as $locale => $entry) {
            $this->assertSame(
                $entry['main'],
                $entry['item'],
                "main and item labels diverge for {$locale}"
            );
        }
    }

    private function getMapping(): array
    {
        return (new LanguageTogglerMapping())->getMapping();
    }
}
