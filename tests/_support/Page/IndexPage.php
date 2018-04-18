<?php
namespace Page;

class IndexPage
{
    public static $URL = "/";
    public static $contactBtn = "//ul[@class='menu-base']//a[contains(text(), 'Kontakt')]";

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function goToIndexPage()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
    }

    public function clickContactBtn()
    {
        $I = $this->tester;
        $I->click(self::$contactBtn);

    }



}
