<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        $num = 11;
        $str = "sry";
        $mas = [5, 2, 11110, 12];
        return view('second', compact('num', 'str', 'mas'));
    }
}
