<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CharacterFactory
 *
 * @author pabhoz
 */
class CharacterFactory implements ICharacterFactory{
    //put your code here
    public function getCharacter(string $nombre, string $raza, string $clase, 
            float $hp, float $mn, float $str, float $md, float $ag): \Character {
        return new Character($nombre, $raza, $clase, $hp, $mn, $str, $md, $ag);
    }

    public function getMage(): \Mage {
        
    }

    public function getRogue(): \Rogue {
        
    }

    public function getWarrior(string $nombre, string $raza, float $hp, float $str, 
            float $ag, float $mana = 0, bool $divineForm = false): \Warrior {
        return new Warrior($nombre, $raza, $hp, $mana, $str, $ag, $divineForm);
    }

}
