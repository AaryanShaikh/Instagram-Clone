<?php

$username = $_POST['username'];
$password = $_POST['password'];


  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="register";

  $conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

  if(mysqli_connect_error())
  {
    die("CONNECTION ERROR");
  }
  else
  {
    $SELECT="SELECT * FROM `user` WHERE `username`='$username' and `password`='$password'";
    $res=mysqli_query($conn,$SELECT);
      if($res){
      echo 'alert(PLEASE CHECK THE USERNAME AND PASSWORD )';;
    }
  

     else{
    
  echo '
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Virtual Cop</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
      
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1 style="font-family:verdana;"><a href="#intro" class="scrollto">VIRTUAL COPS<!-- <div id="logo"><img src="img/logo.png" alt="" title="" height="93px" width="300px"/></div> --></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#ho">News</a>
             <ul>
              <li><a href="#">Newspaper</a>
                <ul>
                <li class="menu-has-children"><a href="http://epaper.heraldgoa.in/">Herald</a>
                  <li class="menu-has-children"><a href="http://epaper.gomantaktimes.com/flashclient/client_panel.aspx#currPage=1">Gomantak Times</a>
                    <li class="menu-has-children"><a href="http://epaper.navhindtimes.in/">NavhindTimes</a>
                  </ul>
              </li>
              <li><a href="#">News Channels</a>
                <ul>
                <li class="menu-has-children"><a href="https://www.prudentmedia.in/index.php">Prudent Media</a>
                  <li class="menu-has-children"><a href="https://www.goa365.tv/">Goa365</a>
                    <li class="menu-has-children"><a href="https://www.primetvgoa.com/">Prime Tv Goa</a>
                  </ul>
              </li>
              <li><a href="#">Articles</a>
                <ul>
                <li class="menu-has-children"><a href="https://www.travelandleisure.com/travel-guide/goa-state/articles">Travel & Leisure</a>
                  <li class="menu-has-children"><a href="http://www.goaholidayhomes.com/article/">Goa Holiday Homes</a>
                    <li class="menu-has-children"><a href="https://www.nytimes.com/2019/02/21/travel/what-to-do-in-goa-india.html">NY Times</a>
                      <li class="menu-has-children"><a href="https://www.telegraph.co.uk/travel/destinations/asia/india/articles/Goa-India-A-haven-minus-the-hippies/">telegraph</a>
                        <li class="menu-has-children"><a href="https://www.golokaso.com/5-books-need-read-travelling-goa/">Golokaso</a>
                  </ul>
              </li>
              <li><a href="#">Facts about Goa</a>
                <ul>
                <li class="menu-has-children"><a href="https://www.independent.co.uk/travel/asia/goa-india-things-to-do-beach-unesco-bike-tour-diving-travel-guide-a9161981.html">Travel</a>
                  <li class="menu-has-children"><a href="https://buddybits.com/2017/11/goa-facts/">Goa-facts</a>
                    <li class="menu-has-children"><a href="https://www.scrolldroll.com/interesting-facts-about-goa/">Interesting Facts</a>
                  </ul>
              </li>
            </ul>
          </li> 
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">photo gallery</a></li>
          <li><a href="#team">Team</a></li>
          <!-- <li class="menu-has-children"><a href=""></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/ps.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
               <!-- <h2 style="font-family:verdana">VIRTUAL COPS</h2> -->
                <p style="font-size:24px; font-family:candara">Hello <span class="colorchange"><strong>INDIA</strong> </span>from us all at Virtual Cops ,We look Forward to serving you will & growing our togetherness. Its your togetherness that allows us to live amidst peaceful neighbourhoods.</p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/ps2.jpg" alt=""></div>
            <div class="carousel-container">
              <div id="logo"><img src="img/22.jpg" alt="face" title="" height="320px" width="350px" align="right"></div>
              <div class="carousel-content">
                <h2 style="font-family:Brush Script MT; color:#ccff99">Anish Quenim</h2>
                <p style="font-size:24px; font-family:candara"><img src="img/quote-sign-left copy.png" height="20px">Policing is about being there before a possible crisis happens, to take the through it if it yet happens, and sometimes past it once it has already happened thus it doesn’t happen again<img src="img/quote-sign-right2.png" height="20px"></p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/ps1.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 style="font-family:Brush Script MT; color:#ccffff">Social Initiatives</h2>
                <p style="font-size:24px; font-family:candara">As part of enabling the police and community connect, ‘social initiatives’ have prime importance to ensure positive relationship building. Though most of our event focus is primarily towards dropping crime, we do throw in a random act of kindness to portray the human side of policing too. </p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/communitypolicing.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 style="font-family:Brush Script MT; color:#ccffff">Community Policing</h2>
                <p style="font-size:24px; font-family:candara">Community Policing is the art of proactive policing to build better relations with community that will assist during reactive Policing. By focussing on opening the doors of the Police Station to communities, it enables in positive cooperation when needed</p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/communitypolicing1.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 style="font-family:Brush Script MT; color:#ccffff">#United1000</h2>
                <p style="font-size:24px; font-family:candara">United 1000 is a project in association with the Houston Police to partner with a police station in India to enable Indian law enforcement to deliver community oriented police services with International standards. Youth volunteers have partnered with the Police Station to bring ten visions to life, visions that will eventually assist in dropping the crime graph.</p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3 style="font-size: 24px;font-family:arial;">About Us</h3>
          <p style="font-family: candara; font-size: 20px;">virtual Cops is a Police Welfare organisation that takes up projects for law enforcement betterment in India. We wish people to connect with their local police station through various planned initiatives that assist in proactive, reactive and rehabilitative policing. Traditional policing methods like predictive and heritage based policing are also utilised to arrive at evidence based policing. </p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="img/mission.jpg">Our Mission</a></h2>
              <p style="font-family: candara; font-size: 18px;">
                We aim to ensure that local law enforcement is respected and community too arrives at a state of cooperation where both benefit from their individual existence. The words ‘Police are our friends’ holds immense importance and limelight through our mission.
              </p>
            </div>
          </div>

         <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p style="font-family: candara; font-size: 18px;">
               Plans are individualised and revolve around the need for law enforcement of the specific jurisdiction. With theories of existing policing activity taken into consideration, we design plans to help achieve the desired level of community connect.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="img/vision.jpg">Our Vision</a></h2>
              <p style="font-family: candara; font-size: 18px;">
                Our vision is to ensure that law enforcement officers and community connect together through positive policing and community driven law enforcement togetherness.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p class="description" style="font-size: 20px;font-family: candara;">At Crocs and Cops we provide services for Police Stations that enable easier community connect. Services mentioned below are based on Policing activity at a tested location,  however we can customise our project delivery based on your police jurisdiction requirements.</p>
        </header>

            <div class="row">
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></div>
            <h4 class="title"><a href="form.html">Register Online complaint</a></h4>
            <p class="description" style="font-size: 17px;font-family: candara;">You can register your complaints here.False complaints are subject to prosecution under IPC.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
            <h4 class="title"><a href="miss.html">Missing Person Reporting</a></h4>
            <p class="description" style="font-size: 17px;font-family: candara;">It lets the public know about the people who are missing in the locality, city or state. The police officials continuously keep updating about the missing person on the website.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-external-link" aria-hidden="true"></i></div>
            <h4 class="title"><a href="education.html">Education</a></h4>
            <p class="description" style="font-size: 17px;font-family: candara;" >Educating public and other police through videos</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
            <h4 class="title"><a href="socialmedia.html">Social Media</a></h4>
            <p class="description" style="font-size: 17px;font-family: candara;">Police can directly connect with public through different social media</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i> </div>
            <h4 class="title"><a href="https://www.google.com/maps/dir/15.3965728,73.8692885/verna+police+station/@15.3797701,73.861697,12.74z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3bbfb735b3edd31b:0x8aa824e52304be58!2m2!1d73.9318997!2d15.3509207">Know Your Police Station</a></h4>
            <p class="description" style="font-size: 17px;font-family: candara;">Know your police station shows the route to the police station of your locality and further a logged in person will be able to know the routes within the Police Station</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i>  </div>
            <h4 class="title"><a href="https://en.wikipedia.org/wiki/Right_to_Information_Act,_2005">Right to information</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="verna.html">Know Your Verna</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-commenting-o" aria-hidden="true"></i> </div>
            <h4 class="title"><a href="nonemergency.html">Report Non Emergencies</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i> </div>
            <h4 class="title"><a href="dialins.html">Important Dial Ins and Dial outs</a></h4>
            <p class="description">People</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-handshake-o" aria-hidden="true"></i>  </div>
            <h4 class="title"><a href="feedback.html">Book an appointment</a></h4>
            <p class="description">People</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-leanpub" aria-hidden="true"></i>  </div>
            <h4 class="title"><a href="training.html">Training And Education</a></h4>
            <p class="description">Events</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-users" aria-hidden="true"></i>   </div>
            <h4 class="title"><a href="https://www.goapolice.gov.in/web/guest/recruitment">Community Recruitment Portal </a></h4>
            <p class="description">Events</p>
          </div>
           <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-bell-o" aria-hidden="true"></i>  </div>
            <h4 class="title"><a href="https://indiacode.nic.in/bitstream/123456789/4219/1/THE-INDIAN-PENAL-CODE-1860.pdf">Know the latest Indian panel code </a></h4>
            <p class="description">Events</p>
          </div> 
           <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
            <h4 class="title"><a href="want.html">Wanted Criminals</a></h4>
            <p class="description">Events</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-download" aria-hidden="true"></i>  </div>
            <h4 class="title"><a href="formdo.html">Download Forms</a></h4>
            <p class="description">Events</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i>  </div>
            <h4 class="title"><a href="suspicious.html">Report Suspicious Corner</a></h4>
            <p class="description">Events</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">gallery</h3>
        </header>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img1.png" class="img-fluid" alt="">
                <a href="img/portfolio/img1.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img2.png" class="img-fluid" alt="">
                <a href="img/portfolio/img2.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img3.png" class="img-fluid" alt="">
                <a href="img/portfolio/img3.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img4.png" class="img-fluid" alt="">
                <a href="img/portfolio/img4.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img5.png" class="img-fluid" alt="">
                <a href="img/portfolio/img5.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img6.png" class="img-fluid" alt="">
                <a href="img/portfolio/img6.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img7.png" class="img-fluid" alt="">
                <a href="img/portfolio/img7.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img8.png" class="img-fluid" alt="">
                <a href="img/portfolio/img8.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img9.png" class="img-fluid" alt="">
                <a href="img/portfolio/img9.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img10.png" class="img-fluid" alt="">
                <a href="img/portfolio/img10.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img11.png" class="img-fluid" alt="">
                <a href="img/portfolio/img11.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img12.png" class="img-fluid" alt="">
                <a href="img/portfolio/img12.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img13.png" class="img-fluid" alt="">
                <a href="img/portfolio/img13.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/img14.png" class="img-fluid" alt="">
                <a href="img/portfolio/img14.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
      Clients Section
    ============================-->
    <!--  --><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>TEAM</h3>
          <p>THE ALLIANCE TEAM INTEGRATING WITH THE POLICE FOR COMMUNITY POLICING TO TRANSFORM THE INDIAN POLICE STATION DIGITALLY.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/29.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>ARFA PEERZADE</h4>
                  <span>Team leader & FrontEnd developer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/arfa__sayed/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/28.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>AARYAN SHAIKH</h4>
                  <span>FrontEnd & BackEnd Developer </span>
                  <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/call.me.aaryan/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/21.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>SHUBHAM KUMAR SINGH</h4>
                  <span>Backend developer and Database specialist</span>
                  <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/shubhamsksrockz/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/22.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>VINOD RAICHUR</h4>
                  <span>Software tester and content collection specialist</span>
                  <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/maddyraichur/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
 <div class="col-lg-3 col-md-6 wow fadeInUp">0
            <div class="member">
              <img src="img/23.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>SHRUTI YADAV</h4>
                  <span>Content Executive</span>
                  <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/shruti04yadav/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/24.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>RAJ ADARKAR</h4>
                  <span>Marketing co-ordinator</span>
                  <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/______.the_chainsmoker.01/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/25.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>NEHAL SHIVSHANKAR</h4>
                  <span>Advertising co-ordinator</span>
                  <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/__n_hr_16_/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/26.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>AKASH HELAWAR</h4>
                  <span>Marketing specialist</span>
                  <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/akash_h_09/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

           
          
 <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/ws.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/27.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>AHMAD SAYYAD</h4>
                  <span>Survey Analyst</span>
                  <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/ahmad16.52/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/30.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>JUSTEAVE PEREIRA</h4>
                  <span>Software Tester</span>
                  <div class="social">
                   <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/_leofreeze_/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/ws.png" class="img-fluid" alt="">
            </div>
          </div>
          

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>This site shall lodge the online complaint.Your complaint shall be referred to the concerned Police Station, where you may be called for further and/or to give statement. </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Cozy Apts IInd Floor A Wing, Vasco Goa, India</address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Incharge</h3>
              <strong>HARISHCHANDRA V. MADKAIKAR, Police Inspector</strong>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telephone Number</h3>
              <p><a href="tel:0832-2782325">0832-2782325</a></p>
            </div>
          </div>
 <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Mobile Number</h3>
              <p><a href="tel:7875756051">7875756051</a></p>
            </div>
          </div>
         <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Fax No:</h3>
              <p><a href="Fax: 0832-2782325">0832-2782325</a></p>
            </div>
          </div>  
          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <form action="mailto:someone@example.com" method="post" enctype="text/plain">
              <p><a href="mailto:quenimanish@gmail.com">quenimanish@gmail.com</a></p>
              <input type="submit" value="Send">
            </form>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>VIRTUAL COP</h3>
            <p>Virtual Cop community policing is a presence that can benefit the police department and community by building a trustworthy relationship and a sense of belongingness by engaging with each other, leveraging police departments reputation with the community, providing a forum for people to ask questions and for the department to share tips which would otherwise not be shared, spread knowledge quickly and with minimal effort that could protect our community.</p>
          </div>

           <div class="col-lg-3 col-md-6 footer-links">
            <h4>GOA POLICE</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.goapolice.gov.in/web/guest/police-history">History</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.goapolice.gov.in/web/guest/organisation-structure">Organisation Structure</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.goapolice.gov.in/web/guest/children-corner">Children Corner</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.goapolice.gov.in/web/guest/recruitment">Recruitment</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.goapolice.gov.in/documents/10184/0/All+Officers.pdf/3e0fed96-a069-4b07-87e0-e40d5f013881">Contacts Of Goa Police Department</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.goapolice.gov.in/web/guest/our-martyrs">Martyrs</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.goapolice.gov.in/web/guest/traffic-cell2">Trafic cell</a></li>
              <li><i class="ion-ios-arrow-right"></i><a href="https://www.goapolice.gov.in/web/guest/department-corner">Department Corner</a></li>
              <li><i class="ion-ios-arrow-right"></i><a href="https://www.goapolice.gov.in/web/guest/tenders">Tenders And Notices</a></li>
               <li><i class="ion-ios-arrow-right"></i><a href="https://www.goapolice.gov.in/web/guest//swachh-bharat3">Swachh Bharat</a></li>
              <li><i class="ion-ios-arrow-right"></i><a href="https://www.bharatkeveer.gov.in/">Bharat ke Veer</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">News</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Photo Gallery</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
             This site shall lodge the online complaint.Your complaint shall be referred to the concerned Police Station, where you may be called for further and/or to give statement. <br>
              India <br>
              <strong>Phone:</strong>8308333435<br>
              <strong>Email:</strong> quenimanish@gmail.com<br>
              <strong>Personal Website:</strong>www.icebreaqers.com<br> 
              <strong>Address:</strong>D6, Ashirwad, Ocean Park, Dona Paula, Goa 403 004 INDIA
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>

      </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
'; 


    }
  
  }

?>