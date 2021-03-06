<!-- new template 9-15-2014 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>INSTANT - Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Blog Project</a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.blade">Home</a></li>
            <li><a href="about.blade">About</a></li>
            <li><a href="#works">Blog</a></li>
            <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
          
            <li class="dropdown">
            <a id="dLabel" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
                    <li><a href="{{{ action('HomeController@logout') }}}">Logout</a></li>
                    <li><a href="#">Forgot Username/Password</a></li>
                </ul>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
            @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
            @endif
            @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
            @endif
    </div>
    


    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h4>HELLO PEOPLE, MY NAME IS</h4>
                    <h1>William Martin Cruz</h1>
                    <h4>WEB DESIGNER, DEVELOPER & PROBLEM SOLVER</h4>
                </div>
            </div><! --/row -->
        </div> <!-- /container -->
    </div><! --/headerwrap -->
    
    <section id="works"></section>
    <div class="container">
        <div class="row centered mt mb">
            <h1>My Portfolio</h1>
            
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="work.html"><img src="img/portfolio/folio01.png" class="img-responsive"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="work.html"><img src="img/portfolio/folio02.png" class="img-responsive"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="work.html"><img src="img/portfolio/folio03.png" class="img-responsive"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="work.html"><img src="img/portfolio/folio04.png" class="img-responsive"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="work.html"><img src="img/portfolio/folio05.png" class="img-responsive"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="work.html"><img src="img/portfolio/folio06.png" class="img-responsive"></a>
            </div>
        </div><! --/row -->
    </div><! --/container -->
    
    <div id="social">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-2">
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="https://twitter.com/wmartincruz"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i class="fa fa-tumblr"></i></a>
                </div>
            
            </div><! --/row -->
        </div><! --/container -->
    </div><! --/social -->

    <div id="footerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-4">
                    <p><b>WEB DESIGNER, DEVELOPER & PROBLEM SOLVER</b></p>
                </div>
            
                <div class="col-lg-4">
                    <p>Currently residing in San Antonio, Texas</p>
                </div>
                <div class="col-lg-4">
                    <p>williammartincruz@gmail.com</p>
                </div>
            </div>
        </div>
    </div><! --/footerwrap -->
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>













<!-- old template -->
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>INSTANT - Bootstrap Theme</title> -->

    <!-- Bootstrap core CSS -->
    <!-- <link href="/css/instant-bootstrap.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <!-- <link href="/css/instant-style.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
 -->
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- </head>

  <body> -->

    <!-- Static navbar -->
    <!-- <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">INSTANT</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="#works">Works</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/resume">Resume</a></li>
            
            <li class="dropdown">
            <a id="dLabel" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
                <li><a href="{{{ action('HomeController@logout') }}}">Logout</a></li>
                <li><a href="#">Forgot Username/Password</a></li
            </ul> -->
        <!-- </div>/.nav-collapse  -->
      <!-- </div>
    </div> -->

 
       
        <!-- <div class="container">
            @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
            @endif
            @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
            @endif
        </div>
    </div>


@yield('content')


    <div id="social">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-2">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            
            </div><! /row -->
        <!-- </div><! /container --> 
    <!-- </div><! /social --> 

    <!-- <div id="footerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-4">
                    <p><b>WEB DESIGNER & DEVELOPER</b></p>
                </div> -->
            
                <!-- <div class="col-lg-4">
                    <p>Living in San Antonio, Texas.</p>
                </div>
                <div class="col-lg-4">
                    <p>williammartincruz@gmail.com</p>
                </div>
            </div>
        </div> -->
    <!-- </div><! /footerwrap --> 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <!-- // <script src="/js/instant-bootstrap.min.js"></script> -->
  <!-- </body> -->
<!-- </html> -->
