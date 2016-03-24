<?php

namespace App\Tests\Applications\Dashboard;

use App\Tests\AbstractTestCase;
use App\Tests\Traits\AuthenticateUser;

class MailTest extends AbstractTestCase
{
    use AuthenticateUser;

    public function test_create_mail_route()
    {
        $this->visit('/dashboard/mail/create')
           ->see('Enviar')
           ->assertResponseStatus(200);
    }

    public function test_can_send_an_email()
    {
        $this->visit('/dashboard/mail/create')
           ->type('test@test.com','to')
           ->type('test@test.com','cc')
           ->type('test@test.com','bcc')
           ->type('This is a message!','message')
           ->click('Enviar')
           ->seePageIs('/dashboard/mail/create')
           ->assertResponseStatus(200);
    }
}
