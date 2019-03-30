<html>
<head>
    <meta charset="utf-8">

</head>
<body>

@foreach($teacheres as $teacher)
    <div>
        <h2>  
            <a href="/teacher/{{$teacher->id}}/edit" class="btn btn-success"> Edit</a>
        </h2>
    </div>
@endforeach
</body>
</html>
