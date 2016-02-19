<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Element
 *
 * @author web
 */
class Element {
    protected $name;
    protected $type;
    protected $value;
    protected $placeholder;
    
    public function __construct($name, $type) {
        $this->name=$name;
        $this->type=$type;
    }
    public function __set($name, $value) {
         $this->$name=$value;
    }
   
    public function Render(){
        $res='<input name="'.$this->name.'" type="'.$this->type.'"';
        if(!empty($this->value)){
         $res.='value="'.$this->value.'"';
        }
        if(!empty($this->placeholder)){
         $res.='placeholder="'.$this->placeholder.'"';
        }
        $res.='><br/>';
        return $res;
    }
}
