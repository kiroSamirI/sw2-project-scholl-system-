<html>
<head>
    <meta charset="utf-8">

</head>
<body>
<form action="{{url('/Classes')}}" method='POST'>
    Grade<input type="number" name="grade">
    Counter<input type="number" name="counter">
    Number of student<input type="number" name="NStudent">
    Floor<input type="number" name="Floor"><input type="hidden" name="_token" value="{{ app('session')->token() }}">

    <button type="submit" name="button">Add</button>
</form>

</body>
</html>