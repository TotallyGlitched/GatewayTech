<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  
<div id="app">

<!-- 
<div class="loader" id="loader" style="background-color:#134d42">
</div> -->


<nav class="navbar navbar-expand-lg bg-darkblue" id="myNavbar">
<button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
  <i class="fas fa-bars"></i>
</button>

<a href="/" class="navbar-brand activee">RealEst</a>
<div class="collapse navbar-collapse" id="mainNav">
 <ul class="navbar-nav ml-auto nav-fill">
  <li class="nav-item px-4 dropdown">
   <a class="nav-link dropdown-toggle" href="/" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buy</a>
   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
    <a class="dropdown-item" href="/">What we can help you with?</a>
    <div class="dropdown-divider"></div>
    <div class="d-md-flex align-items-start justify-content-start">
     <div>   
      <div class="dropdown-header">Know your neighborhood</div>
      <a class="dropdown-item" href="/">Explore</a>
      <a class="dropdown-item" href="/">3D</a>
      <a class="dropdown-item" href="/">Browse</a>
     </div>
     <div>
      <div class="dropdown-header">Insights</div>
      <a class="dropdown-item" href="/">Popular neighborhoods</a>
      <a class="dropdown-item" href="/">Property Estimation</a>
      <a class="dropdown-item" href="/">Market observations</a>
     </div>
     <div>
      <div class="dropdown-header">Easy Real Estate</div>
      <a class="dropdown-item" href="/">Buy</a>
      <a class="dropdown-item" href="/">Sell</a>
      <a class="dropdown-item" href="/">Rent</a>
      <a class="dropdown-item" href="/">Mortgage</a>
      <a class="dropdown-item" href="/">Renew</a>
      <a class="dropdown-item" href="/">Compare</a>
     </div>
    </div>
   </div>
  </li>
        
  <li class="nav-item px-4 dropdown">
        <a class="nav-link dropdown-toggle" href="/" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rent</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
         <a class="dropdown-item" href="/">What we can help you with?</a>
         <div class="dropdown-divider"></div>
         <div class="d-md-flex align-items-start justify-content-start">
          <div>   
           <div class="dropdown-header">Know your neighborhood</div>
           <a class="dropdown-item" href="/">Explore</a>
           <a class="dropdown-item" href="/">3D</a>
           <a class="dropdown-item" href="/">Browse</a>
          </div>
          <div>
           <div class="dropdown-header">Insights</div>
           <a class="dropdown-item" href="/">Popular neighborhoods</a>
           <a class="dropdown-item" href="/">Property Estimation</a>
           <a class="dropdown-item" href="/">Market observations</a>
          </div>
          <div>
           <div class="dropdown-header">Easy Real Estate</div>
           <a class="dropdown-item" href="/">Buy</a>
           <a class="dropdown-item" href="/">Sell</a>
           <a class="dropdown-item" href="/">Rent</a>
           <a class="dropdown-item" href="/">Renew</a>
           <a class="dropdown-item" href="/">Mortgage</a>
           <a class="dropdown-item" href="/">Compare</a>
          </div>
         </div>
        </div>
       </li>
             
  <li class="nav-item px-4 dropdown">
    <a class="nav-link dropdown-toggle" href="/" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sell</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
     <a class="dropdown-item" href="/">What we can help you with?</a>
     <div class="dropdown-divider"></div>
     <div class="d-md-flex align-items-start justify-content-start">
      <div>   
       <div class="dropdown-header">Know your neighborhood</div>
       <a class="dropdown-item" href="/">Explore</a>
       <a class="dropdown-item" href="/">3D</a>
       <a class="dropdown-item" href="/">Browse</a>
      </div>
      <div>
       <div class="dropdown-header">Insights</div>
       <a class="dropdown-item" href="/">Popular neighborhoods</a>
       <a class="dropdown-item" href="/">Property Estimation</a>
       <a class="dropdown-item" href="/">Market observations</a>
      </div>
      <div>
       <div class="dropdown-header">Easy Real Estate</div>
       <a class="dropdown-item" href="/">Buy</a>
       <a class="dropdown-item" href="/">Sell</a>
       <a class="dropdown-item" href="/">Rent</a>
       <a class="dropdown-item" href="/">Renew</a>
       <a class="dropdown-item" href="/">Mortgage</a>
       <a class="dropdown-item" href="/">Compare</a>
      </div>
     </div>
    </div>
   </li>
   @guest 
   <li>
    <div class="btn btn-outline-success">Log In</div>
   </li>
   @endguest
   @auth
   <li class="nav-item px-4 dropdown">
    <a class="nav-link dropdown-toggle" href="/" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie p-1" style="color:black; background-color: white; border-radius: 50%;"></i></a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
     <div class="d-md-flex align-items-center justify-content-center">
      <div>   
       <img src="storage/RealEst/placeholder-image.png" style="height: 25vh" alt="">
       <h4 class="georgia m-3 text-center">Praveen Raj</h4>
       <a class="dropdown-item" href="/">Saved Houses</a>
       <a class="dropdown-item" href="/">Profile</a>
       <a class="dropdown-item" href="/">Recently Viewed</a>
       <a class="dropdown-item" href="/">Contacted Properties</a>
       <a class="dropdown-item" href="/">Location Specific</a>
      </div>
     <div>
    </div>
   </li>
   @endauth
  </ul>
</div>
</nav>

        <main class="">
            @yield('content')
        </main>
    <!-- footer -->

    <footer class="footer font-small mt-5 bg-darkblue text-white">
    <div class="container text-center text-md-left p-4">
      <div class="row">
        <div class="col-md-3 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: #cb9700;">About Us</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Visit Us</a></li>
            <li><a href="#!">About Us</a></li>
            <li><a href="#!">Our Products</a></li>
            <li><a href="#!">Portfolio</a></li>
          </ul>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-3 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: #cb9700;">Hot Markets</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Chennai</a></li>
            <li><a href="#!">Thanjavur</a></li>
            <li><a href="#!">Trichy</a></li>
            <li><a href="#!">Coimbatore</a></li>
          </ul>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-3 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: #cb9700;">Advice</h5>
          <ul class="list-unstyled">
            <li><a href="#!">On Buying</a></li>
            <li><a href="#!">On Selling</a></li>
            <li><a href="#!">On Mortgages</a></li>
            <li><a href="#!">On Estimation</a></li>
          </ul>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-3 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: #cb9700;">Contact Links</h5>
          <ul class="list-unstyled">
            <li><a href="#!"><i class="fab fa-instagram-square"> Instagram</i></a></li>
            <li><a href="#!"><i class="fab fa-facebook-f"> Facebook</i></a></li>
            <li><a href="#!"><i class="fab fa-twitter"> Twitter</i></a></li>
            <li><a href="#!"><i class="fab fa-linkedin-in"> Linked In</i></a></li>
          </ul>
        </div>  
      </div>  
    </div>
    <div class="footer-copyright text-center py-3">© Copyright:
      <a href="https://gatewaytech.in/"> GatewayTech</a>
    </div>  
  </footer>

</div>
<!-- <script>
  document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("#loader").style.visibility = "visible";
    } else {
        document.querySelector("#loader").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
    }
};
</script> -->
<!-- <script src="js/lazy-line-painter-1.9.6.min.js"></script>

        <script type="text/javascript">

          (function(){ 

            document.onreadystatechange = () => {

              if (document.readyState === 'complete') {
                        
                /**
                 * Setup your Lazy Line element.
                 * see README file for more settings
                 */

                let el = document.querySelector('#untitled');
                let myAnimation = new LazyLinePainter(el, {"ease":"easeLinear","strokeWidth":11.4,"strokeOpacity":1,"strokeColor":"#222F3D","strokeCap":"square"}); 
                myAnimation.paint(); 
              }
            }

          })();

  document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("#loader").style.visibility = "visible";
        let el = document.querySelector('#untitled');
                let myAnimation = new LazyLinePainter(el, {"ease":"easeLinear","strokeWidth":11.4,"strokeOpacity":1,"strokeColor":"#222F3D","strokeCap":"square"}); 
                myAnimation.paint(); 
    } else {
        document.querySelector("#loader").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
    }
};
</script> -->
    </body>
</html>
