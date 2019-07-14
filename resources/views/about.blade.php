@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')
<div class="about">
    <div class="Alumni-img">
        <div class="overlay">
            <div class="container">
                <div class="row">
                   <div class="col-lg-12 col-md-12 text-center">
                       <div class="heading">
                          <h2>About Us</h2>
                          <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need</p> 
                       </div>
                       <a href="#about-page" class="btn">Let's See</a>
                   </div> 
                </div>
            </div>
        </div>
    </div>
    <section class="page-content-wrap" id="about-page">
       <div class="container">
        <div class="row">
          <div class="col-lg-11 m-auto" style="background-color: #fff;">
              <div class="about_text">
                  <span class="year">2019</span>
                    <img src="{{asset('style/img/About-img (1).jpg')}}" class="img-fluid img-left">
                    <h4 class="title">Welcome to University of Noakhali Science & Technology University.</h4>
                    <p>An alumni association is an association of graduates or, more 
                    broadly, of former students (alumni). Alumni associations can 
                    help connect alumni, friends, and students and promote the 
                    University. The purpose of this system is to provide clear guidance for the operation of alumni associations supporting campuses of the University of Noakhali Science & Technology University. <br><br>
                    The main goal of this system is to allow old and new students of a university to communicate with each other. New students don’t know about alumni students who are already completed their graduation. For that reason, we would like to create a project as name Alumni Association Info where all the information of alumni students would given in their own profile. When any new student want to know about their seniors, they will search in search option. After completing the graduation, students are searching the job at different company. But they have no idea about these company.<br><br>

                    In this Alumni Association info, all the information of Alumni Association members would given by their job category wise in their profile. They would know about these company from their senior brothers/sisters if any senior works there. Then they will contact with them for this job purpose in chat section. Now-a-days, all the students are activated in different kinds of social media like facebook, linkedin, google-plus, twitter. All the information will update by facebook and linkedin in future.
                  </p>
                </div>
              </div>
          </div> 
        </div>
    </section>
</div>

@include('includes.footer')
    
@endsection