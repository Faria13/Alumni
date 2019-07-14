@extends('layouts.master')

@section('content')
@include('includes.top-bar')
<div class="photo_show">
    <div class="container">
        <h3>{{$album->name}}</h3>
        <a class="btn btn-secondary" href="/albums">Go Back</a>
        <a class="btn btn-primary" href="/photos/create/{{$album->id}}">Upload Photo to Album</a>
        <hr>
    </div>
</div>

@endsection