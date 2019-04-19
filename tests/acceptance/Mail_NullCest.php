<?php
use Step\Acceptance\Admin As AdminTester;

class Mail_NullCest
{
    public function tryToTest(AcceptanceTester $I,$scenario)
    {
        $I =  new AdminTester($scenario);
        $I->Mail_Null('Thanh@@@Ngan123');
    }
}