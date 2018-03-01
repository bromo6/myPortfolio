@extends('master')

@section('title', 'Brandon Romo')

@section('content')
<div id="carousel" class="carousel slide" data-ride="carousel">
    <i class="fa fa-chevron-down fa-4x arrow floating"></i>
  <div class="carousel-inner">
    <div class="carousel-item active">
    </div>
  </div>
</div>

  <div class="row">
      <div class="col-4 ml-5 mt-5">
          <img src="img/Mockup-group.png" id="mockup" width="350" height="320"/>
      </div>
      <div class="col mt-5">
          <p class="portfolio-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda omnis earum quos, commodi laudantium! Dolor veritatis error placeat quasi, debitis asperiores, possimus esse dolores quidem quae autem. Quae, similique!
          </p>
      </div>
  </div>
  <div class="row">
      <div class="col-4 ml-5 mt-5">
          <img src="img/fortnite.png" id="fortnite" width="350" height="320"/>
      </div>
      <div class="col mt-5">
          <p class="portfolio-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda omnis earum quos, commodi laudantium! Dolor veritatis error placeat quasi, debitis asperiores, possimus esse dolores quidem quae autem. Quae, similique!
          </p>
      </div>
  </div>

@endsection
