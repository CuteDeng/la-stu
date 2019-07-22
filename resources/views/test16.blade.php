<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <button type="button" id="btn">提交</button>
</body>
<script>
    $(function () {
        $("#btn").click(function () {
            $.get('/test/test17',function(data){
                console.log(data);
            },'json');
        })
    });
</script>
</html>