<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function __construct(Auth $auth)
    {
    }

    public function index()
    {
        return view('dashboard.index');
    }
}
