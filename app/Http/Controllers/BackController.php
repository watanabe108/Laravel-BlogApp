<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function back() {

        return back()->withInput();
    
    }
}
