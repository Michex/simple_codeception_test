<?php


class GetUBIKIndexPagePositiveCest
{

    public function getUBIKIndexPagePositiveTest (ApiTester $I)
    {
        $I->sendGET("https://ubi2.wit.edu.pl/");
        $I->seeResponseCodeIs(200);

    }

}
