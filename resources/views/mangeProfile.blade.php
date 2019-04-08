<?php $id = auth()->user()->id  ?>
<form method="POST" action="{{ url("/mangeProfile/$id") }}" enctype="multipart/form-data">
    name <input name="name" type="text" value= "{{$user->name}}" ><br>
    email <input type="email" name="email" value= "{{$user->email}}" ><br>
    password <input type="password" name="password"><br>
    {{ csrf_field() }}
    confirm password <input type="password" name="password_confirmation"><br>
    image <input type="file" name="image">
    <input type="hidden" value="PUT" name="_method">
    submit <button type="submit">submit</button>
    
</form>