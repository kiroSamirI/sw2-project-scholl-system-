@extends('AdminPanels.admin')
@section('content')
    

 
  
        <link rel="stylesheet" href="table/css/style.css">

        <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /> <a class="button"><i class="fa fa-exclamation-circle"></i> Report Error</a>
            <section class="table-box">
                <table class="order-table">
                    <thead>
                        <tr>
                            <th>grade</th>
                            <th>counter</th>
                            <th>NO of students</th>
                            <th>Floor</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($classes as $class)
                        <tr>
                            <td>{{$class->grade}}</td>
                            <td>{{$class->counter}}</td>
                            <td>{{$class->NStudent}}</td>
                            <td>{{$class->Floor}}</td>
                            <td><a href="/Classes/{{$class->id}}/edit" class="btn btn-primary"> Edit</a></td>
                        </tr>
                        @endforeach                    
                </table>
            </section>
            
         
            <!-- jQuery via Google's CDN -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
          
          
        
            <script  src="table/js/index.js"></script>
    
    
            @endsection