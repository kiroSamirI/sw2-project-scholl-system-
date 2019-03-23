<html>/**

* Created by PhpStorm.
* User: mina
* Date: 3/20/19
* Time: 6:02 PM
*/
<head>
    <meta charset="utf-8">

</head>
<body>

@foreach($teacheres as $teacher)
    <div>
        <h2>   {{$teacher->id}}  & {{$teacher->grade}}&{{$teacher->counter}}&{{$teacher->NStudent}}&{{$teacher->class}}&
            <a href="{{action('$teacherController@edit',$teacher['id'])}}" class="btn btn-success"> Edit</a>
        </h2>
    </div>
@endforeach
</body>
</html>
