@extends('layouts.master')

@section('content')

@include('includes.header')

<div class="gallery">
    <div class="container">
        <h3>Photo Gallery</h3> 
        <div class="line"></div>
        <h4>Albums</h4>
        <hr> 
        <div class="row">
            <div class="col-md-4">
                <div class="photo_area">
                    <a href="{{ url('/photos') }}">
                    <img class="rounded" src="{{asset('/style/img/photo1.jpg')}}">
                    </a>
                    <h4>1st Batch</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="photo_area">
                    <a href="{{ url('/photos') }}">
                    <img class="rounded" src="{{asset('/style/img/photo2.jpg')}}">
                    </a>
                    <h4>2nd Batch</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="photo_area">
                    <a href="{{ url('/photos') }}">
                    <img class="rounded" src="{{asset('/style/img/photo8.jpg')}}">
                    </a>
                    <h4>3rd Batch</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="photo_area">
                    <a href="{{ url('/photos') }}">
                    <img class="rounded" src="{{asset('/style/img/photo6.jpg')}}">
                    </a>
                    <h4>4th Batch</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="photo_area">
                    <a href="{{ url('/photos') }}">
                    <img class="rounded" src="{{asset('/style/img/photo5.jpg')}}">
                    </a>
                    <h4>5th Batch</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="photo_area">
                    <a href="{{ url('/photos') }}">
                    <img class="rounded" src="{{asset('/style/img/photo7.jpg')}}">
                    </a>
                    <h4>6th Batch</h4>
                </div>
            </div>
        </div> 
    </div>
</div>


@endsection