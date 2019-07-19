當前日期：{{ $date }}
<br>
明年日期：{{ date('Y-m-d H:i:s',$time) }}
<br>
id&emsp;&emsp;name&emsp;&emsp;age&emsp;&emsp;
<br>
@foreach($data as $val)
    {{ $val->id }}&emsp;&emsp;
    {{ $val->name }}&emsp;&emsp;
    {{ $val->age }}&emsp;&emsp;
    <br>
@endforeach
星期
@if($day == '1')
    一
@elseif($day == '2')
    二
@elseif($day == '3')
    三
@elseif($day == '4')
    四
@elseif($day == '5')
    五
@elseif($day == '6')
    六
@else
日
@endif