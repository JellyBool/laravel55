<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="container">
    <form action="/phone" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="phone">手机号:</label>
            <input name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
        </div>
        <div class="form-group">
            <button class="btn btn-success">验证手机号</button>
        </div>
    </form>
    @if(count($errors))
        <div class="has-error">
            {{ $errors->first() }}
        </div>
    @endif
</div>
</body>
</html>
