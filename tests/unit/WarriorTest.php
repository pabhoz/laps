<?php 

require './interfaces/ICharacter.php';
require './entidades/Character.php';
require './entidades/Warrior.php';

class WarriorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testConstruct()
    {
        $myWarrior = new Warrior("Arthur","Humano",45,23,32,12,false);

        //**clase** (que por defecto es "warrior")
        $this->tester->assertEquals("warrior",$myWarrior->getClase());
        //**hp** (healt points x 2)
        $this->tester->assertEquals(90,$myWarrior->getHp());
        //**mn** (mana x 0)
        $this->tester->assertEquals(0,$myWarrior->getMn());
        //**str** (strength = valor al crear x 1.5)* 
        $this->tester->assertEquals(48,$myWarrior->getStr());
    }
}