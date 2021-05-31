@extends('layouts.app')
@section('content')


<nav class="navbar navbar-dark navbar-expand-sm bg-darkblue" style="border-top: 0.5px solid #0d3d34;" id="myNavbar20">
    <div class="collapse navbar-collapse" id="mainNav20">
      <form action="" class="w-50">
          <div class="input-group">
              <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
              <button type="submit" class="btn btn-green rounded-0"><i class="fas fa-search"></i></button>
          </div>
      </form>
    </div>
</nav>

<div class="container-fluid p-4">
  <div class="row my-2" style="position: relative;">
    <div class="col-lg-2 col-md-3 col-sm-12">
      <div id="accordion" style="position: sticky; top: 1rem;">
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading1">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                Price Range
              </button>
            </h5>
          </div>
          <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading2">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                Property Type
              </button>
            </h5>
          </div>
          <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading3">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                Land (acres)
              </button>
            </h5>
          </div>
          <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading4">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                Amenities
              </button>
            </h5>
          </div>
          <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading5">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                Location
              </button>
            </h5>
          </div>
          <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading6">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                Possession Date
              </button>
            </h5>
          </div>
          <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading7">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                Furnishings
              </button>
            </h5>
          </div>
          <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading8">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                Building Age
              </button>
            </h5>
          </div>
          <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading9">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse9">
                Facing
              </button>
            </h5>
          </div>
          <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading10">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse10">
                Property Area
              </button>
            </h5>
          </div>
          <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading11">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                Listed By
              </button>
            </h5>
          </div>
          <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
        <div class="card" style="background-color: white;">
          <div class="card-header" id="heading12">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed m-0 p-0 acc-link" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                Price
              </button>
            </h5>
          </div>
          <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, earum!
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-10 col-md-9 col-sm-12">
      <div class="row text-center">
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row mt-5 text-center">
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row mt-5 text-center">
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 mt-1">
          <a href="/" class="search-a">
            <div class="card outl hov-shadow shadow rounded-0" style="position: relative;">
              <img src="/storage/RealEst/bghero.jpg" alt="" class="card-img-top">
              <div>
                <p class="pt-2"><span class="georgia" style="font-weight: bold;"> Apoorva Apartments</span>
                <br>Thanjavur
                <br>&#8377; 45K to 55K</br></p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection