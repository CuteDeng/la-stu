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
<table style="border: 1px dashed #ccc">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>eamil</th>
            <th>avatar</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $datum)
        <tr>
            <td>{{$datum->id}}</td>
            <td>{{$datum->name}}</td>
            <td>{{$datum->age}}</td>
            <td>{{$datum->eamil}}</td>
            <td><img width="50px" height="50px" src="{{ltrim($datum->avatar,'.')}}" alt=""></td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $data->links() }}
</body>
</html>