<?php


class CheckInvitationDataCest
{

    public function tryToTest(AcceptanceTester $I, \Page\IndexPage $indexPage, \Page\ContactPage $contactPage)
    {
        $indexPage->goToIndexPage();
        $indexPage->clickContactBtn();
        $contactPage->expandContactToWITZ();
        $contactPage->checkWITZOpeningTimes();

    }
}
