<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace App\Tests\Traits;


use App\Entities\User;
use Illuminate\Support\Facades\Auth;

trait InteractsWithUser
{
    /**
     * Create a new test user
     *
     * @param string $name
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function insertTestUser($name = 'test', $email = 'test@test.com', $password = '12345678'){
        if(User::all()->count() == 0){
            User::create(['name'=>$name,'email'=>$email,'password'=>bcrypt($password),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        }

        return true;
    }
}