

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


## Use DbCfg
```php
<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use DB\Db;
use DB\DbCfg;

$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_name';
$port   = 3306;
// $db = new Db($dbhost ,$dbuser, $dbpass, $dbname, $port);

class Test extends DbCfg {

    public static function do() {
        $db = new DbCfg;
        print_r($db->db());
    }
}

Test::do();
```


## Example
```php

==========================================================================
fetch a record from a database:
--------------------------------------------------------------------------
$account = $db->query('SELECT * FROM accounts WHERE username = ? AND password = ?', 'test', 'test')->fetchArray();
echo $account['name'];
--------------------------------------------------------------------------
OR
--------------------------------------------------------------------------
$account = $db->query('SELECT * FROM accounts WHERE username = ? AND password = ?', array('test', 'test'))->fetchArray();
echo $account['name'];
==========================================================================
Fetch multiple records from a database:
--------------------------------------------------------------------------
$accounts = $db->query('SELECT * FROM accounts')->fetchAll();
foreach ($accounts as $account) {
	echo $account['name'] . '<br>';
}
==========================================================================
Checking the number of rows:
--------------------------------------------------------------------------
$accounts = $db->query('SELECT * FROM accounts');
echo $accounts->numRows();
==========================================================================
Checking the affected number of rows:
--------------------------------------------------------------------------
$insert = $db->query('INSERT INTO accounts (username,password,email,name) VALUES (?,?,?,?)', 'test', 'test', 'test@gmail.com', 'Test');
echo $insert->affectedRows();
==========================================================================
Close the database:
--------------------------------------------------------------------------
$db->close();
==========================================================================
Checking the total number of queries:
--------------------------------------------------------------------------
echo $db->query_count;
 
```


