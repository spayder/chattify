<?php

namespace Chattify\Http\Controllers;

use Illuminate\Http\Request;
use Chattify\Http\Requests;
use Chattify\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
    }
}
