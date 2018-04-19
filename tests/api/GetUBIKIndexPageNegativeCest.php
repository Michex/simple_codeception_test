<?php


class GetUBIKIndexPageNegativeCest
{

    public function getUBIKIndexPageNegativeTest (ApiTester $I)
    {
        $I->sendGET("https://ubi2.wit.edu.pl/");
        $I->seeResponseCodeIs(404);
    }

}
