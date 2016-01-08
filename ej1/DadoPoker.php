<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DadoPoker
 *
 * @author Samuel
 */
class DadoPoker {
    //put your code here
    private static $tiradasTotales=0;
    private static $figura=["As","K","Q","J","7","8"];
    
    static function getTiradasTotales(){
        return self::$tiradasTotales;
    }

    public $nombreFigura;
    
    function getNombreFigura() {
            return $this->nombreFigura;
    }
    function tira(){
       $this->nombreFigura = DadoPoker::$figura[rand(0, 5)]; 
       DadoPoker::$tiradasTotales += 1;
    }

    function __construct() {
        $this->nombreFigura = "";
    }


}
