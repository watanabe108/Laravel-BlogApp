@extends('layouts.app')
@section('content')
<div class="container mt-2">
  <div class="row">
    <div class="col-1"></div>
    <a class="btn btn-primary col-md-3" href="/log/change_delete/select?id={{ $firstId->id }}" role="button">削除・編集既存ログ選択画面へ</a>
    <div class="col-1"></div>
    <a class="btn btn-primary col-md-3" href="/log/create" role="button">新規ログ・詳細作成入力画面へ</a>
    <div class="col-1"></div>
    <a class="btn btn-primary col-md-3" href="/reset/email/pass" role="button">email、password変更画面へ</a>
  </div>
    <form method="post" action="/">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlText1">管理人ハンドルネーム</label>
            <input type="text" name="handleName" class="form-control" id="exampleFormControlText1" value="{{ $caretaker->handleName }}" />
      </div> 
      <div class="form-group"> 
            <label for="exampleFormControlTextarea1">管理人プロフィール</label>
            <textarea tyoe="text" name="profile" class="form-control" id="exampleFormControlTextarea1" rows="5" >{{ $caretaker->profile }}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">更新</button>
    </form>
    @if (count($errors) > 0)
<div>
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
</div>

@endsection