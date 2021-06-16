<?php

namespace Ura\Dhura\Support;

use mysqli;

/**
 * Class Database
 */

 abstract class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'basic';
    private $connection;

    protected function connection(){
       return $this -> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);

    }
 }

?>