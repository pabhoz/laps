<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author pabhoz
 */
interface ICharacterFactory {
    //put your code here
    public function getCharacter(string $nombre, string $raza, string $clase, 
            float $hp,float $mn, float $str, float $md, float $ag): Character;
    public function getMage(): Mage;
    public function getRogue(): Rogue;
    public function getWarrior(string $nombre, string $raza, float $hp, float $str, 
            float $ag, float $mana, bool $divineForm): Warrior;
}
