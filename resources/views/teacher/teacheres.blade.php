
@extends('AdminPanels.admin')
@section('content')
 
<link rel="stylesheet" href="table/css/style.css">

  


<div id="f-accordion">
  <h3><i class="fa fa-tasks"></i> Section 1</h3>
<div>

     
      
      <aside class="alert success">
  <p><i class="icon fa fa-envelope-o"></i> Roger Roger, Message Received. <i class="close fa fa-times"></i></p>
  </aside><!-- end alert -->

  <!---
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" placeholder="Password">
  </div>
  ---->
<input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /> <a class="button"><i class="fa fa-exclamation-circle"></i> Report Error</a>
  <section class="table-box">
      <table class="order-table">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>edit</th>
                 
              </tr>
          </thead>
          <tbody>
            @foreach($teacheres as $teacher)   
              <tr>
                    <td>{{$teacher->name}}</td>
                  <td>{{$teacher->email}}</td>
                  <td><a href="/teacher/{{$teacher->id}}/edit" class="btn btn-primary"> Edit</a></td>
                 >
              </tr>
            @endforeach 
      </table>
  </section>
  

  <!-- jQuery via Google's CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>



  <script  src="table/js/index.js"></script>






@endsection



  
  





