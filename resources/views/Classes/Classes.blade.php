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
<form action="{{route('ClassesController@createClass'}}" method='POST'>
    <input type="number" name="grade">
    <input type="number" name="counter">
    <input type="hidden" name="_token" value="{{csrg_token()}}">
    <button type="submit" name="button">Add</button>
</form>
</body>
</html>