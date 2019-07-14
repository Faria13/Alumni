<div class="home" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a href="/">
          <img src="{{asset('style/img/Alumni-Logo.jpg')}}">
        </a>
  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/photo_gallery') }}">Photo Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/public_post') }}">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user_login') }}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/user_registration') }}">Sign Up</a>
        </li>
        </ul>
  
        <form method="post" action="" class="input-form">
          <input type="text" name="search" placeholder="Search something...">
        </form>
      </div>
      </div>
  </nav>
  
  