Installation
============

Applications that use Symfony Flex
----------------------------------

```console
$ composer require sasedev/twig-extensions-bundle
```

Applications that don't use Symfony Flex
----------------------------------

### Step 1: Download the Bundle

```console
$ composer require sasedev/twig-extensions-bundle
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Sasedev\Twig\Extensions\SasedevTwigExtensionsBundle(),
        );

        // ...
    }

    // ...
}
```
