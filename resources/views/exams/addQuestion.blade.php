@extends('AdminPanels.teacher')
@section('content')
{!! Form::open(['action' =>'examController@store','method'=>'POST' ,'enctype' => 'multipart/form-data']) !!}

<input id='watch-me' name='test' type='radio' value='complete'checked/> complete<br>
<input id='see-me' name='test' type='radio' value='choose' /> choose <br>
<input id='look-me' name='test' type='radio' value='true_or_false'/>true or false<br>
<br><br>

<!--complete -->
<div id='show-me'>
    <!-- Nav tabs -->
    <div class="form-group">
        {{Form::label('title','question')}}
        {{Form::text('complete_question','',['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('title','answer')}}
        {{Form::text('complete_answer','',['class' => 'form-control'])}}
    </div>
    {{Form::hidden('sub_id', 1)}}
</div>

<!--choose -->
<div id='show-me-two' style='display:none; border:2px solid #ccc'>
    <div class="form-group">
        {{Form::label('title','question')}}
        {{Form::text('choose_question','',['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('title',' right answer')}}
        {{Form::text('right_answer','',['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('title','wrong answer 1')}}
        {{Form::text('wrong_answer1','',['class' => 'form-control'])}}

    </div>
    <div class="form-group">
        {{Form::label('title','wrong answer 2')}}
        {{Form::text('wrong_answer2','',['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('title','wrong answer 3')}}
        {{Form::text('wrong_answer3','',['class' => 'form-control'])}}

    </div>
</div>

<!-- true$false-->
<div id='show-me-three' style='display:none; border:2px solid #ccc'>
    <div class="form-group">
        {{Form::label('title','question')}}
        {{Form::text('T_F_question','',['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('title','answer')}}<br>
        <input id='watch-me' name='answer' type='radio' value='true'/> true<br>
        <input id='see-me' name='answer' type='radio' value='wrong'/> false <br>

    </div>
</div>


<div class="form-group">
    {{Form::label('title','unit')}}<br>
    <input class="form-control" type="number" value="" name="unit" min="1" required>
</div>
<div class="form-group">
{{Form::submit('Submit',['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
</div>
    @endsection