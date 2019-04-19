<?php
/**
 * Created by PhpStorm.
 * User: Thanh Ngan
 * Date: 4/19/2019
 * Time: 11:19 PM
 */
use Step\Acceptance\Admin As AdminTester;

class T_Key_enterCest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I =  new AdminTester($scenario);
        //$I->T_key_Enter('nguyenngan9198@.com','Thanh@@@Ngan123');
    }
}