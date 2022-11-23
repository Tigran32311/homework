<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function Send(Request $request)
    {
//        $text = $request->input('text');
        $text = $request->all();
        return $text;
    }
}
