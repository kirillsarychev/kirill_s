<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Room
 *
 * @author web
 */
class Room {

    public $width;
    public $height;
    public $length;
    public $sofa;

    public function __construct($w, $h, $l, $s_c) {
        $this->height = $h;
        $this->length = $l;
        $this->width = $w;
        $this->sofa = new Sofa($s_c);
    }
    public function __toString() {
        $str=  $this->length."<br/>";
        $str.=  $this->height."<br/>";
        $str.=  $this->width."<br/>";
        $str.=  $this->sofa->color."<br/>";
        return $str;
    }
    public function __clone() {
        $this->sofa=clone $this->sofa;
    }

}
