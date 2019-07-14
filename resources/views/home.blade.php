@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')
<div class="first-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="first-slide" src="{{asset('style/img/About-img (1).jpg')}}">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1>2nd Convocation of NSTU</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="second-slide" src="{{asset('style/img/alumni1.jpg')}}">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>ICPC Programming Contest 2018</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="third-slide" src="{{asset('style/img/alumni3.jpg')}}">
                <div class="container">
                  <div class="carousel-caption text-right">
                    <h1>PI day Programming Contest 2019</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <img class="second-slide" src="{{asset('style/img/webinar.jpg')}}">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>CSTE Alumni Association Webinar 2019</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <img class="second-slide" src="{{asset('style/img/caram-play.jpg')}}">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Tanvir Sazzad Memorial Sports Competition</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="profile-tabs">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="alumni-tab" data-toggle="tab" href="#alumni" role="tab" aria-controls="alumni" aria-selected="true">Alumni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#committee" id="committee-tab" data-toggle="tab" role="tab" aria-controls="committee" aria-selected="false">Committee</a>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="alumni" role="tabpanel" aria-labelledby="alumni-tab">
                @if(count($users) < 6)
                  @for ($i = 0; $i < count($users); $i++)
                    <a href="{{'/alumni_profile/'.$users[$i]->id}}">
                      <div class="alumni-area">
                        <img src="uploads/images/@if($users[$i]->avatar){{$users[$i]->avatar}}@else{{("avatar.png")}} @endif">
                        <h4>{{$users[$i]->full_name}}</h4>
                        <p>@if($users[$i]->present){{$users[$i]->present}}@else not updated @endif</p>
                      </div>
                    </a>
                  @endfor
                @else
                    @for ($i = 0; $i < 5; $i++)
                    <a href="{{'/alumni_profile/'.$users[$i]->id}}">
                        <div class="alumni-area">
                          <img src="uploads/images/@if($users[$i]->avatar){{$users[$i]->avatar}}@else{{("avatar.png")}} @endif">
                          <h4>{{$users[$i]->full_name}}</h4>
                          <p>{{$users[$i]->present}}</p>
                        </div>
                      </a>
                    @endfor
                @endif

              <a href="{{ url('/alumni_list') }}" class="btn btn-primary" style="float: right">Next</a>
          </div>

          <div class="tab-pane fade" id="committee" role="tabpanel" aria-labelledby="committee-tab">
            @if(count($users) < 6)
            @for ($i = 0; $i < count($users); $i++)
              <a href="{{'/alumni_profile/'.$users[$i]->id}}">
                <div class="alumni-area">
                  <img src="uploads/images/@if($users[$i]->avatar){{$users[$i]->avatar}}@else{{("avatar.png")}} @endif">
                  <h4>{{$users[$i]->full_name}}</h4>
                  <p>@if($users[$i]->designation){{$users[$i]->designation}}@else not updated @endif</p>
                </div>
              </a>
            @endfor
          @else
              @for ($i = 0; $i < 5; $i++)
              <a href="{{'/alumni_profile/'.$users[$i]->id}}">
                  <div class="alumni-area">
                    <img src="uploads/images/@if($users[$i]->avatar){{$users[$i]->avatar}}@else{{("avatar.png")}} @endif">
                    <h4>{{$users[$i]->full_name}}</h4>
                    <p>{{$users[$i]->designation}}</p>
                  </div>
                </a>
              @endfor
          @endif
              <a href="{{ url('/committee') }}" class="btn btn-primary" style="float: right">Next</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about">
    <section class="page-content-wrap">
       <div class="container">
        <div class="row">
          <div class="col-lg-9 m-auto" style="background-color: #fff;">
              <div class="about_text">
                  <span class="year">2019</span>
                    <img src="{{asset('style/img/About-img (1).jpg')}}" class="img-fluid img-left">
                    <h4>Welcome to University of Noakhali Science & Technology University.</h4>
                    <p>An alumni association is an association of graduates or, more 
                    broadly, of former students (alumni). Alumni associations can 
                    help connect alumni, friends, and students and promote the 
                    University. The purpose of this system is to provide clear guidance for the operation of alumni associations supporting campuses of the University of Noakhali Science & Technology University. <br><br>
                    The main goal of this system is to allow old and new students of a university to communicate with each other. New students don’t know about alumni students who are already completed their graduation. For that reason, we would like to create a project as name Alumni Association Info where all the information of alumni students would given in their own profile. When any new student want to know about their seniors, they will search in search option. After completing the graduation, students are searching the job at different company. But they have no idea about these company.<br><br>

                    In this Alumni Association info, all the information of Alumni Association members would given by their job category wise in their profile. They would know about these company from their senior brothers/sisters if any senior works there. Then they will contact with them for this job purpose in chat section. Now-a-days, all the students are activated in different kinds of social media like facebook, linkedin, google-plus, twitter. All the information will update by facebook and linkedin in future.
                  </p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card my-4" style="margin-top:0px !important;">
                  <h5 class="card-header">Latest News</h5>
                  <div class="card-body">
                    <ul>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                      <li><a href="#">News will be goes here</a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div> 
        </div>
    </section>
</div>

@endsection