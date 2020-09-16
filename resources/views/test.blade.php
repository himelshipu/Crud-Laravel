@extends('layouts.app')

@push('css')
<style>

     @font-face {
            font-family:'bariolregular';
            src: url('/font/bariol_regular-webfont.ttf') format('ttf');
            font-style: normal;
            font-weight: bold;
        }

html,body{


  height: 100%;
  margin: 0;
}

    .formarea h5{
      color:#0D5245;

    }


    .formarea{
      width: 60%;
      height: 100%;
      overflow-y: auto;
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
  box-shadow: rgba(0, 0, 0, 0.3) 0 5px 40px, rgba(0, 0, 0, 0.3) 0 5px 10px;
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



.table-style .today {background: #2A3F54; color: #ffffff;}
.table-style th:nth-of-type(7),td:nth-of-type(7) {color: blue;}
.table-style th:nth-of-type(1),td:nth-of-type(1) {color: red;}
.table-style tr:first-child th{background-color:#F6F6F6; text-align:center; font-size: 15px;}

/*clock*/


 

/*endclock*/
.profile table{
border:1px solid #979797;
}
 .profile th{
background-color: #E4E4E4;
border:1px solid #979797;
}
.profile tr{
background-color: #F5F5F5;
}

.proflie ul{
  list-style-type: none;
}

</style>

@endpush


@section('content')



<!-- <div class="container shadow p-3 mb-5  rounded formarea clearfix">
  
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
            <option disabled selected hidden>Select one</option>
            <option value="male">male</option>
            <option value="male">female</option>
            <option value="male">other</option>
      
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
          <option disabled selected hidden>Select one</option>
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
           <option disabled selected hidden>Select one</option>
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
            <option value="Dhanmondi">Dhanmondi</option>
            <option value="Badda">Badda</option>
            <option value="Mirpur">Mirpur</option>
           
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
      <label><input type="checkbox" value="english"> English </label>
      <label><input type="checkbox" value="french"> French </label>
      <label><input type="checkbox" value="Portugese"> Portugese </label>
    </div>
        </div>

  </div><br>

 <div class="row">
    
          <div class="col-2 align-items-center">picture</div>

        <div class="col-4"> 
           
             <input type="file" class="form-control" id="img" name="img" accept="image/*" style="background-color: none;border:none;">
        </div>
        <div class="col-6"> </div>

  </div><br>
 
      <button type="submit" class="btn float-right">Register</button>



  </form>
</div> -->


<hr>




<!-- login form -->

<!-- <div class="container min-container py-md-5 mt-4">
  <div class="card-panel p-sm-5 position-relative">
           <img src="" alt="Cool Imam Logo">
            <h2 style= "color: #0D5245; text-align: center; font-family: impact; font-size: 1.5rem; font-weight: bold; display: block;">COOL IMAM</h2>
    <form id="loginForm" class="mt-5">
  
      <div class="form-group position-relative">
         <i class="fa fa-user fa-lg position-absolute"> | </i>
       
        <input type="email" class="form-control input-lg rounded-0 shadow" id="email" class="email" name="email"  placeholder="Email Address" required="" >
       
        </div>
  
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
</div>
 -->
<!-- login form -->



<!-- 
<div class="container">
  <div class="row">
    <div class="col-10">
      


    <div class="card profile" >
        <div class="row justify-content-center" style="margin-top: 20px;">
          <div class="col-4">
            <ul style="list-style-type: none;">
              <li><h3 class="bold">Abdel Al Kareem</h3></li>
              <li>Member Since <span>20-april-2020</span></li>
              <li>Mobile: <span>+234 1 298 </span></li>
              <li>Email: <span>rashkareem@gmail.com </span></li>
              <li>Address: <span>2,Hakeem ontiri street,offlago,palaway,nigeria</span></li>
              <li>Preferred Language <span>French,English</span></li>
            </ul>
          </div>
          <div class="col-4" style="list-style-type: none;">
            <ul  style="margin-top: 30%;">
              <li>Date of Birth : <span>20-april-2020</span></li>
              <li>Gender: <span>Male</span></li>
            </ul>
          </div>
          <div class="col-2">
             <img src="" alt="img not found" class="img-fluid" style="max-height: 60px;max-width: 60px">
          </div>
        </div>
 -->

               <!--  Apply table -->
        <!--   <div class="row justify-content-center">

            <div class="col-10">
                <caption>Courses Applied </caption>
                 <table class="table table-bordered enroll_table">
              
        <thead class="">
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Start Date</th>
            <th>Enroll Date</th>
            <th>Score</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Binding Divides to Strengthen Communities</td>
            <td>12/dec/2129</td>
            <td>10/dec/2019</td>
            <td>59%</td>
          </tr>
           <tr>
            <td>1</td>
            <td>Binding Divides to Strengthen Communities</td>
            <td>12/dec/2129</td>
            <td>10/dec/2019</td>
            <td>59%</td>
          </tr>
            <tr>
            <td>1</td>
            <td>Binding Divides to Strengthen Communities</td>
            <td>12/dec/2129</td>
            <td>10/dec/2019</td>
            <td>59%</td>
          </tr>
        </tbody>
      </table>
            </div>
          </div>
          <br>
 -->


    <!--  Enrolled_table -->
<!-- 
            <div class="row justify-content-center">
            <div class="col-10">
              <caption>Courses Enrolled </caption>
                 <table class="table table-bordered enroll_table">
        <thead class="">
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Start Date</th>
            <th>Enroll Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Binding Divides to Strengthen Communities</td>
            <td>12/dec/2129</td>
            <td>10/dec/2019</td>
            <td>>Enrolled</td>
          </tr>
           <tr>
            <td>1</td>
            <td>Binding Divides to Strengthen Communities</td>
            <td>12/dec/2129</td>
            <td>10/dec/2019</td>
            <td>>Enrolled</td>
          </tr>
            <tr>
            <td>1</td>
            <td>Binding Divides to Strengthen Communities</td>
            <td>12/dec/2129</td>
            <td>10/dec/2019</td>
            <td>Enrolled</td>
          </tr>
        </tbody>
      </table>
            </div>
          </div>
       -->

    <!--  Enrolled_table -->
   </div>


 

    </div>
  </div>
</div>



abc






@endsection