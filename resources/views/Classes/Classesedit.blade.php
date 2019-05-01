@extends("AdminPanels.admin")
@section('content')
    {!! Form::open(array('action' => ["ClassesController@update",$class->id],'method' => 'POST' )) !!}
    <div class="form-group">
        {{Form::label('grade' , 'grade')}}

        {{Form::number('grade' , "$class->grade" ,['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('counter' , 'counter')}}

        {{Form::number('counter' , "$class->counter" ,['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('NO of students' , 'NO of students')}}

        {{Form::number('NStudent' ,"$class->NStudent" ,['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('Floor' , 'Floor')}}

        {{Form::number('Floor',"$class->Floor",['class' => 'form-control'])}}
    </div>
{{Form::hidden('_method','PUT')}}


    <button type="submit" class="btn btn-primery">submit</button>
    {!! Form::close() !!}



@endsection




