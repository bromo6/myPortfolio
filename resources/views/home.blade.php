@extends('master')
@section('title', 'Brandon Romo')
@section('content')
<div class="row">
    <div class="col px-0">
        <div class="slide-show">
            <div class="slick-slide">
                <img width="1500" height="900"  src="http://www.theappguruz.com/public/assets/new_site/images/web_development_banner.jpg" />
            </div>
            <div class="slick-slide">
                <img width="1500" height="900"  src="https://images.unsplash.com/photo-1489875347897-49f64b51c1f8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7ca95b1290dfb28db0ee368546e55487&auto=format&fit=crop&w=1050&q=80" />
            </div>
            <div class="slick-slide">
                <img width="1500" height="900"  src="https://images.pexels.com/photos/425163/pexels-photo-425163.jpeg?h=350&auto=compress&cs=tinysrgb" />
            </div>
            <div class="slick-slide">
                <img width="1500" height="900"  src="https://d2.alternativeto.net/dist/s/unsplash-it_408470_full.jpg?format=jpg&width=1600&height=1600&mode=min&upscale=false" />
            </div>
            <div class="slick-slide">
                <img width="1500" height="900"  src="https://images.unsplash.com/photo-1489875347897-49f64b51c1f8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7ca95b1290dfb28db0ee368546e55487&auto=format&fit=crop&w=1050&q=80" />
            </div>
        </div>
    </div>
</div>
<div class="row show">
    <div class="col">
        <h1 class="text-center home-text">
            Hello, I am a Full Stack Developer.
        </h1>
    </div>
</div>
@endsection
@section('bottomjs')
<script>
$('.slide-show').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,

});
</script>
@endsection
