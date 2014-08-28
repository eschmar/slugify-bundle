# Slugify
Provides static method to convert strings to slugs written in PHP. Includes TWIG filter.

## Usage
```php
echo Slugifier::slugify($input, "-");
```

## Twig Extension
```twig
{{ "String to be slugified"|slugify }}
```
Don't forget to replace namespaces in ``Slugifier.php`` as well as in ``Twig/SlugifyExtension.php`` and to define the extension in your services.yml:
```yaml
services:
    # TWIG EXTENSIONS
    eschmar.twig.slugify_extension:
        class: Eschmar\TestBundle\Twig\SlugifyExtension
        tags:
            - { name: twig.extension }
```

# License
MIT License