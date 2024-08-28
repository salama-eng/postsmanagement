<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>  
<title>Document</title>
</head>
<body>
    
<header>
    <img src="https://img.freepik.com/free-photo/toy-bricks-table-with-word-blog_144627-47465.jpg?t=st=1724836640~exp=1724840240~hmac=3ea7c5171efcc85208a3f4b28a30c742528e8db5c13097ee21baf9254846c693&w=1060" alt="">
</header>

<style>
    .btn{
        /* margin: 2em; */
        background-color: blue;
        /* width: 5em; */
        color: wheat;
        margin-top: 3px;
    }
    .btn a{
        background-color: blue;
        color: wheat;
    }
</style>

<section>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<section class="bg-light py-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="display-5 font-weight-bold mb-5">Latest POSTS</h2>
            </div>
          </div>
          <button class="btn"> <a href="{{route('show_add')}}" class="" value="show_add"> add post</a></button>

          <div class="row">
        
          <button class="btn">  <a href="{{route('index','all')}}">all</a></button>
          @foreach($categories as $category)
          <button class="btn"> <a href="{{route('index',$category->id)}}">{{$category->name}}</a></button>

          @endforeach

          @foreach($posts as $post)
   

            <div class="col-md-6 col-xl-4">
              <div class="image-box image-box--shadowed white-bg style-2 mb-4">
                <div class="overlay-container">
                  <img src="{{$post->image}}" alt="{{$post->image}}">
                  <a href="#" class="overlay-link"></a>
                </div>
                <div class="body">
                  <h5 class="font-weight-bold my-2">{{$post->title}}</h5>
                  
                  <p class="small">{{$post->created_at}}</p>
                  <p>{{$post->details}}</p>
                  <div class="row d-flex align-items-center">
                    <div class="col-6">
                      <ul class="social-links small circle">
                        <li class="facebook"><a href="{{ route('edit',$post->id) }}"><i class="fa fa-edit"></i></a></li>
                        <li class="googleplus"><a href="{{ route('delete',$post->id) }}"><i class="fa fa-trash"></i></a></li>
                      </ul>
                    </div>
                  
                    <div class="col-6 text-right">
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
</div>

<style>
    body{margin-top:20px;}
/*Image box
---------------------------------- */
.slick-slide.image-box {
  margin-bottom: 20px;
}

.image-box .body {
  padding: 15px;
}

.image-box .body h3 {
  margin-top: 0;
}

.image-box .body p:last-child {
  margin-bottom: 0;
}

.image-box.style-4 {
  border: none;
}

.image-box.style-3-b {
  display: block;
  margin-bottom: 40px;
}

.image-box.style-3-b .body {
  padding: 10px 0;
}

.image-box--shadowed {
  -webkit-box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
  -webkit-transition: all 0.25s ease-in-out;
  -o-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
}

.image-box--shadowed:hover {
  -webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
}

/* Medium devices (tablets, laptops, smartphones 768px and up) */
@media (min-width: 768px) {
  .image-box.style-3-b .body {
    padding: 0;
  }
}

/* Medium devices (desktops, tablets less than 991px) */
@media (max-width: 991px) {
  .image-box.style-4 {
    margin-bottom: 30px;
  }
}

.white-bg {
    background-color: #ffffff;
}

/* Social icons block
---------------------------------- */
.social-links {
  list-style: none;
  font-size: 0;
  margin-top: 20px;
  margin-bottom: 20px;
  padding-left: 0;
}

.social-links li {
  display: inline-block;
  margin: 0 2px 2px 0;
}

.social-links li a {
  width: 40px;
  height: 40px;
  display: block;
  text-align: center;
  font-size: 18px;
  border: 1px solid #e7e7e7;
  color: #cdcdcd;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.social-links li a i {
  line-height: 40px;
}

.social-links li a:hover {
  background-color: transparent;
}

.social-links.animated-effect-1 li a {
  -webkit-transition: color 0.4s;
  -o-transition: color 0.4s;
  transition: color 0.4s;
  position: relative;
  z-index: 1;
}

.social-links.animated-effect-1 li a:hover {
  color: #ffffff !important;
  -webkit-transition: color 0.3s;
  -o-transition: color 0.3s;
  transition: color 0.3s;
}

.social-links.animated-effect-1 li a:after {
  pointer-events: none;
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  content: '';
  top: 0px;
  left: 0px;
  padding: 0px;
  z-index: -1;
  -webkit-transition: -webkit-transform 0.4s, opacity 0.4s, background-color 0.4s;
  -moz-transition: -moz-transform 0.4s, opacity 0.4s, background-color 0.4s;
  transition: transform 0.4s, opacity 0.4s, background-color 0.4s;
  -webkit-transform: scale(1.4);
  -moz-transform: scale(1.4);
  -ms-transform: scale(1.4);
  -o-transform: scale(1.4);
  transform: scale(1.4);
  opacity: 0;
  filter: alpha(opacity=0);
}

.social-links.animated-effect-1 li a:hover:after {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transition: -webkit-transform 0s, opacity 0.3s, background-color 0.3s;
  -moz-transition: -moz-transform 0s, opacity 0.3s, background-color 0.3s;
  transition: transform 0s, opacity 0.3s, background-color 0.3s;
}

.social-links.animated-effect-1:not(.circle) li a:after {
  -webkit-border-radius: 0%;
  -moz-border-radius: 0%;
  border-radius: 0%;
}

.social-links.default li a {
  color: #ffffff;
}

.social-links.default li a:hover {
  background-color: #ffffff;
  color: #777777;
}

.dark .social-links li a {
  background-color: rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(0, 0, 0, 0.1);
  color: #ffffff;
}

.dark.social-links li a {
  background-color: rgba(0, 0, 0, 0.6);
  border: 1px solid rgba(0, 0, 0, 0.1);
  color: #ffffff;
}

.dark.social-links li a:hover {
  background-color: rgba(0, 0, 0, 0.8);
  color: #ffffff;
  border-color: rgba(0, 0, 0, 0.8);
}

.colored .social-links li a {
  background-color: rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(0, 0, 0, 0.01);
  color: #ffffff;
}

.header-top .social-links {
  margin: 0;
  display: inline-block;
  margin-top: 2px;
}

.footer-content .social-links li {
  margin: 0 5px 5px 0;
}

.footer-content .social-links li a {
  color: #777777;
  background-color: transparent;
  border-color: #777777;
}

.footer-content .social-links li a:hover {
  color: #ffffff;
  background-color: #777777;
  border-color: #777777;
}

.text-white .social-links li a {
  color: #ffffff;
  border-color: #ffffff;
}

.text-white .social-links li a:hover,
.text-white .social-links li a:focus {
  color: #333333;
  background-color: #ffffff;
  border-color: #ffffff;
}

.social-links.small li a {
  width: 30px;
  height: 30px;
  font-size: 14px;
}

.social-links.small li a i {
  line-height: 29px;
}

.social-links.large li a {
  width: 60px;
  height: 60px;
  font-size: 24px;
}

.social-links.large li a i {
  line-height: 60px;
}

.social-links.square li a,
.square {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}

.social-links.circle li a {
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
}

.social-links.animated-effect-1 li.twitter a:hover {
  border-color: #55acee;
}

.social-links:not(.animated-effect-1) li.twitter a:hover,
.colored.social-links li.twitter a,
.social-links.animated-effect-1 li.twitter a:after,
.btn.twitter {
  background-color: #55acee;
  border-color: #55acee;
  color: #ffffff;
}

.social-links.animated-effect-1 li.skype a:hover {
  border-color: #00aff0;
}

.social-links:not(.animated-effect-1) li.skype a:hover,
.colored.social-links li.skype a,
.social-links.animated-effect-1 li.skype a:after,
.btn.skype {
  background-color: #00aff0;
  border-color: #00aff0;
  color: #ffffff;
}

.social-links.animated-effect-1 li.linkedin a:hover {
  border-color: #0976b4;
}

.social-links:not(.animated-effect-1) li.linkedin a:hover,
.colored.social-links li.linkedin a,
.social-links.animated-effect-1 li.linkedin a:after,
.btn.linkedin {
  background-color: #0976b4;
  border-color: #0976b4;
  color: #ffffff;
}

.social-links.animated-effect-1 li.googleplus a:hover {
  border-color: #dd4b39;
}

.social-links:not(.animated-effect-1) li.googleplus a:hover,
.colored.social-links li.googleplus a,
.social-links.animated-effect-1 li.googleplus a:after,
.btn.googleplus {
  background-color: #dd4b39;
  border-color: #dd4b39;
  color: #ffffff;
}

.social-links.animated-effect-1 li.youtube a:hover {
  border-color: #b31217;
}

.social-links:not(.animated-effect-1) li.youtube a:hover,
.colored.social-links li.youtube a,
.social-links.animated-effect-1 li.youtube a:after,
.btn.youtube {
  background-color: #b31217;
  border-color: #b31217;
  color: #ffffff;
}

.social-links.animated-effect-1 li.flickr a:hover {
  border-color: #ff0084;
}

.social-links:not(.animated-effect-1) li.flickr a:hover,
.colored.social-links li.flickr a,
.social-links.animated-effect-1 li.flickr a:after,
.btn.flickr {
  background-color: #ff0084;
  border-color: #ff0084;
  color: #ffffff;
}

.social-links.animated-effect-1 li.facebook a:hover {
  border-color: #3b5998;
}

.social-links:not(.animated-effect-1) li.facebook a:hover,
.colored.social-links li.facebook a,
.social-links.animated-effect-1 li.facebook a:after,
.btn.facebook {
  background-color: #3b5998;
  border-color: #3b5998;
  color: #ffffff;
}

.social-links.animated-effect-1 li.pinterest a:hover {
  border-color: #cb2027;
}

.social-links:not(.animated-effect-1) li.pinterest a:hover,
.colored.social-links li.pinterest a,
.social-links.animated-effect-1 li.pinterest a:after,
.btn.pinterest {
  background-color: #cb2027;
  border-color: #cb2027;
  color: #ffffff;
}

.social-links.animated-effect-1 li.instagram a:hover {
  border-color: #517fa4;
}

.social-links:not(.animated-effect-1) li.instagram a:hover,
.colored.social-links li.instagram a,
.social-links.animated-effect-1 li.instagram a:after,
.btn.instagram {
  background-color: #517fa4;
  border-color: #517fa4;
  color: #ffffff;
}

.social-links.animated-effect-1 li.vimeo a:hover {
  border-color: #aad450;
}

.social-links:not(.animated-effect-1) li.vimeo a:hover,
.colored.social-links li.vimeo a,
.social-links.animated-effect-1 li.vimeo a:after,
.btn.vimeo {
  background-color: #aad450;
  border-color: #aad450;
  color: #ffffff;
}

.social-links.animated-effect-1 li.tumblr a:hover {
  border-color: #32506d;
}

.social-links:not(.animated-effect-1) li.tumblr a:hover,
.colored.social-links li.tumblr a,
.social-links.animated-effect-1 li.tumblr a:after,
.btn.tumblr {
  background-color: #32506d;
  border-color: #32506d;
  color: #ffffff;
}

.social-links.animated-effect-1 li.soundcloud a:hover {
  border-color: #ff3a00;
}

.social-links:not(.animated-effect-1) li.soundcloud a:hover,
.colored.social-links li.soundcloud a,
.social-links.animated-effect-1 li.soundcloud a:after,
.btn.soundcloud {
  background-color: #ff3a00;
  border-color: #ff3a00;
  color: #ffffff;
}

.social-links.animated-effect-1 li.foursquare a:hover {
  border-color: #0072b1;
}

.social-links:not(.animated-effect-1) li.foursquare a:hover,
.colored.social-links li.foursquare a,
.social-links.animated-effect-1 li.foursquare a:after,
.btn.foursquare {
  background-color: #0072b1;
  border-color: #0072b1;
  color: #ffffff;
}

.social-links.animated-effect-1 li.dribbble a:hover {
  border-color: #ea4c89;
}

.social-links:not(.animated-effect-1) li.dribbble a:hover,
.colored.social-links li.dribbble a,
.social-links.animated-effect-1 li.dribbble a:after,
.btn.dribbble {
  background-color: #ea4c89;
  border-color: #ea4c89;
  color: #ffffff;
}

.social-links.animated-effect-1 li.xing a:hover {
  border-color: #126567;
}

.social-links:not(.animated-effect-1) li.xing a:hover,
.colored.social-links li.xing a,
.social-links.animated-effect-1 li.xing a:after,
.btn.xing {
  background-color: #126567;
  border-color: #126567;
  color: #ffffff;
}

.social-links.animated-effect-1 li.behance a:hover {
  border-color: #126567;
}

.social-links:not(.animated-effect-1) li.behance a:hover,
.colored.social-links li.behance a,
.social-links.animated-effect-1 li.behance a:after,
.btn.behance {
  background-color: #053eff;
  border-color: #053eff;
  color: #ffffff;
}

.social-links.animated-effect-1 li.vine a:hover {
  border-color: #126567;
}

.social-links:not(.animated-effect-1) li.vine a:hover,
.colored.social-links li.vine a,
.social-links.animated-effect-1 li.vine a:after,
.btn.vine {
  background-color: #00a478;
  border-color: #00a478;
  color: #ffffff;
}

.social-links.animated-effect-1 li.stumbleupon a:hover {
  border-color: #126567;
}

.social-links:not(.animated-effect-1) li.stumbleupon a:hover,
.colored.social-links li.stumbleupon a,
.social-links.animated-effect-1 li.stumbleupon a:after,
.btn.stumbleupon {
  background-color: #f74425;
  border-color: #f74425;
  color: #ffffff;
}

.social-links .dropdown > button {
  padding: 1px 15px 0px;
  font-size: 16px;
  color: #999999;
  text-align: center;
  min-width: 0;
  margin: 0;
  background-color: transparent;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

.social-links .dropdown > button i {
  width: 15px;
}

.header-top.colored .social-links .dropdown > button > i:before,
.header-top.colored .social-links .dropdown.show > button > i:before {
  color: #ffffff;
}

.header-top .social-links .dropdown.show > button > i:before {
  content: "\f00d";
}

.social-links .dropdown-menu {
  z-index: 103;
  padding: 5px;
  min-width: 270px;
  margin-top: 6px;
  font-size: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
  background-color: #f2f2f2;
  border: 1px solid #D0D0D0;
  border-top: none;
}

.social-links .dropdown-menu li a,
.dark .social-links .dropdown-menu li a i,
.colored .social-links .dropdown-menu li a i {
  padding: 0;
  line-height: 30px;
  color: #ffffff;
}

.social-links .dropdown-menu li a i {
  padding-left: 0;
}

.social-links .dropdown-menu li a:hover i {
  color: #ffffff;
}

/*Images and Overlays
---------------------------------- */
.overlay-container {
  position: relative;
  display: block;
  text-align: center;
  overflow: hidden;
}

.overlay-bottom,
.overlay-top {
  position: absolute;
  top: auto;
  padding: 15px;
  bottom: 0px;
  left: 0;
  right: 0px;
  background-color: rgba(30, 30, 30, 0.5);
  overflow: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: all ease-in-out 0.25s;
  -o-transition: all ease-in-out 0.25s;
  transition: all ease-in-out 0.25s;
  height: 0;
  color: #ffffff;
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0) scale(1, 1);
}

.overlay-bottom.links,
.overlay-to-top.links {
  z-index: 11;
}

.overlay-to-top {
  position: absolute;
  top: auto;
  padding: 10px;
  bottom: -30px;
  left: 0;
  right: 0px;
  background-color: rgba(30, 30, 30, 0.5);
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: all ease-in-out 0.25s;
  -o-transition: all ease-in-out 0.25s;
  transition: all ease-in-out 0.25s;
  color: #ffffff;
}

.overlay-top {
  top: 0;
}

.overlay-visible .overlay-bottom,
.overlay-visible .overlay-top {
  opacity: 1;
  filter: alpha(opacity=100);
  height: auto !important;
  padding-bottom: 20px;
}

.overlay-visible.overlay-container:hover .overlay-bottom:not(.links),
.overlay-visible.overlay-container:hover .overlay-top {
  opacity: 0.5;
  filter: alpha(opacity=50);
}

.overlay-top a,
.overlay-bottom a,
.overlay-to-top a,
.overlay-top a:hover,
.overlay-bottom a:hover,
.overlay-to-top a:hover {
  color: #ffffff;
  text-decoration: none;
}

.overlay-container .text {
  padding: 0 20px;
  position: relative;
}

.overlay-container .text h3,
.overlay-container .text h3 .small {
  margin-top: 0;
  color: #ffffff;
}

.overlay-container .text a:hover {
  color: #ffffff;
}

.overlay-bottom .btn,
.overlay-top .btn {
  color: #ffffff;
  border-color: #ffffff;
  margin: 0;
}

.overlay-bottom .btn:hover,
.overlay-top .btn:hover {
  color: #777777;
  background-color: #ffffff;
}

.overlay-container:hover .overlay-top,
.overlay-container:hover .overlay-bottom,
.image-box.style-2:hover .overlay-top,
.image-box.style-2:hover .overlay-bottom {
  height: 50%;
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0) scale(1, 1);
}

.overlay-container:hover .overlay-to-top,
.image-box:hover .overlay-to-top {
  opacity: 1;
  filter: alpha(opacity=100);
  bottom: 0;
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0) scale(1, 1);
}

.overlay-link {
  position: absolute;
  z-index: 10;
  top: 0;
  padding: 15px;
  bottom: 0px;
  left: 0;
  right: 0px;
  background-color: rgba(30, 30, 30, 0.5);
  overflow: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: all ease-in-out 0.25s;
  -o-transition: all ease-in-out 0.25s;
  transition: all ease-in-out 0.25s;
  color: #ffffff;
}

.overlay-link i {
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  width: 80px;
  height: 80px;
  border: 1px solid #ffffff;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  color: #ffffff;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -40px 0 0 -40px;
  font-size: 32px;
  line-height: 80px;
}

.overlay-link i:hover {
  background-color: #ffffff;
  color: #777777;
}

.overlay-link.small i {
  width: 25px;
  height: 25px;
  margin: -12.5px 0 0 -12.5px;
  font-size: 14px;
  line-height: 25px;
}

.overlay-container:hover .overlay-link {
  height: 100%;
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0) scale(1, 1);
}

/* Large devices (Large desktops 1200px and up) */
@media (min-width: 1200px) {
  .overlay-container .text {
    top: 30%;
  }
}

img {
    display: block;
    max-width: 100%;
    height: auto;
}


/*Buttons with radius*/
.radius-50 {
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
}

/*Animated Buttons*/
.btn-animated {
  position: relative;
  min-width: 0 !important;
  padding-right: 45px !important;
}

.btn-animated i {
  -webkit-transition: right 0.2s ease-in-out;
  -o-transition: right 0.2s ease-in-out;
  transition: right 0.2s ease-in-out;
  z-index: 3;
  right: 17px;
  position: absolute;
  line-height: 34px;
  top: 0;
  min-width: 12px;
}

.btn-animated:after {
  width: 35px;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.1);
  position: absolute;
  content: "";
  top: 0;
  opacity: 0;
  filter: alpha(opacity=0);
  right: 0px;
  z-index: 2;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.btn-animated.radius-50:after {
  border-radius: 0 50px 50px 0;
}

.btn-animated.btn-gray-transparent:after {
  background-color: rgba(0, 0, 0, 0.05);
}

.btn-animated:hover:after {
  opacity: 1;
  filter: alpha(opacity=100);
}

.btn-animated:hover i {
  right: 11px;
}

.btn-animated.btn-sm {
  padding-right: 35px !important;
}

.btn-animated.btn-sm:after {
  width: 25px;
}

.btn-animated.btn-sm i {
  right: 14px;
  line-height: 28px;
  min-width: 11px;
}

.btn-animated.btn-sm:hover i {
  right: 7px;
}

.btn-animated.btn-lg {
  padding-right: 60px !important;
}

.btn-animated.btn-lg:after {
  width: 45px;
}

.btn-animated.btn-lg i {
  right: 25px;
  line-height: 48px;
  min-width: 15px;
}

.btn-animated.btn-lg:hover i {
  right: 15px;
}

.btn-animated.btn-xl {
  padding-right: 60px !important;
}

.btn-animated.btn-xl:after {
  width: 45px;
}

.btn-animated.btn-xl i {
  right: 25px;
  line-height: 64px;
  min-width: 15px;
  text-align: center;
}

.btn-animated.btn-xl:hover i {
  right: 13px;
}

/*Background Transition*/
.btn-animation {
  -webkit-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.btn-animation:hover,
.btn-animation:focus {
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.btn-animation:before {
  background-color: transparent;
  content: "";
  position: absolute;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.btn-animation:hover:before,
.btn-animation:focus:before {
  z-index: -1;
}

.btn-default-transparent.btn-animation:hover,
.btn-default-transparent.btn-animation:focus {
  background-color: transparent;
}

.btn-animation.btn-animation--slide-to-right:before {
  top: 0;
  left: 0;
  right: 100%;
  bottom: 0;
}

.btn-animation.btn-animation--slide-to-right:hover:before,
.btn-animation.btn-animation--slide-to-right:focus:before {
  right: 0;
}

.btn-animation.btn-animation--slide-to-left:before {
  top: 0;
  left: 100%;
  right: 0;
  bottom: 0;
}

.btn-animation.btn-animation--slide-to-left:hover:before,
.btn-animation.btn-animation--slide-to-left:focus:before {
  left: 0;
}

.btn-animation.btn-animation--slide-to-top:before {
  top: 100%;
  left: 0;
  right: 0;
  bottom: 0;
}

.btn-animation.btn-animation--slide-to-top:hover:before,
.btn-animation.btn-animation--slide-to-top:focus:before {
  top: 0;
}

.btn-animation.btn-animation--slide-to-bottom:before {
  top: 0;
  left: 0;
  right: 0;
  bottom: 100%;
}

.btn-animation.btn-animation--slide-to-bottom:hover:before,
.btn-animation.btn-animation--slide-to-bottom:focus:before {
  bottom: 0;
}

.btn-animation.btn-animation--slide-horizontal:before {
  top: 0;
  left: 50%;
  right: 50%;
  bottom: 0;
}

.btn-animation.btn-animation--slide-horizontal:hover:before,
.btn-animation.btn-animation--slide-horizontal:focus:before {
  left: 0;
  right: 0;
}

.btn-animation.btn-animation--slide-vertical:before {
  top: 50%;
  left: 0;
  right: 0;
  bottom: 50%;
}

.btn-animation.btn-animation--slide-vertical:hover:before,
.btn-animation.btn-animation--slide-vertical:focus:before {
  top: 0;
  bottom: 0;
}
</style>

</section>


</body>
</html>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    header img{
        width: 100%;
    }
</style>