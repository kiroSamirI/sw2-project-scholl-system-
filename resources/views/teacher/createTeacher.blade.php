@extends("AdminPanels.admin")
@section('content')
    {!! Form::open(array('url' => "/teacher",'method' => 'POST' )) !!}
    <div class="form-group">
        {{Form::label('Name' , 'Name')}}

        {{Form::text('name' , "" ,['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('email' , 'Email')}}

        {{Form::email('email' , "" ,['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('password' , 'Password')}}

        {{Form::password('password'  ,['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('name' , 'confirm password')}}

        {{Form::password('password_confirmation',['class' => 'form-control'])}}
    </div>



    <button type="submit" class="btn btn-primery">submit</button>
    {!! Form::close() !!}



@endsection



