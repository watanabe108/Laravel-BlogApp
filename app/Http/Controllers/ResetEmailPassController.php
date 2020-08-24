<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ResetEmailPassController extends Controller
{
    public function index()
    {
        $user = User::first();
        $msg = "email、passwordを変更できます。";
    return view('reset_email_pass',compact('user','msg'));
    }
    public function post(Request $request)
    {
        
        $validate_rule = [
            'email'    => 'required|email|max:255',
            'password' => 'required|alpha-num|max:255'
        ];
        $this->validate($request,$validate_rule);
        User::UserChange($request->email,$request->password);
        $user = User::first();
        $msg = "変更完了。";
        return view('reset_email_pass',compact('user','msg'));
    }
}
