<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryEloquent;
use App\Repositories\UserRepositoryInterface;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index(UserRepositoryInterface $repository)
    {
        return $repository->all();
        /*return view('welcome');*/
    }
}
