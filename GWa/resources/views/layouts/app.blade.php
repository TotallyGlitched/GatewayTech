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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
    #loader-wrapper {
        position: fixed;
        top: 0;
        width: 100vw;
        height: 100vh;
        background: #fff;
        z-index: 1000;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #fff;
    }
    
</style>

</head>
<body onload="preloaderme()">
    <div id="loader-wrapper">
        <img src="/storage/nimbus/preloader.svg" style="height: 40vh" alt="">
    </div>
    <div id="app">
    <!-- navb -->
        <nav class="navbar navbar-expand-lg navbar-light bg-nprimary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="ml-3 navbar-brand" href="/"><img src="/storage/nimbus/logo.jpeg" style="height: 7vh" alt="/"></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-white" style="font-size: 1.1rem; font-family: serif">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Link</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Link</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="active nav-link">Link</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Link</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-white">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><div class="btn btn-outline-light"><i class="fab fa-jedi-order"> Get Quote</i></div></a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link"><div class="btn btn-outline-light"><i class="fab fa-jedi-order"> Get Quote</i></div></a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link"><div class="btn btn-outline-light"><i class="fab fa-jedi-order"> Get Quote</i></div></a>
                    </li>
                </ul>
            </div>
        </nav>
            
            
            <!-- <div class="preloader" id="loader">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="640" height="640"><defs><path d="M640 371.03c-16.08-6.18-154.02 53.61-154.02 53.61-115.46 28.87-140.21 10.31-156.7 8.25-11-1.38-23.03-11.34-36.08-29.9v-88.66l23.71 11.34 9.28-32.99-45.37-39.17v-47.43h-32.98l-4.13 23.71-41.24-28.86L76.7 292.68l15.46 32.99 22.69-11.34c.68 47.42.68 76.98 0 88.66-.69 11.68-9.63 17.53-26.81 17.53L4.54 399.9" id="a"/></defs><use xlink:href="#a" fill="#55facd" fill-opacity="0"/><use xlink:href="#a" fill-opacity="0" stroke="#fff" stroke-width="12"/></svg>
            </div> -->
        
        
        <main style="min-height: 90vh;">
            @yield('content')
        </main>
        <!-- footer -->



    </div>

    <footer class="bg-nprimary container-fluid">
        <h5 class="pt-4 text-center"><img src="/storage/nimbus/logo.jpeg" style="height:5vh" alt="/"><spna class="pl-3 georgia text-white">NIMBUS TECH</spna></h5>
        <div class="row mx-auto w-75">
            <div class="col-md-4 col-sm-12">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/" class="nav-link">Product</a></li>
                    <li class="nav-item"><a href="/" class="nav-link">Features</a></li>
                    <li class="nav-item"><a href="/" class="nav-link">Team</a></li>
                    <li class="nav-item"><a href="/" class="nav-link">Configurator</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/" class="nav-link">Product</a></li>
                    <li class="nav-item"><a href="/" class="nav-link">Features</a></li>
                    <li class="nav-item"><a href="/" class="nav-link">Team</a></li>
                    <li class="nav-item"><a href="/" class="nav-link">Configurator</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 text-white">
                <form action="">
                    <input type="email" style="background-color: rgba(255, 255, 255, 0.8););" class="mt-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email ID">
                    <textarea class="mt-2  form-control" style="background-color: rgba(255, 255, 255, 0.8););" id="exampleFormControlTextarea1" placeholder="Talk to us..." rows="2"></textarea>
                    <button type="submit" class="mt-2  btn btn-outline-light btn-block">Contact US</button>
                </form>
            </div>
            <ul class="nav mx-auto mt-4">
                <li class="nav-item"><a href="/" class="nav-link"><i class="fab hov-norange fa-facebook fa-lg"></i></a></li>
                <li class="nav-item"><a href="/" class="nav-link"><i class="fab hov-norange fa-twitter fa-lg"></i></a></li>
                <li class="nav-item"><a href="/" class="nav-link"><i class="fab hov-norange fa-github fa-lg"></i></a></li>
                <li class="nav-item"><a href="/" class="nav-link"><i class="fab hov-norange fa-instagram fa-lg"></i></a></li>
            </ul>   
        </div>
    </footer>

    <script>
        function preloaderme(){
            document.getElementById('loader-wrapper').style.display = 'none';
        }
    </script>
    </body>
</html>
