@extends('layouts.app')

@section('content')

<div class="container mt-2">
    <form action="{{ $url }}" method="post" >
        @csrf
        <div class="form-group">
            <input type="text" class="form-control readonly" name="logTitle" id="exampleFormControlText1" value="{{ $logTitle }}">
        </div>
        <div class="form-group">
            <textarea readonly type="text" class="form-control" name="detail" id="exampleFormControlTextarea1" rows="7">{{ $detail }}</textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" id="exampleFormControlText1" value="{{ $id }}">
        </div>
    <p class="text-center">{{ $msg }}</p>

    <div class="row">
        <div class="col-2"></div>
            <a class="btn btn-primary col-md-3" href="{{ $back_url }}{{ $firstId->id }}" role="button">Back</a>
            <div class="col-2"></div>
            <button type="submit" class="btn btn-primary col-3">確定</button>
    </div>
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