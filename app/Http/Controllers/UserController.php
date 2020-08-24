<?php

namespace App\Http\Controllers;

use App\Models\Caretaker;
use App\Models\Log;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $logs = Log::where('is_deleted',0)->Paginate(10);
        $caretaker = Caretaker::first();
        $auth_off = true;
        return view('user_index',compact('logs','caretaker','auth_off'));
    }
    public function detail(Request $request)
    {
        $auth_off = true;
        $id = $request->input('id');
        $log = Log::where('id',$id)->first();
        return view('user_detail',compact('log','auth_off'));
    }
}
