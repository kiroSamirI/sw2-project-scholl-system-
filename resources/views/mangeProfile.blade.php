<?php $id = auth()->user()->id;
$role = auth()->user()->user_type;
$role = "AdminPanels." . $role;
?>
@extends($role)
@section('content')

<form method="POST" action="{{ url("/mangeProfile/$id") }}" enctype="multipart/form-data">
    name <input name="name" type="text" value= "{{$user->name}}" class="form-control" ><br>
    email <input type="email" name="email" value= "{{$user->email}}" class="form-control" ><br>
    password <input type="password" name="password" class="form-control"><br>
    {{ csrf_field() }}
    confirm password <input type="password" name="password_confirmation" class="form-control"><br>
    image <input type="file" name="image" class="form-control">
    <input type="hidden" value="PUT" name="_method" class="form-control">
    submit <br> <button type="submit" class="btn btn-primary">submit</button>
    
</form>
@endsection
