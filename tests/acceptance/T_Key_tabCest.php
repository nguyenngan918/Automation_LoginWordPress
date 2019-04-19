<?php
/**
 * Created by PhpStorm.
 * User: Thanh Ngan
 * Date: 4/19/2019
 * Time: 11:09 PM
 */
use Step\Acceptance\Admin As AdminTester;

class T_Key_tabCest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I =  new AdminTester($scenario);
        //$I->T_Key_Tab();
    }
}