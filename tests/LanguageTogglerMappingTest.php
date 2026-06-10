<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\LanguageMapper\LanguageTogglerMapping;
use PHPUnit\Framework\TestCase;

class LanguageTogglerMappingTest extends TestCase
{
    public function testEveryEntryExposesARegionlessLabel()
    {
        foreach ($this->getMapping() as $locale => $entry) {
            $this->assertArrayHasKey('label', $entry, "missing label for {$locale}");
            $this->assertNotSame('', $entry['label'], "empty label for {$locale}");
            $this->assertSame(
                0,
                preg_match('/ - [A-Z]{2}$/', $entry['label']),
                "label for {$locale} carries a dash region suffix: {$entry['label']}"
            );
            $this->assertSame(
                0,
                preg_match('/ \([A-Z]{2}\)$/', $entry['label']),
                "label for {$locale} carries a parenthetical region suffix: {$entry['label']}"
            );
        }
    }

    public function testMainAndItemRetainRegionSuffix()
    {
        foreach ($this->getMapping() as $locale => $entry) {
            $this->assertSame(
                1,
                preg_match('/ \([A-Z]{2}\)$/', $entry['main']),
                "main for {$locale} no longer carries its region: {$entry['main']}"
            );
            $this->assertSame(
                1,
                preg_match('/ - [A-Z]{2}$/', $entry['item']),
                "item for {$locale} no longer carries its region: {$entry['item']}"
            );
        }
    }

    private function getMapping(): array
    {
        return (new LanguageTogglerMapping())->getMapping();
    }
}
