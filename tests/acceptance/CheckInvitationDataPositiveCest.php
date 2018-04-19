<?php


class CheckInvitationDataPositiveCest
{

    public function chceckInvitationDataPositiveTest(\Page\IndexPage $indexPage, \Page\ContactPage $contactPage)
    {
        $indexPage->goToIndexPage();
        $indexPage->clickContactBtn();
        $contactPage->expandContactToWITZ();
        $contactPage->checkWITZOpeningTimes();

    }
}
