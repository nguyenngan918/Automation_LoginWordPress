<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;
class Admin extends \AcceptanceTester
{

    public function loginAsAdmin($name,$password)
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$UsernameField, $name);
        $I->click('Continue');
        $I->wait('5');
        $I->fillField(LoginPage::$PasswordField, $password);
        $I->click('Log In');
        $I->wait('5');
    }
    public function Mail_Empty()
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click('//*[@id="usernameOrEmail"]');
        $I->click('Continue');
        $I->wait('5');
    }
    public function Mail_Null($password)
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click('Continue');
        $I->wait('5');
    }
    public function T_Mail_invalid($name,$password)
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$UsernameField, $name);
        $I->click('Continue');
        $I->wait('5');
        $I->fillField(LoginPage::$PasswordField, $password);
        $I->click('Log In');
        $I->wait('5');
    }
    public function Pass_invalid($name,$password)
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$UsernameField, $name);
        $I->click('Continue');
        $I->wait('5');
        $I->fillField(LoginPage::$PasswordField, $password);
        $I->click('Log In');
        $I->wait('5');
    }
    public function Pass_Null($name,$password)
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$UsernameField, $name);
        $I->click('Continue');
        $I->wait('5');
       // $I->fillField(LoginPage::$PasswordField, $password);
        $I->click('Log In');
        $I->wait('5');
    }
//    public function T_key_Enter($name,$password)
//    {
//        $I= $this;
//        $I->amOnPage(LoginPage::$URL);
//        $I->fillField(LoginPage::$UsernameField, $name);
//        $I->wait('2');
//        $I->pressKey(['id' => 'filter_search_webservices'], WebDriverKeys::ENTER);
//        $I->wait('2');
//        $I->fillField(LoginPage::$PasswordField, $password);
//        $I->wait('2');
//        $I->pressKey(['id' => 'filter_search_webservices'], WebDriverKeys::ENTER);
//        $I->wait('2');
//    }
//    public function T_Key_Tab()
//    {
//        $I= $this;
//        $I->amOnPage(LoginPage::$URL);
//        $I->pressKey(['id' => 'filter_search_webservices'], WebDriverKeys::TAB);
//        $I->wait('2');
//        $I->pressKey(['id' => 'filter_search_webservices'], WebDriverKeys::TAB);
//        $I->wait('2');
//        $I->pressKey(['id' => 'filter_search_webservices'], WebDriverKeys::TAB);
//        $I->wait('2');
//        $I->pressKey(['id' => 'filter_search_webservices'], WebDriverKeys::TAB);
//
//    }

    public function Login_G()
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click('//*[@id="primary"]/div/main/div/div[1]/div/form/div[2]/div[2]/div/div/div/button/span');
        $I->wait('5');
    }
    public function T_hyperlink($hyperlink)
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click($hyperlink);
        $I->wait('5');
    }
    public function T_Click_link($clickLink)
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click($clickLink);
        $I->wait('5');
    }
}