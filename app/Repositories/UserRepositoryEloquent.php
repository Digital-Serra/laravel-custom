<?php
/**
 * Created by PhpStorm.
 * User: mauri870
 * Date: 19/11/15
 * Time: 13:33
 */

namespace App\Repositories;


use App\Entities\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserRepositoryInterface
{
    /**
     * Specify the model class name
     * @return mixed
     */
    public function model()
    {
        return User::class;
    }
}