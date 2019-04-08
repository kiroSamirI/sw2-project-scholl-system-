@extends("AdminPanels.admin")
@section('content')
    {!! Form::open(array('url' => "/subject",'method' => 'POST' )) !!}
    <div class="form-group">
        {{Form::label('Name' , 'Name')}}

        {{Form::text('name' , "" ,['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('year' , 'year')}}
    
        {{Form::number('year' , "" ,['class' => 'form-control'])}}
    </div>



    <button type="submit" class="btn btn-primery">submit</button>
    {!! Form::close() !!}



@endsection



