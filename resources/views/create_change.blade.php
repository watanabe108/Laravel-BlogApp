@extends('layouts.app')

@section('content')


<div class="container mt-2">

    <form action="{{ $url }}{{ $id }}" method="post" >
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">新ログ表題を入力してください。</label>
            <input type="text" name="logTitle" class="form-control" id="exampleFormControlInput1" value="{{ $logTitle }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">新ログ詳細を入力してください。</label>
            <textarea type="text" name="detail" class="form-control" id="exampleFormControlTextarea1" rows="10">{{ $detail }}</textarea>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <a href="{{ $back_url }}{{ $firstId->id }}," class="btn btn-primary">Back</a>
            <div class="col-2"></div>
            <button type="submit" class="btn btn-primary col-3">確定</button>
        </div>

    </form>
</div>

@endsection