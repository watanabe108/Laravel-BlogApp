@extends('layouts.app')

<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">
            <label for="exampleFormControlText1">管理人ハンドルネーム</label>
            <text class="form-control readonly" id="exampleFormControlText1" >{{ $caretaker->handleName }}</text>
            <label for="exampleFormControlTextarea1">管理人プロフィール</label>
            <textarea readonly class="form-control " id="exampleFormControlTextarea1" rows="7">{{ $caretaker->profile }}</textarea>
        </div>
        <div class="col-md-6">
            <p>詳細を見たいログをクリックして選択してください</p>
            @foreach($logs as $log)
                <a href="/detail?id={{$log->id}}">{{$log->logTitle}}</a><br>
            @endforeach
                {{$logs->links()}}
        </div>
    </div>
</div>