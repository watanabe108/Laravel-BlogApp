@extends('layouts.app')

<div class="container mt-2">
    <p>{{ $log->logTitle }}</p>
<textarea class="form-control align-center" id="exampleFormControlTextarea1" rows="7" readonly>{{ $log->detail }}</textarea>
<div class="row">
    <div class="col-5"></div>
        <a class="btn btn-primary col-md-2" href="/top" role="button">Back</a>
    <div class="col-5"></div>
</div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>