<?php

class DB {

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