<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test1115;

class Test1115Controller extends Controller
{
    public function top(){
        return view('test.index');
    }
    public function thanks(){
        return view('test.thanks');
    }
}
