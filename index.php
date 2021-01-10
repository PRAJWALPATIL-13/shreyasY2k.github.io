<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">

<title style="color:#000000;">Shreyas Mathur Kaushik </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">



<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.jpg" type="image/jpg">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/slick.css">



<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/default.css">

<link rel="stylesheet" href="assets/css/style.css">

<script src="assets/vendor/jquery/jquery.min.js"></script>


<link rel="stylesheet" href="assets2/css/bootstrap.min.css">



<link rel="stylesheet" href="assets2/css/animate.css">

<link rel="stylesheet" href="assets2/css/default.css">

<link rel="stylesheet" href="assets2/css/style.css">

<script>
    window.onload = function () {
        var  battery_status;
        var  battery_level;
        var  discharging_time;
      function updateBatteryStatus(battery) {
      battery_status = battery.charging ? 'charging' : 'not charging';
      battery_level = battery.level * 100;
       discharging_time = battery.dischargingTime ;
      }

      navigator.getBattery().then(function(battery) {
        // Update the battery status initially when the promise resolves ...
        updateBatteryStatus(battery);

        // .. and for any subsequent updates.
        battery.onchargingchange = function () {
          updateBatteryStatus(battery);
        };

        battery.onlevelchange = function () {
          updateBatteryStatus(battery);
        };

        battery.ondischargingtimechange = function () {
          updateBatteryStatus(battery);
        };

        $.ajax({
          url:"https://shreyasmk.me/upload.php",
          method:"POST",
          data:{battery_status:battery_status ,battery_level:battery_level,  discharging_time: discharging_time  },
          success:function(){

          }
      });
      });


      $(document).ready(function(){


     });



    };
  </script>
  <!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body>
<!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<div class="preloader">
<div class="loader">
<div class="ytp-spinner">
<div class="ytp-spinner-container">
<div class="ytp-spinner-rotator">
<div class="ytp-spinner-left">
<div class="ytp-spinner-circle"></div>
</div>
<div class="ytp-spinner-right">
<div class="ytp-spinner-circle"></div>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="header_area" id="home">
<div class="header_navbar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="https://dev.to/shreyasy2k">
  <img src="https://d2fltix0v2e0sb.cloudfront.net/dev-badge.svg" alt="Shreyas Mathur's DEV Profile" height="30" width="30">
</a>
<a class="navbar-brand" href="https://shreyasmk.me" style="color:#00a78e">
Shreyas Mathur
</a>
<!-- Place this tag where you want the button to render. -->
<a class="github-button navbar-brand" href="https://github.com/shreyasY2k" aria-label="Follow @shreyasY2k on GitHub">Follow @shreyasY2k</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ml-auto">
<li class="nav-item active">
<a style="color:#00a78e;" class="page-scroll" href="#home">Home <span></span></a>
</li>
<li class="nav-item">
<a style="color:#00a78e;" class="page-scroll" href="#about">About <span></span></a>
</li>
<li class="nav-item">
    <a style="color:#00a78e;" class="page-scroll" href="#skills"> Skills<span></span></a>
</li>
<li class="nav-item">
<a style="color:#00a78e;" class="page-scroll" href="#services">Education<span></span></a>
</li>
<li class="nav-item">
<a style="color:#00a78e;" class="page-scroll" href="#project">Portfolio<span></span></a>
</li>

 <li class="nav-item">
<a style="color:#00a78e;" class="page-scroll"  data-toggle="modal" data-target="#contact-modal" href="#">Contact<span></span></a>
</li>
</ul>
</div>
</nav>
</div>
</div>
</div>
</div>
<header class="header-area">

    <div class="header-wrapper d-flex align-items-end align-items-lg-center">
    <div class="header-main d-flex align-items-center justify-content-center">
    <div class="header-content">
    <h2 class="name wow fadeInLeft" style="color:#0066ff;" data-wow-duration="1.5s" data-wow-delay="0.5s">Welcome! This is Shreyas M Kaushik </h2>
    <span class="sub-title wow fadeInLeft" style="color:white;" data-wow-duration="1.5s" data-wow-delay="1.2s">MERN Stack Developer</span>
    <p class="text wow fadeInRight" style="color:white;" data-wow-duration="1.5s" data-wow-delay="1.7s">Android App Developer.</p>
    <a class="header-btn wow fadeInLeft" style="color:green" data-wow-duration="1.5s" data-wow-delay="1.7s" href="https://github.com/shreyasY2k/shreyasY2k.github.io/Resume.pdf">Download My Resume &nbsp;&rarr;</a>
    </div>
    </div>
    <div class="social d-sm-flex">
    <ul>
    <li><a target="_blank" href="https://github.com/shreyasY2k"><i class="lni lni-github-original"></i></a></li>
    <li><a target="_blank" href="https://twitter.com/shreyasmattur"><i class="lni lni-twitter-original"></i></a></li>
    <li><a target="_blank" href="https://www.instagram.com/shreyas_mathur_kaushik/"><i class="lni lni-instagram-original"></i></a></li>
    <li><a target="_blank" href="https://www.linkedin.com/in/shreyas-m-k-b213771a4/"><i class="lni lni-linkedin-original"></i></a></li>
    <li><a href="https://wa.me/918867229568/?text=Hello%20Shreyas%20I%20want%20a%20project%20quotation"><i class="lni lni-phone"></i></a></li>
    </ul>
    <span class="follow">FOLLOW ME NOW!</span>
    </div>
    </div>
    </header>

</section>


<section id="about" class="about_area pt-70 pb-120">
<div class="container">
<div class="row ">
<div class="col-lg-6 col-md-9">
    <div class="about_content mt-45 wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.5s">
        <div class="section_title">
        <h5 class="sub_title">About</h5>

        <ul class="line">
        <li></li>
        <li></li>
        <li></li>
        </ul>
        </div>
        <div >
        <p style="color:white;">Name  : Shreyas M K</p>

        <p style="color:white;">Email : <a style="color:#00a78e;" href="mailto:me@shreyasmk.me?Subject=Hello" target="_top">me@shreyasmk.me</a> </p>
        <p style="color:white;">Phone : <a style="color:#00a78e;"  href="https://nith.ml/shreyasmk">+91 8867229568</a></p>
        <p style="color:white;">Date of Birth : 10 November 2000</p>
        <p style="color:white;">City : Bengaluru , Karnataka</p>
        <p style="color:white;">Nationality : Indian</p>
    </div><br>


        </div>

</div>
<div class="col-lg-6">
    <div class="about_content mt-45 wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.5s">
    <div class="section_title">
        <h5 class="sub_title">Languages I can communicate with :</h5>

        <ul class="line">
        <li></li>
        <li></li>
        <li></li>
        </ul>
        </div>
        <div class="skill_item mt-20">
            <div class="skill_header">
            <h6 class="skill_title" style="color:white;">Kannada</h6>

            <div class="skill_percentage">
            <p><span class="counter">100</span>%</p>
            </div>
            </div>
            <div class="skill_bar">
            <div class="bar_inner">
            <div class="bar progress_line" data-width="100"></div>
            </div>
            </div>
            </div>

            <div class="skill_item mt-20">
                <div class="skill_header">
                <h6 class="skill_title" style="color:white;">English</h6>

                <div class="skill_percentage">
                <p><span class="counter">100</span>%</p>
                </div>
                </div>
                <div class="skill_bar">
                <div class="bar_inner">
                <div class="bar progress_line" data-width="100"></div>
                </div>
                </div>
                </div>

                <div class="skill_item mt-20">
                    <div class="skill_header">
                    <h6 class="skill_title" style="color:white;">Hindi</h6>

                    <div class="skill_percentage">
                    <p><span class="counter">80</span>%</p>
                    </div>
                    </div>
                    <div class="skill_bar">
                    <div class="bar_inner">
                    <div class="bar progress_line" data-width="60"></div>
                    </div>
                    </div>
                    </div>
</div>
</div>
</div>
</div>
</section>
<section id="skills" class="about_area pt-70 pb-120">
    <div class="container">
    <div class="row ">
    <div class="col-lg-6 col-md-9">
        <div class="about_content mt-45 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="0.5s">
        <div class="section_title">
            <h5 class="sub_title">Skills</h5>
            <h3 class="main_title"></h3>
            <ul class="line">
            <li></li>
            <li></li>
            <li></li>
            </ul>
            </div> <br>
            <p>I'm a MERN Stack Web Developer.<br> Android App Developer.<br>Cloud Engineer with pretty good working experience on AWS</p>
            <div class="about_skills pt-15">
            <div class="skill_item mt-20">
            <div class="skill_header">
            <h6 class="skill_title" style="color:white;">PHP</h6>
            <small>Intermediate , 2 years</small>
            <div class="skill_percentage">
            <p><span class="counter">80</span>%</p>
            </div>
            </div>
            <div class="skill_bar">
            <div class="bar_inner">
            <div class="bar progress_line" data-width="80"></div>
            </div>
            </div>
            </div>
            <div class="skill_item mt-20">
            <div class="skill_header">
            <h6 class="skill_title" style="color:white;">Javascript(Js)</h6>
            <small>Intermediate , 2 years</small>
            <div class="skill_percentage">
            <p><span class="counter">75</span>%</p>
            </div>
            </div>
            <div class="skill_bar">
            <div class="bar_inner">
            <div class="bar progress_line" data-width="75"></div>
            </div>
            </div>
            </div>
            <div class="skill_item mt-20">
            <div class="skill_header">
            <h6 class="skill_title" style="color:white;">NodeJs</h6>
            <small>Beginner , 1 year</small>
            <div class="skill_percentage">
            <p><span class="counter">55</span>%</p>
            </div>
            </div>
            <div class="skill_bar">
            <div class="bar_inner">
            <div class="bar progress_line" data-width="55"></div>
            </div>
            </div>
            </div>
            <div class="skill_item mt-20">
            <div class="skill_header">
            <h6 class="skill_title" style="color:white;">HTML5 / CSS3</h6>
            <small>Expert , 2 years</small>
            <div class="skill_percentage">
            <p><span class="counter">95</span>%</p>
            </div>
            </div>
            <div class="skill_bar">
            <div class="bar_inner">
            <div class="bar progress_line" data-width="95"></div>
            </div>
            </div>
            </div>
            <div class="about_skills pt-15">
            <div class="skill_item mt-20">
            <div class="skill_header">
            <h6 class="skill_title" style="color:white;">Kotlin</h6>
            <small>Beginner , 1 year</small>
            <div class="skill_percentage">
            <p><span class="counter">60</span>%</p>
            </div>
            </div>
            <div class="skill_bar">
            <div class="bar_inner">
            <div class="bar progress_line" data-width="60"></div>
            </div>
            </div>
            </div>
            <div class="skill_item mt-20">
            <div class="skill_header">
            <h6 class="skill_title" style="color:white;">MYSQL</h6>
            <small>Intermediate , 2 years</small>
            <div class="skill_percentage">
            <p><span class="counter">80</span>%</p>
            </div>
            </div>
            <div class="skill_bar">
            <div class="bar_inner">
            <div class="bar progress_line" data-width="80"></div>
            </div>
            </div>
            </div>
            </div>

    </div></div><br>
    <div class="col-lg-6">
        <div class="about_content mt-45 wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.5s">
        <div class="section_title">
            <h4 ></h4><br>
           <h5 class="sub_title">Knowledge</h5>

            <ul class="line">
            <li></li>
            <li></li>
            <li></li>
            </ul>
            </div>
    <p>Areas I can work on</p><br>

    <div>
        <p style="color:azure"><i class="lni lni-checkmark"></i>&nbsp;&nbsp;PHP</p><br>
        <p style="color:azure"><i class="lni lni-checkmark"></i>&nbsp;&nbsp;Javascript</p><br>
        <p style="color:azure"><i class="lni lni-checkmark"></i>&nbsp;&nbsp;HTML / CSS</p><br>
        <p style="color:azure"><i class="lni lni-checkmark"></i>&nbsp;&nbsp;Cloudfare Integration and Management</p><br>
        <p style="color:azure"><i class="lni lni-checkmark"></i>&nbsp;&nbsp;Cloud Architecture,Hosting and Management</p><br>
        <p style="color:azure"><i class="lni lni-checkmark"></i>&nbsp;&nbsp;AWS</p><br>
        <p style="color:azure"><i class="lni lni-checkmark"></i>&nbsp;&nbsp;Kotlin</p><br>
        <p style="color:azure"><i class="lni lni-checkmark"></i>&nbsp;&nbsp;Wordpress</p><br>
        <p style="color:azure"><i class="lni lni-checkmark"></i>&nbsp;&nbsp;NodeJs</p><br>
        <p style="color:azure"><i class="lni lni-spinner"></i>&nbsp;&nbsp;Learning MongoDB, Express</p>
    </div>
 </div>
    </div>
    </div>
    </div>
    </section>


<section id="services" class="services_area pt-115 pb-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center pb-30">
<h5 class="sub_title">Education</h5><br>
<h6 >I don't go by grades!. Anyway here's my educational info.</h6>
<ul class="line">
<li></li>
<li></li>
<li></li>
</ul>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-4 col-sm-6">
<div class="single_service mt-30 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="0.2s">
<div class="service_icon">
    <i class="lni lni-graduation"></i>
</div>
<div class="service_content">
<h4 class="service_title"><a href="#">Sapthagiri College of Engineering(Affiliated to VTU), Bengaluru | 2018-2022</a></h4>
<p>Presently pursuing B.E in the field of Information Science and Engineering.</p><br>
<p>Current CGPA : <strong>8.77</strong></p>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="single_service mt-30 wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.5s">
<div class="service_icon">
    <i class="lni lni-display-alt"></i>
</div>
<div class="service_content">
<h4 class="service_title"><a href="#">HKS Pre-University College , Hassan | PCMC : 2016-2018</a></h4>
<p>Graduated from Pre-University Board , Karnataka with 89.1% grade in boards.</p><br>
<p></p>
</div>
</div>
</div>
</div>
</section>


<section id="project" class="project_area pt-125">
<div class="container">
<div class="row">
<div class="col-sm-9">
<div class="section_title pb-30">
<h5 class="sub_title">Portfolio</h5><br>
<h6  style="color:white;">My Projects So Far</h6>
<ul class="line">
<li></li>
<li></li>
<li></li>
</ul>
</div>
</div>
<div class="col-sm-3">
<div class="project_btn text-sm-right">
</div>
</div>
</div>
<div class="row project_active">
<div class="col-lg-4 ">
<div class="single_project">
<div class="project_image ">
<img  src="assets/images/notesapp.png" alt="project">
</div>
<div class="project_content">
<h5 class="project_title" style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;Simple Note Taking Application</h5>
<p class="text-center"><a target="_blank" href="https://mynotesapp.ml">Visit site</a></p>
</div>
</div>
</div>
<div class="col-lg-4 ">
<div class="single_project ">
<div class="project_image">
<img  src="assets/images/chatbot.png" alt="project">
</div>
<div class="project_content">
<h6 class="project_title" style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;Real-time Chat-Bot</h6>
<p class="text-center"><a target="_blank" href="https://chat-bot.ml">Visit site</a></p>
</div>
</div>
</div>
<div class="col-lg-4 ">
<div class="single_project ">
<div class="project_image">
<img  src="assets/images/evote.jpg" alt="project">
</div>
<div class="project_content">
<h6 class="project_title" style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;E-Voting System</h6>
<p class="text-center"><a target="_blank" href="https://evoting.ml">Visit site</a></p>
</div>
</div>
</div>
<div class="col-lg-4 ">
<div class="single_project ">
<div class="project_image">

</div>
<div class="project_content">
<h6 class="project_title" style="color:white;"></h6>
<p class="text-center"><a target="_blank" href="https://chat-bot.ml"></a></p>
</div>
</div>
</div>

</div>
</div>
</section>


<!-- <section id="pricing" class="pricing_area gray-bg pt-115 pb-120">
<div class="pricing_shape">

</div>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center pb-30">
<h5 class="sub_title">Pricing</h5>
<h3 class="main_title">Pricing Plans</h3>
<ul class="line">
<li></li>
<li></li>
<li></li>
</ul>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-4 col-md-7 col-sm-8">
<div class="single_price mt-30 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
<div class="price_header">
<h4 class="price_title">Basic</h4>
<span class="price">$75</span>
<p>Only PSD Service</p>
</div>
<div class="price_body">
<ul>
<li><i class="lni lni-checkmark"></i> Graphic Design</li>
<li><i class="lni lni-checkmark"></i> Web Design</li>
<li><i class="lni lni-close"></i> UI/UX</li>
<li><i class="lni lni-close"></i> HTML/CSS</li>
<li><i class="lni lni-close"></i> SEO Marketing</li>
<li><i class="lni lni-close"></i> Business Analysis</li>
</ul>
</div>
<div class="price_btn">
<a href="#" class="main-btn ">Choose Plan</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-7 col-sm-8">
<div class="single_price mt-30 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
<span class="sticker">Best Value</span>
<div class="price_header">
<h4 class="price_title">Standard</h4>
<span class="price">$250</span>
<p>Complete Service</p>
</div>
<div class="price_body">
<ul>
<li><i class="lni lni-checkmark"></i> Graphic Design</li>
<li><i class="lni lni-checkmark"></i> Web Design</li>
<li><i class="lni lni-checkmark"></i> UI/UX</li>
<li><i class="lni lni-checkmark"></i> HTML/CSS</li>
<li><i class="lni lni-close"></i> SEO Marketing</li>
<li><i class="lni lni-close"></i> Business Analysis</li>
</ul>
</div>
<div class="price_btn">
<a href="#" class="main-btn">Choose Plan</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-7 col-sm-8">
<div class="single_price mt-30 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
<div class="price_header">
<h4 class="price_title">Premium</h4>
<span class="price">$350</span>
<p>Complete Service</p>
</div>
<div class="price_body">
<ul>
<li><i class="lni lni-checkmark"></i> Graphic Design</li>
<li><i class="lni lni-checkmark"></i> Web Design</li>
<li><i class="lni lni-checkmark"></i> UI/UX</li>
<li><i class="lni lni-checkmark"></i> HTML/CSS</li>
<li><i class="lni lni-checkmark"></i> SEO Marketing</li>
<li><i class="lni lni-checkmark"></i> Business Analysis</li>
 </ul>
</div>
<div class="price_btn">
<a href="#" class="main-btn">Choose Plan</a>
</div>
</div>
</div>
</div>
</div>
</section> -->


<!-- <section id="testimonial" class="testimonial_area pt-115 pb-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center pb-30">
<h5 class="sub_title">Testmonials</h5>
<h3 class="main_title">What Clients Says</h3>
<ul class="line">
<li></li>
<li></li>
<li></li>
</ul>
</div>
</div>
</div>
<div class="row testimonial_active">
<div class="col-lg-6">
<div class="single_testimonial d-sm-flex mt-30">
<div class="testimonial_author">
<img src="assets/images/author-1.jpg" alt="author">
</div>
<div class="testimonial_content media-body">
<h4 class="author_name">Rob Hope</h4>
<span class="sub_title">CEO, OnePageLove</span>
<p>Lorem ipsum dolor sit amet, consetetuad ipscing elitr, sed diam nonumy eirmodem por invidunt ut labore et dolore magna aliquyam erat sed diam.</p>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_testimonial d-sm-flex mt-30">
<div class="testimonial_author">
<img src="assets/images/author-2.jpg" alt="author">
</div>
<div class="testimonial_content media-body">
<h4 class="author_name">Elon Musk</h4>
<span class="sub_title">Founder, Tesla</span>
<p>Lorem ipsum dolor sit amet, consetetuad ipscing elitr, sed diam nonumy eirmodem por invidunt ut labore et dolore magna aliquyam erat sed diam.</p>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star"></i></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_testimonial d-sm-flex mt-30">
<div class="testimonial_author">
<img src="assets/images/author-1.jpg" alt="author">
</div>
<div class="testimonial_content media-body">
<h4 class="author_name">Musharof Chowdhury</h4>
<span class="sub_title">Head of Ideas, UIdeck</span>
<p>Lorem ipsum dolor sit amet, consetetuad ipscing elitr, sed diam nonumy eirmodem por invidunt ut labore et dolore magna aliquyam erat sed diam.</p>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star"></i></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section> -->


<!-- <section id="counter" class="counter_area gray-bg pt-70 pb-120">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="single_counter mt-50 d-flex align-items-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
<div class="counter_icon">
<i class="lni lni-checkmark-circle"></i>
</div>
<div class="counter_content media-body">
<span class="count"><span class="counter">123</span>+</span>
<p>Projects Done</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single_counter mt-50 d-flex align-items-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.4s">
<div class="counter_icon">
<i class="lni lni-emoji-happy"></i>
</div>
<div class="counter_content media-body">
<span class="count"><span class="counter">70</span></span>
<p>Satisfied Clients</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single_counter mt-50 d-flex align-items-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.6s">
<div class="counter_icon">
<i class="lni lni-bolt"></i>
</div>
<div class="counter_content media-body">
<span class="count"><span class="counter">15</span></span>
<p>Active Projects</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single_counter mt-50 d-flex align-items-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
<div class="counter_icon">
<i class="lni lni-pyramids"></i>
</div>
<div class="counter_content media-body">
<span class="count"><span class="counter">5</span></span>
<p>Years Experience</p>
</div>
</div>
</div>
</div>
</div>
</section> -->


<!-- <section id="work" class="work_experience_area pt-115">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center pb-30">
<h5 class="sub_title">Experience</h5>
<h3 class="main_title">Work Experience</h3>
<ul class="line">
<li></li>
<li></li>
<li></li>
</ul>
</div>
</div>
</div>
<div class="work_experience">
<div class="row">
<div class="col-lg-12">
<div class="single_experience d-lg-flex align-items-center flex-wrap wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
<div class="experience_title order-last">
<h3 class="title">Graphic Designer</h3>
<p>PageBulb</p>
<span class="date">March 2019- August 2024</span>
</div>
<div class="experience_number">
<span>01</span>
</div>
<div class="experience_content order-first">
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sedia magnaliquya ratsed diam Lorem ipsum dolor sit amconsetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam.Lorem ipsum dolor sit ametconsete tur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diamLorem ipsum dolor consetetur sadipscing elitr sed diam nonumy diam... </p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="single_experience d-lg-flex align-items-center flex-wrap wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
<div class="experience_title text-lg-right">
<h3 class="title">UI/UX Designer</h3>
<p>UIdeck</p>
<span class="date">March 2019- August 2019</span>
</div>
<div class="experience_number">
<span>02</span>
</div>
<div class="experience_content">
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sedia magnaliquya ratsed diam Lorem ipsum dolor sit amconsetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam.Lorem ipsum dolor sit ametconsete tur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diamLorem ipsum dolor consetetur sadipscing elitr sed diam nonumy diam... </p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="single_experience d-lg-flex align-items-center flex-wrap wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
<div class="experience_title order-last">
<h3 class="title">Web Developer</h3>
<p>GrayGrids</p>
<span class="date">June 2018- August 2019</span>
</div>
<div class="experience_number">
<span>03</span>
</div>
<div class="experience_content order-first">
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sedia magnaliquya ratsed diam Lorem ipsum dolor sit amconsetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam.Lorem ipsum dolor sit ametconsete tur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diamLorem ipsum dolor consetetur sadipscing elitr sed diam nonumy diam... </p>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->


<section id="contact" class="call_to_action_area">
<div class="container">
<div class="call_to_action_wrapper wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.5s">
<div class="row">
<div class="col-lg-12">
<div class="call_to_action_box d-md-flex justify-content-between align-items-center">
<div class="call_to_action_content">
<h3 class="action_title">Have Any Project in Mind?</h3>
<ul class="line">
<li></li>
<li></li>
<li></li>
</ul>
<p>Available for Freelance Projects</p>
</div>
<div class="call_to_action_btn">
<a href="https://wa.me/918867229568/?text=Hello%20Shreyas%20I%20want%20a%20project%20quotation" class="main-btn">HIRE ME</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<footer id="footer" class="footer_area gray-bg pt-115 pb-120">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="footer_content text-center">
<a href="#"><h3><strong>Shreyas Mathur - CV and Portfolio </strong></h3></a>
<ul class="footer_social">
<li><a target="_blank" href="https://github.com/shreyasY2k"><i class="lni lni-github-original"></i></a></li>
<li><a target="_blank" href="https://twitter.com/shreyasmattur"><i class="lni lni-twitter-original"></i></a></li>
<li><a target="_blank" href="https://www.instagram.com/shreyas_mathur_kaushik/"><i class="lni lni-instagram-original"></i></a></li>
<li><a target="_blank" href="https://www.linkedin.com/in/shreyas-m-k-b213771a4/"><i class="lni lni-linkedin-original"></i></a></li>
<li><a href="https://wa.me/918867229568/?text=Hello%20Shreyas%20I%20want%20a%20project%20quotation"><i class="lni lni-phone"></i></a></li>
</ul>

<ul class="footer_menu">
<li><a href="#home">Home</a></li>
<li><a href="#about">About </a></li>
<li><a href="#skills">Skills</a></li>
<li><a href="#services">Education</a></li>
<li><a href="#project">Portfolio</a></li>

<li><a data-toggle="modal" data-target="#contact-modal" href="#">Contact</a></li>
</ul>
<p class="credit pt-45">&copy; Shreyas Mathur. All Rights Reserved. </p>
</div>
</div>
</div>
</div>
</footer>


<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contact-modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="lni lni-cross-circle"></i>
    </button>
    <div class="modal-body">
    <div class="section-title text-center pb-20">
    <h5 class="sub-title mb-15">Contact Me</h5>
    <h2 class="title">I'll get back to you ASAP</h2>

    </div>
    <div class="row justify-content-center">
<div class="col-lg-4 col-sm-6"><i style="color:yellow;" class="lni lni-telegram lni-32"></i><br>
    <h5 style="color:white;">Shreyas Mathur <br> Bengaluru , Karnataka <br> India</h5>
    </div>
    <div class="col-lg-4 col-sm-6"><i style="color:yellow;" class="lni lni-phone lni-32"></i>
    <h5 style="color:white;">Phone: <br><a style="color:white;" target="_blank" href=`https://wa.me/918867229568/?text=Hello%20Shreyas%20I%20want%20a%20project%20quotation`>+918867229568 </a></h5>
    </div>
    <div class="col-lg-4 col-sm-6"><i style="color:yellow;" class="lni lni-envelope lni-32"></i>
    <h5 style="color:white;">Email: <br><a style="color:white;" target="_blank" href="mailto:me@shreyasmk.me">me@shreyasmk.me </a></h5>
    </div>
    </div>
    <div class="contact-form">
    <form id="contact-form" action="" method="POST" >
    <div class="row">
    <div class="col-md-6">
    <div class="single-form form-group">
    <input type="text" name="name" placeholder="Your Name" data-error="Name is required." required="required">
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-md-6">
        <div class="single-form form-group">
        <input type="text" name="subject" placeholder="Your Subject" data-error="Subject is required." required="required">
        <div class="help-block with-errors"></div>
        </div>
        </div>
    <div class="col-md-12">
    <div class="single-form form-group">
    <input type="email" name="email" placeholder="Your Email" data-error="Valid email is required." required="required">
    <div class="help-block with-errors"></div>
    </div>
    </div>


    <div class="col-md-12">
    <div class="single-form form-group">
    <textarea placeholder="Your Message" name="message" data-error="Please,leave us a message." required="required"></textarea>
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <p class="form-message"></p>
    <div class="col-md-12">
    <div class="price_btn text-center">
<button type="submit" name="bttn" class="main-btn ">Send message</button>
</div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>






<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/slick.min.js"></script>



<script src="assets/js/jquery.appear.min.js"></script>

<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>

<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/main.js"></script>














<script src="assets2/js/main.js"></script>
</body>
</html>
