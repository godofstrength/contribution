<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('styles/pseudo.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">  
    </head>
    <body>
             <!--navbar-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container-fluid">
                <a href="#" class="navbar-brand" >
                    <img src="images/logo.jpg" alt="logo" style="height: 60px; width: 60px;">
                  <span class="headin">A.A MASAGA LTD</span></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#Responsive">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="Responsive">
                <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    @auth
                    <li class="nav-item active">
                        <a href="{{ url('/home') }}">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{route('register')}}" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Services</a>
                    </li>
                    @endif
                    @endauth
                @else    
                @endif
                </ul>
            </div>
            </div>
        </nav>
        <!--image slider-->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
    <div class="carousel-item active img-responsive">
        <img src="images/background1.jpg">
        <div class="carousel-caption">
            <h1 class="display-2">Welcome</h1>
            <h3>Save with us starting with as low as &#8358;10,000</h3>
            <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO HERE</button>
            <button type="button" class="btn btn-primary btn-lg">GET STARTED</button>
        </div>
    </div>
    <!-- <div class="carousel-item img-responsive">
        <img src="richclub/background1.jpg">
    </div>
    <div class="carousel-item img-responsive" >
        <img src="richclub/background4.jpg">
    </div> -->
</div>
    </div>
        <!--jumbotron-->
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <p>
            Need to take your business online?
            We create and host optimizable, fast and user-friendly websites at an affordable rate.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor, natus?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, velit.
        </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 col-xl-2">
            <a href="#"><button class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
        </div>
    </div>
</div>
  <!--welcome section-->
  <div class="container-fluid padding">
      <div class="row welcome text-center">
          <div class="col-12">
              <h1 class="display-4">Built with ease</h1>
          </div>
          <hr>
          <div class="col-12">
              <p class="lead">
                  welcome to my bootstrap site Lorem ipsum dolor sit amet
                   consectetur adipisicing elit. Nobis voluptate explicabo 
                   reprehenderit ratione. Aliquid, quasi molestiae 
                  laboriosam ea ipsa non, laborum sapiente possimus omnis, 
                  suscipit quo repellat quibusdam illo enim.
              </p>
          </div>
      </div>
      <hr class="my-4">
</div>
  <!--three column section-->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fa fa-code"></i>
            <h3>HTML5</h3>
            <P>Built with the latest version of HTML, HTML5</P>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fa fa-bold"></i>
            <h3>BOOTSTRAP</h3>
            <p>Built with the latest version of Bootstrap, Bootstrap4</p>
        </div>
        <div class="col-sm-6 col-md-4">
        <i class="fa fa-css3"></i>
        <h3>CSS</h3>
        <p>Built with the latest version of CSS, CSS3</p>
        </div>
    </div>
      <hr class="my-4">
</div>
<!--two column section-->
<div class="container-fluid padding">
    <div class="row padding">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h2>If you build it....</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste obcaecati 
                assumenda unde, libero reiciendis perferendis
                    totam temporibus corporis dolores. Odit, numquam commodi.
                Voluptas ipsam numquam assumenda dolor libero, officiis nobis!</p><br>
                <a href="#" class="btn btn-primary">learn More</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="images/hdimage.jpg" alt="hdimage" class="img-fluid">
            </div>
                </div>
    <hr class="my-4">
</div>
<hr class="my-4">
<!--two column section-->
<div class="container-fluid padding">
    <div class="row padding">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h2>Our Philosophy</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste obcaecati 
                assumenda unde, libero reiciendis perferendis
                    totam temporibus corporis dolores. Odit, numquam commodi.
                Voluptas ipsam numquam assumenda dolor libero, officiis nobis!</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="images/richclub2.jpg" alt="richclub" class="img-fluid">
            </div>
                </div>
                <hr class="my-4">
</div>

<!--connect-->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <hr class="light">
         <h5>Contact Us</h5>
                <hr class="light">
                <p>+2349028323463</p>
                <p>Hexa-technologies@gmail.com</p>
                <p>Aminu kano cresent</p>
                <p>Abuja, FCT, 9260414</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our hours</h5>
                <hr class="light">
                <p>Monday-friday: 9am-5pm</p>
                <p>Saturday: 10am-4pm</p>
                <p>Sunday: Closed</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Service</h5>
                <hr class="light">
                <p>Abuja, 0000</p>
                <p>Lagos, 0000</p>
                <p>kano, 0000</p>
                <p>Port-Hacourt, 0000</p>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; A.amasaga.com</h5>
            </div>
        </div>

    </div>
</footer>
<script src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
