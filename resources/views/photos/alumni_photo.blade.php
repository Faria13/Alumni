@extends('layouts.master')

@section('content')

@include('includes.header')

<div class="gallery">
    <div class="container">
        <h3>Photo Gallery</h3> 
        <div class="line"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="photo_area">
                    <img class="rounded" src="{{asset('/style/img/photo1.jpg')}}">
                    <h4>1st Tour</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="photo_area">
                    <div class="photo_area">
                        <img class="rounded" src="{{asset('/style/img/photo2.jpg')}}">
                        <h4>2nd Convocation</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="photo_area">
                    <div class="photo_area">
                        <img class="rounded" src="{{asset('/style/img/photo5.jpg')}}">
                        <h4>Programming Contest</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="photo_area">
                    <div class="photo_area">
                        <img class="rounded" src="{{asset('/style/img/photo6.jpg')}}">
                        <h4>Adda with friends</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="photo_area">
                    <img class="rounded" src="{{asset('/style/img/photo1.jpg')}}">
                    <h4>1st Tour</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="photo_area">
                    <div class="photo_area">
                        <img class="rounded" src="{{asset('/style/img/photo2.jpg')}}">
                        <h4>2nd Convocation</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="photo_area">
                    <div class="photo_area">
                        <img class="rounded" src="{{asset('/style/img/photo5.jpg')}}">
                        <h4>Programming Contest</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="photo_area">
                    <div class="photo_area">
                        <img class="rounded" src="{{asset('/style/img/photo6.jpg')}}">
                        <h4>Adda with friends</h4>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>


@endsection