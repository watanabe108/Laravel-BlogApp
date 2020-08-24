@extends('layouts.app')

@section('content')

<div class="container mt-2">
    <div class="row">
        表題をクリックして選択してください。詳細が表示されます    
    </div>
        
  <div class="row">
    <div class="col-md-6">
      @foreach ($logs as $log)
        <a href="/log/change_delete/select?id={{$log->id}}">{{$log->logTitle}}</a><br>
      @endforeach
        {{$logs->appends(['id' => $row->id])->links()}}
    </div>
    
    <div class="col-md-6">
      <P>{{ $row->logTitle }}</P>
      <textarea class="form-control readonly" id="exampleFormControlTextarea1" rows="15">{{ $row->detail }}</textarea>
      
      <div class="row">
        <div class="col-1"></div>
        <a class="btn btn-primary col-md-2" href="/" role="button">Back</a>
      <div class="col-2"></div>
      <div class="col-md-3">  
        <form action="/log/delete/conf/" method="post">
          @csrf
            <input type="hidden" name="logTitle" value="{{ $row->logTitle }}">
            <input type="hidden" name="detail" value="{{ $row->detail }}">
            <input type="hidden" name="id" value="{{ $row->id }}">
          <!-- <div class="col-1"></div> -->
          <button type="submit"class="btn btn-primary">削除</button>
        </form>
      </div>
      <div class="col-md-3">
          <!-- <div class="col-1"></div> -->
          <form  action="/log/change/" method="post">
          @csrf
            <input type="hidden" name="logTitle" value="{{ $row->logTitle }}">
            <input type="hidden" name="detail" value="{{ $row->detail }}">
            <input type="hidden" name="id" value="{{ $row->id }}">
          <button type="submit" class="btn btn-primary ">編集</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>

@endsection