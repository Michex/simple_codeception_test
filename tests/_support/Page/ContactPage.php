<?php
namespace Page;

class ContactPage
{
    public static $URL = "/kontakt";
    public static $witzBtn = "//h3[@id='WITZ']/a";
    public static $witzHours = "//div[@id='content-site']//div[5]/div[2]//td[contains(text(), '%s')]/../td[2]";

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function expandContactToWITZ()
    {
        $I = $this->tester;
        $I->click(self::$witzBtn);
        $I->wait(1);
    }

    public function checkWITZOpeningTimes()
    {
        $I = $this->tester;

        $openingTimes = array(
            "poniedziałek" => "9:00 - 16:00",
            "wtorek" => "9:00 - 16:00",
            "środa" => "10:00 - 15:00",
            "czwartek" => "10:00 - 18:00",
            "piątek" => "nieczynne",
            "sobota" => "8:00 - 15:00");

        foreach ($openingTimes as $day => $time) {
            $selector = sprintf(self::$witzHours, $day);
            $I->see($time, $selector);
        }


    }

    public function checkWrongWITZOpeningTimes()
    {
        $I = $this->tester;

        $openingTimes = array(
            "poniedziałek" => "9:00 - 16:00",
            "wtorek" => "9:00 - 16:00",
            "środa" => "10:00 - 14:00",
            "czwartek" => "10:00 - 18:00",
            "piątek" => "nieczynne",
            "sobota" => "8:00 - 15:00");

        foreach ($openingTimes as $day => $time) {
            $selector = sprintf(self::$witzHours, $day);
            $I->see($time, $selector);
        }
    }


}
