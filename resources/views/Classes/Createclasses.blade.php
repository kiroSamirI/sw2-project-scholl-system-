@extends("AdminPanels.admin")
@section('content')
        {!! Form::open(array('action' => "ClassesController@store",'method' => 'POST' )) !!}
        <div class="form-group">
            {{Form::label('grade' , 'grade')}}
    
            {{Form::number('grade' , "" ,['class' => 'form-control'])}}
        </div> 
    
        <div class="form-group">
            {{Form::label('counter' , 'counter')}}
        
            {{Form::number('counter' , "" ,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('NStudent' , 'Number of student')}}
        
            {{Form::number('NStudent' ,'' ,['class' => 'form-control'])}}
        </div> 
        <div class="form-group">
                    {{Form::label('Floor' , 'Floor')}}
            
                    {{Form::number('Floor','',['class' => 'form-control'])}}
        </div>  
        
       
        
     <button type="submit" class="btn btn-primery">submit</button>
    {!! Form::close() !!}

@endsection