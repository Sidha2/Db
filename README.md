# DB
## Simple DB class

## use
```php
<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use DB\Db;

$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$dbname = 'name';
$port   = 3306;
$db = new Db($dbhost ,$dbuser, $dbpass, $dbname, $port);

print_r($db);
```


