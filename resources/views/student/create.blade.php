@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-light text-light d-flex justify-content-between align-items-center">

                  <h5 class="nb-0">All Students</h5>
                 <a href="{{route('student.aa')}}" class="btn btn-light">Back to all students</a>
              
                </div>

           

           <div class="row">
                  <div class="col-6 offset-3">
                   
                    <form action="{{route('student.store')}}" method="post">
                        @csrf
                      <div class="form-group">
                       <label for="">student name</label>
                         <input type="text" class="form-control" name='name' placeholder="enter your name">
                       </div>

                      <div class="form-group">
                          <label for="">student email</label>
                          <input type="email" class="form-control" name='email' placeholder="enter your email">
                      </div>

                         <div class="form-group">
                           <button type="submit" class="btn-success">Submit Data</button>
                      </div>                        
                      
                     
                </form>

                </div>
                    </div>  
            </div>
        </div>
    </div>
</div>
@endsection