<?php
namespace Phalcon\Validation\Validator{
    abstract class StringLength implements \Phalcon\Validation\ValidatorInterface
    {
        public function validate($validator, $attribute){}
        public function __construct($options = NULL){}
        public function isSetOption($key){}
        public function getOption($key){}
    }
}