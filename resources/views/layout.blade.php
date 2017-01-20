<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RV Park">
    <meta name="author" content="Jason Sinn">
    <link rel="shortcut icon" href="../public/css/images/favicon.ico">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <!-- since FA is in css remove this cdn later -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Compiled and minified jQuery -->

    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">

     <!-- Compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

    <link rel="stylesheet" href="{{asset('css/styleMat.css')}}">

</head>

<body>
    
    <!-- Navigation Bar -->

      <div class="navbar-fixed">
       <nav>
        <div class="nav-wrapper">
          <a href="/" class="brand-logo right">Calhoun's Riverside RV Retreat</a>
          <a href="/" data-activates="mobile-demo" class="button-collapse"><i href="/">menu</i></a>
          <ul class="left hide-on-med-and-down">
            <li><a href="rates">Rates</a></li>
            <li><a href="makeReservation">Make a Reservation</a></li>
            <li><a href="contact">Contact Us</a></li>
            <li><a href="admin">Admin</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>
        </div>
       </nav>
     </div>

    <!-- Main content container -->

    <div class="container">
    @yield('content')
    </div>
    <div id="app"></div>
    <script src="{{ asset('js/bundle.js') }}"></script>

    <!-- Need to add the CSS from materialize for sticky footer, currently CSS for bootstrap -->

    <footer class="page-footer">
        <div class="container">
            <div class="row">
              <div class="center-align">
                <a class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-twitter"></i></a>
                <a class="btn-floating btn-large waves-effect waves-dark blue"><i class="fa fa-facebook"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-google"></i></a>
              </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            Copyright &copy; Calhoun's Riverside RV Retreat 2016
            <a class="grey-text text-lighten-4 right" href="admin">Admin</a>
            </div>
        </div>
    </footer>
    
    <script src="{{asset('js/external/jquery/jquery.js')}}"></script>

    <script src="{{asset('js/jquery-ui.min.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>

    <!-- Compiled and minified JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    <!-- React CDN for makeReservation page from makeReservation blade -->
    
    <div>
    @yield('CDN')
    </div>
</body>
</html>