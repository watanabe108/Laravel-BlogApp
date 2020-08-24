<?php

namespace App\Http\Controllers;

use App\Models\Caretaker;
use App\Models\Log;
use App\User;

use Illuminate\Http\Request;

class CaretakerController extends Controller
{
    public function index()
    {
        $firstId = Log::where('is_deleted',0)->first('id');
        $caretaker = Caretaker::first();
        $email = User::first('email');
        $password = "";
        return view('caretaker',compact('caretaker','firstId'));
    }

    public function re_index(Request $request)
    {   
        $firstId = Log::where('is_deleted',0)->first('id');
        $caretaker = Caretaker::first();

        $validate_rule = [
        'handleName'    => 'required|max:100',
        'profile' => 'required|max:1000'
        ];

    $this->validate($request,$validate_rule);
        Caretaker::where('id',1)->update(
            [
                'handleName' =>$request->handleName,
                'profile'    =>$request->profile
            ]);
            $caretaker = Caretaker::first(); 

        return view('caretaker',compact('caretaker','firstId'));
    }
    public function delete(Request $request)
    {
        $id = $request->input('id');
        Log::logDelete($id);

        $firstId = Log::where('is_deleted',0)->first('id');
        $caretaker = Caretaker::first();
        return view('caretaker',compact('caretaker','firstId'));
    }
    public function change(Request $request)
    {
        $id = $request->input('id');
        $logTitle = $request->input('logTitle');
        $detail = $request->input('detail');
        $validate_rule = [
            'logTitle'    => 'required|max:100',
            'detail' => 'required|max:1000'
        ];
        $this->validate($request,$validate_rule);
        Log::logChange($id,$logTitle,$detail);

        $firstId = Log::where('is_deleted',0)->first('id');
        $caretaker = Caretaker::first();
        return view('caretaker',compact('caretaker','firstId'));
    }
    public function create(Request $request)
    {
        
        $logTitle = $request->input('logTitle');
        $detail = $request->input('detail');
        $validate_rule = [
            'logTitle'    => 'required|max:100',
            'detail' => 'required|max:1000'
        ];
        $this->validate($request,$validate_rule);
        Log::logCreate($logTitle,$detail);
        
        $firstId = Log::where('is_deleted',0)->first('id');
        $caretaker = Caretaker::first();
        return view('caretaker',compact('caretaker','firstId'));
    }
}
