<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(count($errors) >0)
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif
<form action="/test/test13" method="post">
    <input type="text" name="name" placeholder="姓名">
    <input type="text" name="age" placeholder="年齡">
    <input type="text" name="email" placeholder="email">
    <p>
        <input type="text" name="captcha"><img src="{{captcha_src()}}" alt="">
    </p>
    {{csrf_field()}}
    <button type="submit">提交</button>
</form>
</body>
</html>