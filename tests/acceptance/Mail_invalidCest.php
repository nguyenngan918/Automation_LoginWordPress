<?php
/**
 * Created by PhpStorm.
 * User: Thanh Ngan
 * Date: 4/19/2019
 * Time: 10:59 PM
 */
use Step\Acceptance\Admin As AdminTester;
class Mail_invalidCest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I =  new AdminTester($scenario);
        $I->T_Mail_invalid('nguyenngan9198@.com','Thanh@@@Ngan123');
    }
}