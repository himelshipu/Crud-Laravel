@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
            <div class="card">
                <div class="card-header bg-primary text-light d-flex justify-content-between align-items-center">
               <h5 class="nb-0">All Students</h5> 
               <a href="{{route('student.create')}}" class="btn btn-light">create student</a>
              </div>

                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Action</th>

                           </tr>
                       </thead>
                       <tbody>
                        @foreach($students as $index=>$student)
                           <tr>
                               <td>{{$index+1}}</td>
                               <td>{{$student->name}}</td>
                               <td>{{$student->email}}</td>
                               <td>Pending</td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection