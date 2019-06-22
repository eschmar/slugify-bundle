# SlugifyBundle
Provides static method to convert strings to slugs as well as a twig filter for symfony. If you only need the static class, you'll [find it here](Util/Slug.php).

## Install
Composer (<a href="https://packagist.org/packages/eschmar/slugify-bundle" target="_blank">Packagist</a>):
```sh
composer require eschmar/slugify-bundle ~v2.0 # Symfony Flex
composer require eschmar/slugify-bundle ~v1.0 # Symfony 2
```

app/Appkernel.php:
```php
new Eschmar\SlugifyBundle\EschmarSlugifyBundle(),
```

## Usage
```php
use Eschmar\SlugifyBundle\Util\Slug;
$test = Slug::ify("String to be slugified");
// results in $test == "string-to-be-slugified"
```

## Twig Extension
```twig
{{ "String to be slugified"|slugify }}
```

# License
MIT License