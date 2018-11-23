<?php 

class QuicStartCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo("Mostrarles esto tan bacano");
        $I->amOnPage("/");
        $I->wait(2);
        $I->click(".btn-install");
        $I->wait(2);
        $I->amOnPage("/quickstart");
    }
}
