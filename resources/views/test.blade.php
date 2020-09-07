@extends('layouts.app')

@push('css')
<style>

    .formarea h5{
      color:#0D5245;

    }


    .formarea{
      width: 60%;
      background-color: white;
      border: 1px solid #C0C0C0;
       font-family: sans-serif;

    }

 .formarea button{
     background-color:#0D5245;
     color: white;
   }





   /* Optional styling for the form container box */


.card-panel {
  box-shadow: rgba(0, 0, 0, 0.1) 0 5px 40px, rgba(0, 0, 0, 0.1) 0 5px 10px;
  border-bottom: 10px solid transparent;
  transition: box-shadow 0.25s;
  padding: 20px;
  margin: 0.5rem 0 1rem;
  border-radius: 2px;
  background-color: #fff;
}

/* Font Awesome Icons */

.form-group a i {
  font-family: FontAwesome;
  margin: 0 auto;
  font-size: 5rem;
  font-style: normal;
}

.min-container .card-panel form .fa {
  top: 13px;
  left:1rem;
  
  color: #7F8084;
}

#loginForm input{
  background-color:#F5F5F5; 
  text-align: center;
  font-size: 1.25rem;

}

#loginForm button{
  background-color: #0D5245;
}

#loginForm a{
  color: #7F8084;
  font-size: 1.25rem;
}


/* Media Queries */

@media (min-width: 768px) {
  .min-container {
    max-width: 650px;
  }
}

.min-container {
  margin: 0 auto;
}
</style>

@endpush


@section('content')



<div class="container shadow p-3 mb-5  rounded formarea clearfix">
  
  <br>
  <h5 >Registration</h5>
  <form action="/action_page.php" class="form">

    
  <div class="row">
    
          <div class="col-2 align-items-center">Name </div>

        <div class="col-10"> 
  
        <input type="text" class="form-control" id="name"  name="name">
        </div>

  </div><br>

    <div class="row">
      <div class="col-2 align-items-center"> Mobile</div>

      <div class="col-4">
        <input type="text" class="form-control" id="mobile"  name="mobile">
      </div>

      <div class="col-2 align-items-center"> email </div>

      <div class="col-4">
        <input type="text" class="form-control" id="email"  name="email">
      </div>

    </div><br>

      <div class="row">

      <div class="col-2 align-items-center"> Date of birth </div>

      <div class="col-4">
        <input type="date" class="form-control" name="dob"  name="dob">
      </div>

      <div class="col-2 align-items-center"> Gender </div>

      <div class="col-4"> 
          <select class="form-control" id="gender">
            <option></option>
            <option>male</option>
            <option>female</option>
            <option>other</option>
      
          </select>
        </div>

    </div><br>

     <div class="row">

      <div class="col-2 align-items-center"> Address </div>

      <div class="col-4">
        <input type="text" class="form-control" name="address "  name="address">
      </div>

      <div class="col-2 align-items-center"> country </div>
        <div class="col-4"> 
          <select class="form-control" id="country">
            <option></option>
            <option>Bangladesh</option>
            <option>Pakistan</option>
            <option>India</option>
            <option>Nepal</option>
          </select>
        </div><br>
   </div> <br>





  <div class="row">
         <div class="col-2 align-items-center"> city </div>
        <div class="col-4"> 
          <select class="form-control" id="city">
           <option></option>
            <option>Dhaka</option>
            <option>Dhaka</option>
            <option>Dhaka</option>
            <option>Dhaka</option>
          </select>
        </div>

        
       <div class="col-2 align-items-center"> Region </div>
        <div class="col-4"> 
          <select class="form-control" id="region">
            <option></option>
            <option>Dhanmondi</option>
            <option>Dhanmondi</option>
            <option>Dhanmondi</option>
            <option>Dhanmondi</option>
          </select>
        </div>
    </div>  <br>

  
   <div class="row">
    
          <div class="col-2 align-items-center"> interest </div>

        <div class="col-10"> 
          <textarea name="" id="" width="100%" rows="10" type="text" class="form-control"></textarea>
        </div>

  </div><br>

  <div class="row">
    
          <div class="col-3 align-items-center">Prefered Language </div>

        <div class="col-9"> 
          <div class="checkbox">
      <label><input type="checkbox" value=""> English </label>
      <label><input type="checkbox" value=""> English </label>
      <label><input type="checkbox" value=""> English </label>
    </div>
        </div>

  </div><br>

 
 
      <button type="submit" class="btn float-right">Register</button>



  </form>
</div>


<hr>

<section class="container min-container py-md-5 mt-4">
  <div class="card-panel p-sm-5 position-relative">
           <img src="" alt="Cool Imam Logo">
            <span style= "color: #0D5245; text-align: center; font-family: impact; font-size: 1.5rem; font-weight: bold; display: block;">COOL IMAM</h2>
    <form id="loginForm" class="mt-5">
  
      <div class="form-group position-relative">
         <i class="fa fa-user fa-lg position-absolute"> | </i>
        <!-- <label for="email" class="sr-only">Email</label> -->
        <input type="email" class="form-control input-lg rounded-0 shadow" id="email" class="email" name="email"  placeholder="Email Address" required="" >
       
        </div>
     <!--  <label for="password" class="pull-left sr-only">Password</label> -->
      <div class="position-relative">
        <i class="fa fa-key fa-lg position-absolute"> | </i>
        <input class="form-control input-lg rounded-0 shadow" id="password" class="password" name="password" type="password" placeholder="Password" required="">
        
        </div>
      <div class="text-center my-4">
        <a href="" style="float: left">Forget Password?</a>
        <button class="btn text-white text-uppercase" type="submit" style="float: right">Log in</button>
      </div>
    </form>

  </div>
</section>


<div>
  abcd
</div>






@endsection