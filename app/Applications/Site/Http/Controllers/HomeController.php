<?php
namespace App\Applications\Site\Http\Controllers;

use App\Core\Http\Controllers\Controller;

class HomeController extends BaseController
{
    public function index()
    {
        return "Hello World";
    }
}