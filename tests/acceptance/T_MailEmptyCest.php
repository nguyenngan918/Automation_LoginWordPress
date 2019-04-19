<?php
use Step\Acceptance\Admin As AdminTester;
class T_MailEmptyCest
{

    public function tryToTest(AcceptanceTester $I,$scenario)
    {
        $I =  new AdminTester($scenario);
        $I->Mail_Empty();
    }
}
