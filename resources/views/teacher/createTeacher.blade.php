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
        {{Form::label('confirm password' , 'confirm password')}}

        {{Form::password('password_confirmation',['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('subject' , 'subject')}}

        <select class="form-control" id="exampleFormControlSelect1" name="subject">
            <option>select</option>
            @foreach($subjects as $subject)
                <option value=" {{$subject->id}}">{{$subject->name}} - {{$subject->year}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {{Form::label('subject' , 'class')}}

        <select class="form-control" id="exampleFormControlSelect1" name="class">
            <option>select</option>
            @foreach($classes as $class)
                <option value=" {{$class->id}}">{{$class->grade}} / {{$class->counter}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primery">submit</button>
    {!! Form::close() !!}



@endsection



