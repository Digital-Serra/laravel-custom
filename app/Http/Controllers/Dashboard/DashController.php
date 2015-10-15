<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public $user;

    public function __construct(Auth $auth)
    {
        $this->user = $auth::user();
    }

    public function index()
    {
        return view('dashboard.index',['user'=>$this->user->name]);
    }
}
