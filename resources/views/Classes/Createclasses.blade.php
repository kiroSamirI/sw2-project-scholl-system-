<html>/**

* Created by PhpStorm.
* User: mina
* Date: 3/16/19
* Time: 7:14 PM
*/
<head>
    <meta charset="utf-8">

</head>
<body>

/**
 * Created by PhpStorm.
 * User: mina
 * Date: 3/16/19
 * Time: 7:14 PM
 */<form action="{{URL::to('/createClass')}}" method='POST'>
    <input type="number" name="grade">
    <input type="number" name="counter"><input type="hidden" name="_token" value="{{ app('session')->token() }}">

    <button type="submit" name="button">Add</button>
</form>

</body>
</html>