<?php 
use Step\Acceptance\Admin As AdminTester;
class FirstCest
{

    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I =  new AdminTester($scenario);
        $I->loginAsAdmin('nguyenngan9198@gmail.com','Thanh@@@Ngan123');

    }
}
