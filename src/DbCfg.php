<?php

namespace DB;

class DbCfg {    

    protected function db() {
        global $dbhost, $dbuser, $dbpass, $dbname, $port;
        $db = new Db($dbhost, $dbuser, $dbpass, $dbname, $port);
        return $db;
    }
    

}