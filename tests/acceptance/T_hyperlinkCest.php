<?php
/**
 * Created by PhpStorm.
 * User: Thanh Ngan
 * Date: 4/19/2019
 * Time: 11:36 PM
 */
use Step\Acceptance\Admin As AdminTester;

class T_hyperlinkCest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I =  new AdminTester($scenario);
        $I->T_hyperlink('//*[@id="primary"]/div/main/div/div[2]/a[1]');
        $I->T_hyperlink('//*[@id="primary"]/div/main/div/div[2]/a[2]');
        $I->T_hyperlink('//*[@id="primary"]/div/main/div/div[2]/a[3]');
        $I->T_hyperlink('//*[@id="primary"]/div/main/div/div[2]/a[4]');
    }
}