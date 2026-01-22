@extends('layouts.main')
@push('title')
    <title>Home Page</title>
@endpush
@section('content')
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">

        @foreach($banners as $banner)
            <div class="carousel-item active">
                <img src="{{ asset('storage/'.$banner->b_image) }}" class="d-block w-100" alt="{{ $banner->b_alt }}"> 
            </div>
        @endforeach
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Product Section -->
    <section class="my-5">
        <div class="container">

            <div class="d-flex">
                <div class="p-2 flex-grow-1">
                    <h2>Top Deals</h2>
                </div>
                <div><a href="{{ url('category/electronics/tv') }}" class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>

            </div>
            <div class="row theme-product">
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/1.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Converse
                                    Shoes</a></h6>
                            <h5 class="card-title text-center">Rs 2499</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/2.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple
                                    Watch</a></h6>
                            <h5 class="card-title text-center">Rs 9500</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/3.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Nike
                                    Cap</a></h6>
                            <h5 class="card-title text-center">Rs 749</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/4.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden
                                    Chair</a></h6>
                            <h5 class="card-title text-center">Rs 1299</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best of Electronics Section -->

    <section class="my-5">
        <div class="container">

            <div class="d-flex">
                <div class="p-2 flex-grow-1">
                    <h2>Best Electronics</h2>
                </div>
                <div><a href="{{ url('category/electronics/tv') }}" class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>

            </div>
            <div class="row theme-product">
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Samsung
                                    TV</a></h6>
                            <h5 class="card-title text-center">Rs 49999</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/5.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony
                                    Camera</a></h6>
                            <h5 class="card-title text-center">Rs 26499</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/9.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Women
                                    Bag</a></h6>
                            <h5 class="card-title text-center">Rs 1749</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/10.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">School
                                    Bag</a></h6>
                            <h5 class="card-title text-center">Rs 2199</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Categories-->

      <section class="my-5">
        <div class="container">

            <div class="d-flex">
                <div class="p-2 flex-grow-1">
                    <h2>Popular Categories</h2>
                </div>
                <div><a href="{{ url('category/electronics/tv') }}" class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>

            </div>
            <div class="row theme-product">
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/9.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Women Bag</a></h6>
                            <h5 class="card-title text-center">Rs 1749</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/2.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple
                                    Watch</a></h6>
                            <h5 class="card-title text-center">Rs 9500</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/3.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Nike
                                    Cap</a></h6>
                            <h5 class="card-title text-center">Rs 749</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/10.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">School Bag</a></h6>
                            <h5 class="card-title text-center">Rs 2199</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recently Viewed -->

    <section class="my-5">
        <div class="container">

            <div class="d-flex">
                <div class="p-2 flex-grow-1">
                    <h2>Recently Viewed</h2>
                </div>
                <div><a href="{{ url('category/electronics/tv') }}" class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View All</a></div>

            </div>
            <div class="row theme-product">
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/5.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony
                                    Camera</a></h6>
                            <h5 class="card-title text-center">Rs 26499</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/6.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Women
                                    Shoes</a></h6>
                            <h5 class="card-title text-center">Rs 6500</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Samsung
                                    TV</a></h6>
                            <h5 class="card-title text-center">Rs 49999</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/8.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing
                                    Machine</a></h6>
                            <h5 class="card-title text-center">Rs 89999</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
