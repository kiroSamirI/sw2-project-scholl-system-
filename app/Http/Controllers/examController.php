<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Classes;
use App\Subject;
class examController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('exams.addQuestion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $question_type=$request->input('test');
        $exam = new Exam;
        if($question_type=='choose'){
            //validation
            $this->validate($request,[
                'choose_question'=>'required',
                'right_answer' =>'required',
                'wrong_answer1'=>'required',
                'wrong_answer2'=>'required',
                'wrong_answer3'=>'required',
                'unit'         => 'required'
            ]);
            //storing
            $exam->question = $request->input('choose_question');
            $exam->right_answer= $request->input('right_answer');
            $exam->wrong_answer1= $request->input('wrong_answer1');
            $exam->wrong_answer2= $request->input('wrong_answer2');
            $exam->wrong_answer3= $request->input('wrong_answer3');
            $exam->class_id = auth()->user()->class_id;
            $exam->subject_id = auth()->user()->subject;
            $exam->unit = $request->input('unit');
            $exam->question_type=$question_type;

            $exam->save();
        }else if($question_type=='true_or_false'){
            //validation
            $this->validate($request,[
                'T_F_question'=>'required',
                'answer'=>'required',
                'unit'  => 'required'
            ]);
            //storing
            $exam->question = $request->input('T_F_question');
            if($request->input('answer')=='true'){
                $exam->right_answer= 'true';
            }else{
                $exam->right_answer= 'false';
            }

            $exam->question_type=$question_type;
            $exam->class_id = auth()->user()->class_id;
            $exam->subject_id = auth()->user()->subject;

            $exam->unit = $request->input('unit');
            $exam->save();
        }else{
            //validation
            $this->validate($request,[
                'complete_question'=>'required',
                'complete_answer'=>'required',
                'unit'         => 'required'
            ]);
            //storing
            $exam->question = $request->input('complete_question');
            $exam->right_answer= $request->input('complete_answer');
            $exam->class_id = $request->input('class');
            $exam->question_type=$question_type;
            $exam->class_id = auth()->user()->class_id;
            $exam->subject_id = auth()->user()->subject;

            $exam->unit = $request->input('unit');
            $exam->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::where('id' , $id)->first();
        $classes = Classes::where('grade' , $subject->year)->get();
        $examQuestions = NULL;

        foreach ($classes as $class){
            //return $class->id;
            $examQuestions = Exam::where('class_id' ,$class->id)->where('subject_id',$subject->id)->get();
            if($examQuestions != []){
                break;
            }
        }

        return view('exams.solveExam')->with('examQuestions' , $examQuestions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function calaulate(Request $request){
        $count = $request->input('count');
        $result = 0;
        for ($i=0; $i < $count ; $i++) {

            if($request->input('answer'.$i) != null){
                $arr = explode("_" , $request->input('answer' . $i));
                //return $arr[0];
                $question = exam::find($arr[1]);
                if ($question->question_type == 'complete') {
                    if($question->right_answer  == $request->input('Complete_answer' . $i))
                        $result++;

                }
                else {
                    if($question->right_answer  == $arr[0]){
                        //return $question->right_answer . $arr[0];
                        $result++;
                    }
                }

            }
        }
        return $result;
    }
}
