<?php
namespace Phalcon\Config\Adapter{
    class Ini extends \Phalcon\Config implements \ArrayAccess
    {
        public function __construct($filePath){}
        public function offsetExists($index){}
        public function get($index, $defaultValue = NULL){}
        public function offsetGet($index){}
        public function offsetSet($index, $value){}
        public function offsetUnset($index){}
        public function merge($config){}
        public function toArray(){}
        public static function __set_state($data){}
    }
}