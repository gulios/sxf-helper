# SXF - Helper Component

The Helper - usefull tools



##### Example usage:

1. Use [Composer](http://getcomposer.org) to install SXF Helper into your project:

    ```bash
    composer require gulios/sxf-helper
    ```

1. Initialize in your code:


```php
$check = new CheckHttpAuth($this->sxf->request);
$check->check('1','2');
```
