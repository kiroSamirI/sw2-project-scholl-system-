@extends("AdminPanels.admin")
@section('content')
    {!! Form::open(array('url' => "/bus",'method' => 'POST' )) !!}
    <div class="form-group">
        {{Form::label('place' , 'place')}}

        {{Form::text('place' , "" ,['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('price' , 'price')}}

        {{Form::number('price' , "" ,['class' => 'form-control'])}}
    </div>



    <button type="submit" class="btn btn-primery">submit</button>
    {!! Form::close() !!}



@endsection



