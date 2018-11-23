<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Character
 *
 * @author pabhoz
 */

class Character implements ICharacter{
    //put your code here
    private $nombre;
    private $raza;
    private $clase = "normal";
    private $hp;
    private $mn;
    private $str;
    private $md;
    private $ag;
    
    function __construct(string $nombre, string $raza, string $clase, float $hp,
            float $mn, float $str, float $md, float $ag) {
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->clase = $clase;
        $this->hp = $hp;
        $this->mn = $mn;
        $this->str = $str;
        $this->md = $md;
        $this->ag = $ag;
    }
    
    function getNombre(): string {
        return $this->nombre;
    }

    function getRaza(): string {
        return $this->raza;
    }

    function getClase(): string {
        return $this->clase;
    }

    function getHp(): float {
        return $this->hp;
    }

    function getMn(): float {
        return $this->mn;
    }

    function getStr(): float {
        return $this->str;
    }

    function getMd(): float{
        return $this->md;
    }

    function getAg(): float {
        return $this->ag;
    }

    function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    function setRaza(string $raza) {
        $this->raza = $raza;
    }

    function setClase(string $clase) {
        $this->clase = $clase;
    }

    function setHp(float $hp) {
        $this->hp = $hp;
    }

    function setMn(float $mn) {
        $this->mn = $mn;
    }

    function setStr(float $str) {
        $this->str = $str;
    }

    function setMd(float $md) {
        $this->md = $md;
    }

    function setAg(float $ag) {
        $this->ag = $ag;
    }
    
    public function attack(ICharacter $character,$damage = false){
        $finalDamage = ($damage) ? $damage : 
                max($this->getStr(),$this->getAg(), $this->getMd()) * 0.4;
        
        echo $this->getNombre()." ataca ferozmente a ".$character->getNombre().
                " inflingiendo $finalDamage hp <br>";
        
        $character->getHurt($finalDamage);
    }
    
    public function getHurt(float $damage){
        $this->setHp($this->getHp() - $damage);
        
        echo $this->getNombre()." dice: Arrg, me han herido, siento como $damage"
                . " hp se van de mi.<br>";
        
        echo $this->getNombre()." ahora tiene ".$this->getHp()."hp <br>";
        if($this->getHp() <= 0){
            $this->dramaticDeath();
        }
    }
    
    public function dramaticDeath(){
        echo "Arrrg! yo ".$this->getNombre()." he sido derrotado en batalla<br>";
    }

}
