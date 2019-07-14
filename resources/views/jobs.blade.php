@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.header')
<div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="mt-4">Looking for Front-end Developer</h1>
        <p class="lead">
          by
          <a href="#">Shuhan Shuvo</a>
        </p>
        <hr>
        <p>Posted on January 1, 2019 at 12:00 PM</p>
        <hr>
        <!-- Post Content -->
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
            has been the industry's standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen book.<br><br> It has survived not 
            only five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
            including versions of Lorem Ipsum.<br><br>
            <p>Skills: Html5, Css3, Botstrap, JavaScript, jQuery</p>
        </p>
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group mb-0">
                <textarea class="form-control" rows="4"></textarea>
              </div>
              <input type="submit" class="btn btn-success" value="Submit">
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-3 mt-3">
        <img class="d-flex mr-3 rounded-circle" src="{{asset('style/img/Profile-pic.PNG')}}" alt="">
          <div class="media-body">
            <h5 class="mt-1">Sultana Faria</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="{{asset('style/img/Member_four.jpg')}}" alt="">
          <div class="media-body">
            <h5 class="mt-0">Samiha Akram</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-3">
              <img class="d-flex mr-3 rounded-circle" src="{{asset('style/img/Member_three.jpg')}}" alt="">
              <div class="media-body">
                <h5 class="mt-0">Shuhan shuvo</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media mt-3">
              <img class="d-flex mr-3 rounded-circle" src="{{asset('style/img/Member_four.jpg')}}" alt="">
              <div class="media-body">
                <h5 class="mt-0">Samiha Akram</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-danger" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Recent Post -->
        <div class="card my-3">
          <h5 class="card-header">Recent Posts</h5>
          <div class="card-body">
            <ul>
                <li>
                    <h5><a href="#">Post Title goes here</a></h5>
                    <p class="lead">
                        by
                        <a href="#">Shuhan Shuvo</a>
                    </p>
                </li>
                <li>
                    <h5><a href="#">Post Title goes here</a></h5>
                    <p class="lead">
                        by
                        <a href="#">Ferdousi Rima</a>
                    </p>
                </li>
                <li>
                    <h5><a href="#">Post Title goes here</a></h5>
                    <p class="lead">
                        by
                        <a href="#">Samiha Akram</a>
                    </p>
                </li>
                <li>
                    <h5><a href="#">Post Title goes here</a></h5>
                    <p class="lead">
                        by
                        <a href="#">Saoda Jafrin</a>
                    </p>
                </li>
            </ul>
          </div>
          
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>

@endsection