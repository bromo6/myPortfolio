@extends('master')
@section('title', 'Brandon Romo')
@section('content')
<nav class="navbar navbar-expand navbar-dark bg-transparent fixed-top">
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
<div class="row homeRow">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="homePic"></div>
        <div class="row">
            <div class="col">
                <p id="mainText">Hello, What is your name?</p>
                <div id="type1"></div>
            </div>
        </div>
    </div>
</div>
<div class="container">

  <h1 class="my-4 text-center text-lg-left">Thumbnail Gallery</h1>

  <div class="row text-center text-lg-left">

    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="img/504-Sports.png" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="img/Fortnite-ss.png" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
      </a>
    </div>
  </div>

</div>

@endsection
