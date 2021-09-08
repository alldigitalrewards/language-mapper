# Language Mapper Library

This is a Language mapper which maps a Language tag, defaulting to 'en' if not found or present

## Install

Via Composer
```bash
$ composer require alldigitalrewards/language-mapper
```

## Usage
```bash
Returns default en_US since language not found in acceptable list:

$mapper = new LanguageMapper('nz_NZ');
$this->assertSame('en_US', $mapper->getLanguage());

Returns es_ES since language found in acceptable list:

$mapper = new LanguageMapper('es_ES');
$this->assertSame('es_ES', $mapper->getLanguage());

You can pass in short code and/or long code with dashes

$mapper = new LanguageMapper('fr');
$this->assertSame('fr_CA', $mapper->getLanguage());
        
$mapper = new LanguageMapper('es-ES');
$this->assertSame('es_ES', $mapper->getLanguage());
```
## Testing

```bash
$ composer test
```
