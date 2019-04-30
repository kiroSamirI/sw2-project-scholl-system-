@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">


                        <form method="post" action="/uploadhomework" enctype="multipart/form-data">
                            <br> <input name="name" type="text" value= "name" >
                            <br>  <input type="file" name="file">
                            <br>   <button type="submit">submit</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
