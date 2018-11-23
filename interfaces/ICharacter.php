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
interface ICharacter {
    
    public function attack(ICharacter $character, $damage);
    public function getHurt(float $damage);
    public function dramaticDeath();
}
