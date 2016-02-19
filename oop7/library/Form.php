<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Form
 *
 * @author web
 */
class Form {

    protected $method;
    protected $enctype;
    protected $action;
    protected $elsements = array();

    public function __construct($params) {//$params  ассоциативный массив вида array('enctype'=>'','method'=>'','action'=>'')
        foreach ($params as $element => $property) {
            $this->$element=$property;
        }
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function addElement($element) {
        array_push($this->elsements, $element);
    }

    public function Render() {
        $res = '<form ';
        if (!empty($this->method)) {
            $res.='method="' . $this->method . '"';
        }
        if (!empty($this->enctype)) {
            $res.='enctype="' . $this->enctype . '"';
        }
        if (!empty($this->action)) {
            $res.='action="' . $this->action . '"';
        }
        $res .= '>';
        foreach ($this->elsements as $element) {
            $res.= $element;
        }
        $res .= '</form>';
        return $res;
    }

}
