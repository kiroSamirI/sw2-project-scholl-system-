@extends("AdminPanels.admin")
@section('content')
    {!! Form::open(array('action' => ["teacherController@update",$teacher->id],'method' => 'POST' )) !!}
    <div class="form-group">
        {{Form::label('Name' , 'Name')}}

        {{Form::text('name' , "$teacher->name" ,['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('email' , 'Email')}}

        {{Form::email('email' , "$teacher->email" ,['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('password' , 'Password')}}

        {{Form::password('password'  ,['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('confirm-password' , 'confirm password')}}

        {{Form::password('password_confirmation',['class' => 'form-control'])}}
    </div>
{{Form::hidden('_method','PUT')}}


    <button type="submit" class="btn btn-primery">submit</button>
    {!! Form::close() !!}



@endsection



