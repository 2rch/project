<?php

class addUserCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
   public function tryToTestAddingUser(AcceptanceTester $I)
    {
        $I->amOnPage('site.test/register');

        $I->fillField('email', 'ex@mple.com');
        $I->fillField('password', '1234');
        $I->fillField('name', 'Alex');
        $I->fillField('nickname', '2rch');
        $I->click('submit');

        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
        $I->see('Вы успешно зарегистрированы!');
    }
}

