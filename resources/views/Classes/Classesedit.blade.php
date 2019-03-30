<html>
<head>
    <meta charset="utf-8">

</head>
<body>
<form action="{{action('ClassesController@update',$id)}}" method='POST'>
    {{csrf_field()}}
    Grade<input type="number" name="grade" value="{{$class->grade}}">
    Counter<input type="number" name="counter" value="{{$class->counter}}">
    Number of student<input type="number" name="NStudent" value="{{$class->NStudent}}">
    Floor<input type="number" name="Floor" value="{{$class->Floor}}"><input type="hidden" name="_token" value="{{ app('session')->token() }}">
    {{method_field('PUT')}}
    <button type="submit" name="button">update</button>
</form>

</body>
</html>