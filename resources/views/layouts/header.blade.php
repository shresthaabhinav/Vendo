<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg theme-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h1><img src="{{ asset('assets/images/logo/logo.png') }}" style="width:250px" class="card-img-top" alt="..."></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <form class="d-flex" role="search">
                    <div class="input-group">
                        <input class="form-control form-control-sm" style="width:350px" type="search" placeholder="Search for Products" aria-label="Search" />
                        <button class="btn btn-light text-secondary btn-sm" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div>
                <a href="{{ url('vendor/signup')}}" target="_blank" class="text-decoration-none text-light">Become a Seller</a>
                <a href="{{ url('cart-list/product') }}" class="btn theme-green-btn btn-sm text-light ms-1 rounded-pill px-3 py-2"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
                <a href="{{ url('login') }}" class="btn theme-orange-btn btn-sm text-light ms-1 rounded-pill px-3 py-2"><i class="fa-solid fa-user"></i>Login</a>
            </div>
        </div>
    </nav>

<!-- Category Nav -->

<nav class="navbar navbar-expand-lg shadow p-3 bg-body-tertiary rounded">
  <div class="container">
    
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <ul class="nav">
        <!-- <li class="nav-item text-dark">
            <a class="nav-link active text-dark" href="{{ url('category/electronics') }}">Mobile</a>
        </li> -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/electronics') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mobile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('category/electronics/tv') }}">Oneplus</a></li>
            <li><a class="dropdown-item" href="#">Iphone</a></li>
            <li><a class="dropdown-item" href="#">Samsung</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/electronics') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fashion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('category/electronics/tv') }}">Shoes</a></li>
            <li><a class="dropdown-item" href="#">Bag</a></li>
            <li><a class="dropdown-item" href="#">Clothes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/electronics') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Electronics
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('category/electronics/tv') }}">TV</a></li>
            <li><a class="dropdown-item" href="#">Washing Machine</a></li>
            <li><a class="dropdown-item" href="#">Watches</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/electronics') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Furniture
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('category/electronics/tv') }}">Bed</a></li>
            <li><a class="dropdown-item" href="#">Sofa</a></li>
            <li><a class="dropdown-item" href="#">Table</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/electronics') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Grocery
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('category/electronics/tv') }}">Flour</a></li>
            <li><a class="dropdown-item" href="#">Oil</a></li>
            <li><a class="dropdown-item" href="#">Surf</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/electronics') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Appliances
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('category/electronics/tv') }}">TV</a></li>
            <li><a class="dropdown-item" href="#">Washing Machine</a></li>
            <li><a class="dropdown-item" href="#">Refrigerator</a></li>
          </ul>
        </li>
            <!-- <a class="nav-link active text-dark" href="{{ url('category/electronics/tv') }}">Appliances</a> -->

      </ul>
    </div>
  </div>
</nav>