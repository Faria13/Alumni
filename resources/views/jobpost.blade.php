@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.header')
<div class="back-image">
    <div class="img_overlay">
        <div class="container text-center">
            <h2 class="mb-0">Post a Job</h2>
        </div>
    </div>
</div>
<div class="job_post">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <form action="{{ url('/job_post') }}" method="POST">
                    <div class="form-group">
                        <label for="title">Job Title</label>
                        <input type="text" class="form-control" placeholder="eg. Full Stack Frontend">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="company">Compnay</label>
                        <input type="text" class="form-control" placeholder="eg. Facebook, Inc">
                    </div>
                    <br>
                    <div class="form-group">
                        <h3>Job Type</h3>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Full Time
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Part Time
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Temporary
                            </label>
                            <br><br><br>
                        </div>
                        
                        <div class="form-group">
                            <h3>Location</h3>
                            <input type="text" class="form-control" placeholder="Dhaka, Bangladesh">
                        </div>
                        <br>
                        <div class="form-group">
                            <h3>Job Description</h3>
                            <textarea type="text" class="form-control" rows="6" cols="6"
                            placeholder="Write something about your job.. " style="resize:none"></textarea>
                        </div>
                    <input type="submit" class="btn btn-success" value="Post a Job">
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="contact">
                    <h3>Contact Info</h3>
                    <div class="address">
                        <h4>Address</h4>
                        <p>Roghunathpur, Fenni, Bangladesh</p>
                    </div>
                    <div class="Phone">
                        <h4>Phone</h4>
                        <p>+1 232 3235 324</p>
                    </div>
                    <div class="email">
                        <h4>Email Address</h4>
                        <p>sultanafaria.nstu@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
@include('includes.footer')

@endsection