<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function policy()
    {
        return view('pages.policy');
    }
}
