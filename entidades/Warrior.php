<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * ####Warrior
1. La clase de la fuerza (str), guerreros invencibles contra los Rogues, con un aguante increíble y alimentados por la ira en combate. Cuenta con los atributos (los cuales serán pasados al constructor a excepción de la clase que ya viene inicializada):
	1. **nombre**
	2. **raza**
	3. **clase** (que por defecto es "warrior")
	3. **hp** (healt points x 2)
	4. **mn** (mana x 0)
	4. **str** (strength = valor al crear x 1.5)* 
	5. **md** (magic damage)*
	6. **ag** (agility)*

	Además la clase base cuenta con los métodos:
	
	1. **attack:** que se basará en el atributo principal del personaje en esteo caso, str, y el cálculo de su daño es: [str] * 0.6. Si el enemigo al que se ataca es de la clase Rogue, entonces se calculará así: [str] * 2.5. Se imprimirá entonces el siguiente mensaje: [nombre] ataca a [nombre] causando [daño] de daño.
	2.  **getHurt:** que recibe como parametro la cantidad de puntos de vida a restar de la vida del personaje y si la cantidad restande después del cálculo es menor o igual a 0, el personaje ejecutará el método **dramaticDeath**. 
	3. **dramaticDeath:** el personaje gritará diciendo: Arrrg! yo [nombre], el gran guerrero, he sido derrotado en batalla.

 */

/**
 * Description of Warrior
 *
 * @author pabhoz
 */
class Warrior extends Character implements ICharacter{
    
    private $divineForm = false;
    
    public function __construct(string $nombre, string $raza, 
            float $hp, float $mana, float $str, float $ag, bool $divineForm) {
        parent::__construct($nombre, $raza, "warrior", $hp * 2, 0, $str * 1.5, 0, $ag);
        $this->divineForm = $divineForm;

    }
    
    public function attack(\ICharacter $character,$damage = false) {
        $damage = $this->getStr() * 0.6;
        parent::attack($character,$damage);
    }
    
    public function dramaticDeath() {
        echo "Arrrg! yo ".$this->getNombre().", el gran guerrero, he sido derrotado en batalla<br>";
    }
}
