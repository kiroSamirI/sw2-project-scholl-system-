@extends('AdminPanels.user')
@section('content')
<?php
$x =0;
?>
<form action="/calaulate" method = 'POST'] >
    {{ csrf_field() }}
    @foreach($examQuestions as $question)
        <div class="border bborder-secondaryy " style="margin-bottom:50px">

            <div>
                {{$question->question}}
            </div>
        </div>
        <!--start of if statments-->
        @if($question->question_type=='choose')
            <!-- put the four answers in an array-->
            <?php
            $answers = array($question->right_answer,
                $question->wrong_answer1,
                $question->wrong_answer2,
                $question->wrong_answer3);
            shuffle($answers);

            ?>
            <!--shuffle the array -->
            {{Form::label('title','answer')}}<br>
            <input  name='answer{{$x}}' type='radio' value='{{$answers[0]}}_{{$question->id}}' /> {{$answers[0]}} <br>
            <input  name='answer{{$x}}' type='radio' value='{{$answers[1]}}_{{$question->id}}' /> {{$answers[1]}} <br>
            <input  name='answer{{$x}}' type='radio' value='{{$answers[2]}}_{{$question->id}}' /> {{$answers[2]}} <br>
            <input  name='answer{{$x}}' type='radio' value='{{$answers[3]}}_{{$question->id}}' /> {{$answers[03]}} <br>
            <?php
            $x++;
            ?>
        @endif

        @if($question->question_type=='complete')
            <div class="form-group">
                {{Form::label('title','الاجابه')}}
                <input type="hidden" name="answer{{$x}}" class="form-control" value="Complete_{{$question->id}}">
                <input type="text" name="Complete_answer{{$x}}" class="form-control" >
            </div>
            <?php
            $x++;
            ?>
        @endif
        @if($question->question_type=='true_or_false')
            <div class="form-group">
                {{Form::label('title','الاجابه')}}<br>
                <input id='watch-me' name='answer{{$x}}' type='radio' value='true_{{$question->id}}'/> صح<br>
                <input id='see-me' name='answer{{$x}}' type='radio' value='wrong_{{$question->id}}'/> خطأ <br>

            </div>
            <?php
            $x++;
            ?>
        @endif
@endforeach
<input type="hidden" value="{{$x}}" name="count">
{{Form::submit('Submit',['class' => 'btn btn-primary'])}}
@endsection