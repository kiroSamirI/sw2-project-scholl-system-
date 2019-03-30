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

    @foreach($classes as $class)
      <div>
          <h2>   {{$class->id}}  & {{$class->grade}}&{{$class->counter}}&{{$class->NStudent}}&{{$class->Floor}}&
              <a href="{{action('ClassesController@edit',$class['id'])}}" class="btn btn-success"> Edit</a>
          </h2>
      </div>
    @endforeach
</body>
</html>