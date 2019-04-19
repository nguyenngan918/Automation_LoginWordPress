<?php
/**
 * Created by PhpStorm.
 * User: Thanh Ngan
 * Date: 4/19/2019
 * Time: 11:40 PM
 */
use Step\Acceptance\Admin As AdminTester;

class Click_link_01Cest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I =  new AdminTester($scenario);
        $I->T_Click_link('//*[@id="primary"]/div/main/div/div[2]/a[1]');
    }
}