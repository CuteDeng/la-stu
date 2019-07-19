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
<form action="/test/test11">
    <input type="text" name="name" placeholder="姓名">
    <input type="text" name="age" placeholder="年齡">
    <input type="text" name="email" placeholder="email">
    {{csrf_field()}}
    <button type="submit">提交</button>
</form>
</body>
</html>