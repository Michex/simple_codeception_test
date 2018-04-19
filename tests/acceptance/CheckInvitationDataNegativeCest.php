<?php

class CheckInvitationDataNegativeCest
{

    public function checkInvitationDataNegativeTest(\Page\IndexPage $indexPage, \Page\ContactPage $contactPage)
    {
        $indexPage->goToIndexPage();
        $indexPage->clickContactBtn();
        $contactPage->expandContactToWITZ();
        $contactPage->checkWrongWITZOpeningTimes();

    }
}
