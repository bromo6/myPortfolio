@extends('master')

@section('title', 'Brandon Romo')

@section('content')
<nav class="navbar navbar-expand navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="/">
        <img height="60" width="100" src="img/logo.png" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="/profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/portfolio">Portfolio</a>
            </li>
        </ul>
    </div>
</nav>
    <div class="row pt-5">
      <div class="col-lg-4 col-md-8 col-sm-12 mb-3">
        <img src="https://pbs.twimg.com/profile_images/881708708832710656/O3zln7hw.jpg" width="200" class="rounded-circle mt-5" />
        <h3>Brandon Romo</h3>
        <p class="bio">
          Born on 05/08/1999</br>
          Traveler & Student
        </p>
        <i class="fab fa-facebook-f blue"></i>

        <i class="fab fa-twitter blue"></i>

        <i class="fab fa-google-plus-g blue"></i>

        <i class="fab fa-linkedin-in blue"></i>

        <i class="fab fa-snapchat-square blue"></i>
      </div>
      <div class="col-lg-8 col-md-12 ">
          <h5>CONTACT INFO.</h5>
          <i class="fas fa-envelope"></i> <span class="green">brandonromo130@yahoo.com</span></br>

          <i class="fas fa-phone"></i>
          <span class="green">(956) 570-7311</span></br>

          <i class="fas fa-mobile"></i>
          <span class="green">(956) 328-1548</span></br>

          <i class="fas fa-map-marker-alt"></i>
          <span class="green">PO Box 78577- TX, USA</span>
      </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>About Me</h1>
            <p class="first mb-5">
                I am 18 years old, and I love to play baseball. I love to build things/woodworking I want to be able to build my own shed. I am currently attending Valley Technical Academy. Where I am learning to code and some day be able to create my own website.
            </p>

        </div>
    </div>
    <div class="row">
        <div id="parallax2" class="col px-0">
            <div class="parallax parallaxB"></div>
        </div>
    </div>


@endsection
