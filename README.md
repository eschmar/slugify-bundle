# SlugifyBundle
Provides static method to convert strings to slugs as well as a twig filter for symfony. If you only need the static class, you'll [find it here](Util/Slug.php).

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