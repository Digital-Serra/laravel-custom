<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace App\Tests\Dashboard;

use App\Tests\AbstractTestCase;
use App\Notifications\Facades\Notify;
use App\Tests\Traits\AuthenticateUser;

class NotificationTest extends AbstractTestCase
{
    use AuthenticateUser;

    public function test_can_set_a_new_notification()
    {
        Notify::set('title','info','This is a test message');

        $this->seeInDatabase('notifications',['body'=>'This is a test message','title' => 'title','type' => 'info']);
    }

    public function test_can_set_a_new_notification_with_flash_message()
    {
        Notify::set('title','info','This is a test message',true);

        $this->seeInDatabase('notifications',['body'=>'This is a test message','title' => 'title','type' => 'info']);

        $this->assertInternalType('int', Notify::getNotificationCount());
    }

    public function test_can_count_multiple_flash_notifications()
    {
        Notify::set('title','info','This is a test message',true);

        Notify::set('title2','success','This is a second test message',true);

        $this->assertEquals(2, Notify::getNotificationCount());
    }

    public function test_notification_types()
    {
        $types = ['info','success','error','warning'];

        foreach($types as $type){
            Notify::set('title',$type,'This is a test message for '.$type.' label', true);
        }

        $this->assertEquals(count($types), Notify::getNotificationCount());
    }

    public function test_can_set_a_new_notification_with_wrong_type()
    {
        $this->setExpectedException('InvalidArgumentException', 'Type must be one of: info, success, error or warning');

        Notify::set('title','wrong_type','This is a test message',true);
    }

}