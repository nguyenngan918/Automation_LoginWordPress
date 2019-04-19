<?php
/**
 * Created by PhpStorm.
 * User: Thanh Ngan
 * Date: 4/19/2019
 * Time: 11:04 PM
 */
use Step\Acceptance\Admin As AdminTester;

class T_Pass_EmptyCest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I =  new AdminTester($scenario);
        $I->Pass_invalid('nguyenngan9198@gmail.com','');
    }
}