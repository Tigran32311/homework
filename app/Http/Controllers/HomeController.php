<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get_request(Request $request)
    {
//        return 'Hello world: '.$request->url();
        return 'Hello world: '.$request->url();
    }
}
