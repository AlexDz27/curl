# Usage

```
$curl = new Curl('http://ya.ru');
echo $curl->getResponse();
```

or

```
$curl = new Curl();
$curl->setTargetUrl('http://ya.ru');
echo $curl->getResponse();
```

## Example

In your `index.php` file:
```
<?php

require_once __DIR__ . '/vendor/autoload.php';

use AlexDz27\Curl\Curl;

$curl = new Curl('http://ya.ru');
echo $curl->getResponse();
```