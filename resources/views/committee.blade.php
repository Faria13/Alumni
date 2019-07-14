@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')

<section id="committe">
      <div class="section-header">
        <h3>Our Honorable Committe</h3>
        <div class="line"></div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="committe-area">
              <img src="{{asset('style/img/Member_two.jpg')}}">
            </div>
            <div class="committe-intro">
              <h4>BRYAN WATSHON
                <span class="committe-deg">President</span>
              </h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="committe-area">
              <img src="{{asset('style/img/Member_three.jpg')}}">
            </div>
            <div class="committe-intro">
              <h4>BRYAN WATSHON
                <span class="committe-deg">President</span>
              </h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="committe-area">
              <img src="{{asset('style/img/Member_four.jpg')}}">
            </div>
            <div class="committe-intro">
              <h4>BRYAN WATSHON
                <span class="committe-deg">President</span>
              </h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="committe-area">
              <img src="{{asset('style/img/Profile-pic.PNG')}}">
            </div>
            <div class="committe-intro">
              <h4>BRYAN WATSHON
                <span class="committe-deg">President</span>
              </h4>
            </div>
          </div>
        </div>
      </div>
   </section>
@endsection