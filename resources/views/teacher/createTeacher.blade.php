<form method="POST" action="{{ url('/teacher') }}">
name <input name="name" type="text"><br>
email <input type="email" name="email" ><br>
password <input type="password" name="password"><br>
confirm password <input type="password" name="password_confirmation">
submit <button type="submit">submit</button>
@csrf
</form>