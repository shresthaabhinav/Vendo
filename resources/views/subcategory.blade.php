@extends('layouts.main')

@push('title')
<title>Sub category</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-list"></i> Sub-Category</h1>
</div>

<section class="my-5">
        <div class="container">

            <div class="row theme-product">
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="{{ url('category/electronics/tv/details') }}"><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Mi TV</a></h6>
                            <h5 class="card-title text-center">Rs 24999</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Samsung TV</a></h6>
                            <h5 class="card-title text-center">Rs 49999</h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony TV</a></h6>
                            <h5 class="card-title text-center">Rs 54999</h5>
                        </div>
                    </div>
                </div>
               <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LG TV</a></h6>
                            <h5 class="card-title text-center">Rs 39999</h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

@endsection