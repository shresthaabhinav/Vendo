@extends('layouts.main')

@push('title')
<title>Category Page</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-layer-group"></i> Category</h1>
</div>

<!-- Product Section-->

<section class="my-5">
        <div class="container">

            <div class="row theme-product">
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="{{ url('category/electronics/tv') }}"><img src="{{ asset('assets/images/products/1.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Converse
                                    Shoes</a></h6>
                            <h5 class="card-title text-center">Rs 2499</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/5.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony
                                    Camera</a></h6>
                            <h5 class="card-title text-center">Rs 24999</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/9.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing
                                    Machine</a></h6>
                            <h5 class="card-title text-center">Rs 1749</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
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

@endsection()