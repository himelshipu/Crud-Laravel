@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="case_intro " style="background-color: #88A1B5; height: 400px; width: 60%;margin: 0 auto; ">
            <h4 style="position: relative;top: 7px;left: 11px;">case intro</h4>
            <div class="case_insider" style="background-color: #FFFFFF; height: 86%; width: 96%;margin: 0px auto;">
                <div class="case_details" style="border: 1px solid #B9B9B9; height: 80%;width: 99%;margin:0px auto;margin: 0px auto;position: relative;top: 3px;">
                   <span>day 1 @ 11am</span>  <br>
                    <span>office</span><br>
                    <p style=" margin:0px auto;padding-top:15px;  width: 95%; text-align: justify;">Modals are built with HTML, CSS, and JavaScript. They're positioned over everything else in
                        the document and remove scroll from the
                        hat modal content scrolls instead. Clicking on the modal “backdrop” will automatically close the modal. Bootstrap only supports one modal</p>
                </div>
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col-2">
                        <button type="button" class="btn btn-lg" style="align-content: center; margin-top: 7px; width: 100px; height: 40px; background-color: #F1F1F1; border: 1px solid #F1F1F1;">ok</button>
                    </div>
                    <div class="col-5"></div>
                </div>

            </div>
        </div>
    </div>
</div>




@endsection
