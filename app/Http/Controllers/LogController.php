<?php

namespace App\Http\Controllers;

use App\Models\Caretaker;
use App\Models\Log;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function create()
    {
        $firstId = Log::where('is_deleted',0)->first('id');

        $logTitle = "";
        $detail = "";
        $id = "";
        $url = '/log/create/conf';
        $back_url = '/?id=';
        return view('create_change',compact('logTitle','detail','id','url','back_url','firstId'));
    }
    public function createConf(Request $request)
    {
        $firstId = Log::where('is_deleted',0)->first('id');

        $logTitle = $request->input('logTitle');
        $detail = $request->input('detail');
        $id = $request->input('id');
        $msg = 'このように新規作成してよろしいですか？';
        $url = '/create';
        $back_url = '/?id=';
        return view('conf',compact('logTitle','detail','id','msg','url','back_url','firstId'));
    }
    public function change_delete_select(Request $request)
    {
        $logs = Log::where('is_deleted',0)->Paginate(10);

        $row = Log::where('id',$request->input('id'))->first();

        return view('select',compact('logs','row'));
    }
    public function change(Request $request)
    {
        $firstId = Log::where('is_deleted',0)->first('id');

        $logTitle = $request->input('logTitle');
        $detail = $request->input('detail');
        $id = $request->input('id');
        $url = '/log/change/conf?id=';
        $back_url = '/log/change_delete/select?id=';
        return view('create_change',compact('logTitle','detail','id','url','back_url','firstId'));
    }
    public function changeConf(Request $request)
    {
        $firstId = Log::where('is_deleted',0)->first('id');

        $logTitle = $request->input('logTitle');
        $detail = $request->input('detail');
        $id = $request->input('id');
        $msg = 'このように変更してよろしいですか？';
        $url = '/change';
        $back_url = '/log/change_delete/select?id=';
        return view('conf',compact('logTitle','detail','id','msg','url','back_url','firstId'));
    }
    public function deleteConf(Request $request)
    {
        $firstId = Log::where('is_deleted',0)->first('id');
        // dd($firstId);
        $logTitle = $request->input('logTitle');
        $detail = $request->input('detail');
        $id = $request->input('id');
        $msg = 'これを削除してよろしいですか？';
        $url = '/delete?id=';
        $back_url = '/log/change_delete/select?id=';
        return view('conf',compact('logTitle','detail','id','msg','url','back_url','firstId'));
    }
}
