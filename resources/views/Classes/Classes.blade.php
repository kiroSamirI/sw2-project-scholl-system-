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
        <h2>   {{$class->id}}  & {{$class->grade}}&{{$class->counter}}</h2>
      </div>
    @endforeach
</body>
</html>