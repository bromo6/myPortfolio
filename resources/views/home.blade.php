@extends('master') @section('title', 'Brandon Romo') @section('content')
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
<div class="row pt-5 mx-5">
    <div class="col-lg-4 col-md-8 mb-3">
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
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 pt-5">
        <h1>About Me</h1>
        <p class="first mb-5">
            I am 18 years old, and I love to play baseball. I love to build things/woodworking I want to be able to build my own shed. I am currently attending Valley Technical Academy. Where I am learning to code and some day be able to create my own website.
        </p>
    </div>
</div>
<div class="row mx-5">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1>Languages</h1>
        <div class="row">
            <div class="col">
                <p>JavaScript</p>
            </div>
            <div class="col">
                <i class="devicon-javascript-plain"></i>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>jQuery</p>
            </div>
            <div class="col">
                <i class="devicon-jquery-plain"></i>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>PHP</p>
            </div>
            <div class="col">
                <i class="devicon-php-plain"></i>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>HTML</p>
            </div>
            <div class="col">
                <i class="devicon-html5-plain"></i>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>CSS</p>
            </div>
            <div class="col">
                <i class="devicon-css3-plain-wordmark"></i>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>MySQL</p>
            </div>
            <div class="col">
                <i class="devicon-mysql-plain"></i>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>Git</p>
            </div>
            <div class="col">
                <i class="devicon-git-plain"></i>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>Apache</p>
            </div>
            <div class="col">
                <i class="devicon-apache-plain"></i>
            </div>
            <div class="col"></div>
        </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1>Technologies</h1>
        <div class="row">
            <div class="col">
                <p>Linux</p>
            </div>
            <div class="col">
                <i class="devicon-linux-plain"></i>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>Laravel</p>
            </div>
            <div class="col">
                <i class="devicon-laravel-plain"></i>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>Photoshop</p>
            </div>
            <div class="col">
                <i class="devicon-photoshop-plain"></i>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
<div class="row mx-5">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1>Education</h1>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1>Testimonials</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-4 text-center text-lg-left">Past Work</h1>

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
                        <img class="img-fluid img-thumbnail" src="img/Food-Recipe1.png" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="img/Wise-Quackers.png" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="img/Meal-Up.png" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mx-5">
    <div class="col">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
        </div>
    </div>
</div>

@endsection
