<?php

class CheckInvitationDataPositiveCest
{

    public function checkInvitationDataPositiveTest(\Page\IndexPage $indexPage, \Page\ContactPage $contactPage)
    {
        $indexPage->goToIndexPage();
        $indexPage->clickContactBtn();
        $contactPage->expandContactToWITZ();
        $contactPage->checkWITZOpeningTimes();

    }
}
