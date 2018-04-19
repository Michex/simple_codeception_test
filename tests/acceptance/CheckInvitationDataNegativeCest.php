<?php


class CheckInvitationDataNegativeCest
{

    public function chceckInvitationDataNegativeTest(\Page\IndexPage $indexPage, \Page\ContactPage $contactPage)
    {
        $indexPage->goToIndexPage();
        $indexPage->clickContactBtn();
        $contactPage->expandContactToWITZ();
        $contactPage->checkWrongWITZOpeningTimes();

    }
}
