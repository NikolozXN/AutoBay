<?php 
abstract class Dbconn {
    private $host = 'localhost';
    private $dbuser = 'nikolozi';
    private $dbpass = '1234561';
    private $dbname = 'myuser';

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);
        return $pdo;
    }
}

?>