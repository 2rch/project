<?php

class mainPageLoadCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('site.test');
        $I->see('Lorem ipsum');
    }
}

