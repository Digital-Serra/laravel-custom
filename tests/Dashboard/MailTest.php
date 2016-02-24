<?php

namespace App\Tests\Dashboard;

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
}
