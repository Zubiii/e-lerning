<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Varsity | {{$page}}</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"> -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.css') }}" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets/css/theme-color/default-theme.css') }}" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"> 

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

 
  <!-- Start header  -->
  <header id="mu-header">
    @if(sizeof($about)>0)  
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="mu-header-area">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="mu-header-top-left">
                    <a href="mailto:<?= $about[0]->email ?>">
                        <div class="mu-top-email">
                            <i class="fa fa-envelope"></i>
                            <span>{{$about[0]->email}}</span>
                        </div>
                    </a>
                    <a href="tel:<?= $about[0]->phone ?>">
                        <div class="mu-top-phone">
                            <i class="fa fa-phone"></i>
                            <span>{{$about[0]->phone}}</span>
                        </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
  </header>
  <!-- End header  -->

  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="/"><i class="fa fa-university"></i><span>Varsity</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            
            @if($page == 'Home')
                <li class="active"><a href="/">Home</a></li>            
            @else
                <li ><a href="/">Home</a></li>
            @endif

            @if($page == 'Courses' || $page == "Course-Detail")
                <li class="active"><a href="/courses">Courses</a></li>            
            @else
                <li ><a href="/courses">Courses</a></li>
            @endif

            @if($page == 'Gallery')
                <li class="active" ><a href="/gallery">Gallery</a></li>
            @else
                <li><a href="/gallery">Gallery</a></li>
            @endif 

            @if($page == 'Blog')
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="blog-archive.html">Blog Archive</a></li>                
                        <li><a href="blog-single.html">Blog Single</a></li>                
                    </ul>
                </li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Comming Soon</a></li>
                    </ul>
                </li>
            @endif 
            
            @if($page == 'Contact')
                <li class="active"><a href="/contact">Contact</a></li>
            @else
                <li><a href="/contact">Contact</a></li>
            @endif

          </ul>                     
        </div>
        <!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
    <!-- Main Content -->
  <!-- ------------------------------------- Pages Rendring Start ----------------------------->
    
    @if($page == 'Home')
        @include('Home')
    @endif

    @if($page == 'Courses')
        @include('Courses')
    @endif
    
    @if($page == 'Course-Detail')
        @include('CourseDetail')
    @endif

    @if($page == 'Course-Enroll')
        @include('CourseEnroll')
    @endif

    @if($page == 'Course-Ctegory')
        @include('CourseCtegory')
    @endif
    
    @if($page == 'Gallery')
        @include('Gallery')
    @endif

    @if($page == 'Contact')
        @include('Contact')
    @endif
  <!-- ------------------------------------- Pages Rendring End ----------------------------->


  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="/contact">About Us</a></li>
                  <!-- <li><a href="/courses">Features</a></li> -->
                  <li><a href="/courses">Courses</a></li>
                  <!-- <li><a href="">Event</a></li> -->
                  <!-- <li><a href="">Sitemap</a></li> -->
                  <!-- <li><a href="">Term Of Use</a></li> -->
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <!-- <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>                -->
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                @if(sizeof($about)>0)
                    <h4>Contact</h4>
                    <address>
                    <p>{{$about[0]->address}}</p>
                    <p>Phone: {{$about[0]->phone}}</p>
                    @if(isset($about[0]->website))
                        <p>Website: {{$about[0]->website}}</p>
                    @endif
                    <p>Email: {{$about[0]->email}}</p>
                    </address>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved.</p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
    
  </body>
</html>