<?php
namespace Wpa33\Application;
class Application {

    static private $_store = [];
    
    static public function add($obj, $name = null) {
        $name = is_null($name) ? get_class($obj) : $name;
        $name = strtolower($name);
        $return = null;

        if(isset(self::$_store[$name])) {
            $return = self::$_store[$name];
        }
        self::$_store[$name] = $obj;
        return $return;
    }
    static public function get($name)
	{
		if (!self::contains($name)) {
			throw new \Exception("Object does not exist");
		}
		return self::$_store[$name];
	}
	static public function contains($name)
	{
		if (!isset(self::$_store[$name])) {
			return false;
		}
		return true;
	}
	static public function remove($name)
	{
		if (self::contains($name)) {
			unset(self::$_store[$name]);
		}
	}




}