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
<div class="sidenav">
    <div class="row">
        <div class="col">
            <div class="aCircles">
                <a href="https://twitter.com/?logged_out=1&lang=en">
                    <i class="fab fa-twitter sideIcon"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="aCircles">
                <a href="https://www.linkedin.com/in/brandon-romo-01777615b/">
                    <i class="fab fa-linkedin-in sideIcon"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="aCircles">
                <a href="https://github.com/bromo6">
                    <i class="fab fa-github sideIcon"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row homeRow">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="homePic"></div>
        <div class="row">
            <div class="col">
                <p id="mainText">Hello, my name is Brandon.</p>
                <div id="type1"></div>
            </div>
        </div>
    </div>
</div>
<div class="row pt-5 mx-5">
    <div class="col-lg-4 col-md-8 mb-3">
        <img src="https://pbs.twimg.com/profile_images/881708708832710656/O3zln7hw.jpg" width="200" class="rounded-circle mt-5" />
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
                <p class="learned slideText">JavaScript</p>
            </div>
            <div class="col">
                <i class="diby1 slideText devicon-javascript-plain"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="learned slideText">jQuery</p>
            </div>
            <div class="col">
                <i class="diby1 slideText devicon-jquery-plain"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="learned slideText">PHP</p>
            </div>
            <div class="col">
                <i class="diby1 slideText devicon-php-plain"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="learned slideText">HTML</p>
            </div>
            <div class="col">
                <i class="diby1 slideText devicon-html5-plain"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="learned slideText">CSS</p>
            </div>
            <div class="col">
                <i class="diby1 slideText devicon-css3-plain-wordmark"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="learned slideText">MySQL</p>
            </div>
            <div class="col">
                <i class="diby1 slideText devicon-mysql-plain"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="learned slideText">Git</p>
            </div>
            <div class="col">
                <i class="diby1 slideText devicon-git-plain"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="learned slideText">Apache</p>
            </div>
            <div class="col">
                <i class="diby1 slideText devicon-apache-plain"></i>
            </div>
        </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1>Technologies</h1>
        <div class="row">
            <div class="col">
                <p class="learned textSlide">Linux</p>
            </div>
            <div class="col">
                <i class="diby1 textSlide devicon-linux-plain"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="learned textSlide">Laravel</p>
            </div>
            <div class="col">
                <i class="diby1 textSlide devicon-laravel-plain"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="learned textSlide">Photoshop</p>
            </div>
            <div class="col">
                <i class="diby1 textSlide devicon-photoshop-plain"></i>
            </div>
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
<div class="container" id="experience">
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
<div class="backImg">
    <div class="container inTouch" style="margin-right: 0px; color: white;">
    <div class="row">
        <div id="context" class="col">
            <h2 class="comTitle pt-4">Get In Touch</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="form-area">
                <form id="text" role="form" action="sendEmail" method="POST">
                    <br style="clear:both">
                    <div class="row">

                        <!--NAME  ------------------------------------------------------------->

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                        </div>

                        <!--NUMBER  ------------------------------------------------------------>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!--EMAIL  ------------------------------------------------------------->

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!--COMMENT  ----------------------------------------------------------->

                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="form-group">
                                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Comment" maxlength="140" rows="7"></textarea>
                            </div>
                            <button type="button" id="submit" name="submit" class="btn btn-outline-dark pull-right">Submit</button>
                        </div>
                    </div>
                </form>
                <p class="text-primary email-msg"></p>

            </div>
        </div>
        <div id="detailsbg" class="col-md-4">

        </div>
    </div>
</div>
</div>
@endsection
@section('bottomjs')
<script>
$(document).ready(function (){
    $('.slideText').show("slide", {
        direction: "left"
    }, 5000);
    $('.textSlide').show("slide", {
        direction: "left"
    }, 5000);
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$("#submit").on("click", function(response) {

var formName = $("#name").val();
var formComment = $("#message").val();
var formEmail = $("#email").val();
var formPhone = $("#phone").val();

var data = {
    name: formName,
    phone: formPhone,
    comment: formComment,
    email: formEmail
};

$.ajax({
    method: 'POST',
    url: 'sendEmail',
    data: data
}).done(function(response) {
    $(".email-msg").html(response);
    $("#name").val("");
    $("#phone").val("");
    $("#email").val("");
    $("#message").val("");
});

});
</script>
@endsection
