<?php

class DB extends PDO {

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
   
    public function __construct(){
        $this->engine = \Config::get("database.engine");
        $this->host = \Config::get("database.host");
        $this->database = \Config::get("database.dbname");
        $this->user = \Config::get("database.user");
        $this->pass = \Config::get("database.password");
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass );
    }

    private static $_instance;
    private $table_name;

    public static function table($table_name) {
        if(!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        }
        self::$_instance->table_name = $table_name;
        return self::$_instance;
    }

    public function get() {
        return $this->table_name;
    }
}