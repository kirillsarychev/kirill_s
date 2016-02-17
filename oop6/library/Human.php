<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Human {
    protected $_name;
    protected $_age;
    protected $_gender;

    public function __construct($name, $age, $gender) {
        $this->_name=$name;
        $this->_age=$age;
        $this->_gender=$gender;
    }
    public function __get($property) {
        if(property_exists($this, $property)){
            return $this->$property;
        }else{
            return NULL;
        }
    }
    public function __set($property, $value) {
        if(property_exists($this, $property)){
            return $this->$property=$value;
        }
    }
    public function __toString() {
        $str="Name: $this->_name<br/>";
        $str.="Age: $this->_age<br/>";
        $str.="Gender: $this->_gender<br/>";
        return $str;
    }
    public function __call($name, $arguments) {
        echo "call $name method with parametrs:";
        var_dump($arguments);
                     
    }
     public static function __callStatic($name, $arguments) {
        echo "call $name method with parametrs:";
        var_dump($arguments);
                     
    }
    public function __sleep() {
        echo 'echo i am serialised <br/>';
        return array('_name', '_age');
    }
}
