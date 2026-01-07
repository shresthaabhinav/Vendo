@extends('layouts.main')

@push('title')
    <title>Checkout Page</title>
@endpush

@section('content')
    <div class="container-fluid bg-light p-5">
        <h1 class="text-center text-secondary"><i class="fa-solid fa-layer-group"></i> Checkout </h1>
    </div>

    <!--Billing Information-->

    <section>
        <div class="container my-5">
            <h2>Billing Details</h2>
            <div class="row">
                <div class="col-lg-12">
                    <form>

                        <div class="row my-3">
                            <div class="col-lg-12 mb-3">

                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>Select Your Country</option>
                                    <option value="1">Nepal</option>
                                    <option value="2">China</option>
                                    <option value="3">India</option>
                                    <option value="3">USA</option>
                                    <option value="3">Canada</option>
                                </select>

                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>


                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control" placeholder="Your Phone">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control" placeholder="Pin Code">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control" placeholder="Landmark">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>Select Your city</option>
                                    <option value="1">Kathmandu</option>
                                    <option value="2">Pokhara</option>
                                    <option value="3">Butwal</option>
                                    <option value="3">Jhapa</option>
                                    <option value="3">Dhangadhi</option>
                                </select>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>Select Your state</option>
                                    <option value="1">Mechi</option>
                                    <option value="2">Madhesh</option>
                                    <option value="3">Bagmati</option>
                                    <option value="3">Gandaki</option>
                                    <option value="3">Lumbini</option>
                                </select>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <textarea class="form-control form-control-lg" placeholder="Your Address" place
                                    rows="4"></textarea>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Your Order -->
    <section>
        <div class="container">
            <h3>Your Orders</h3>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <h5>Product</h5>
                                </th>
                                <th scope="col">
                                    <h5>Price</h5>
                                </th>
                                <th scope="col">
                                    <h5>Quantity</h5>
                                </th>
                                <th scope="col">
                                    <h5>Sub Total</h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('assets/images/products/5.jpg') }}" style="width:70px"
                                                class="rounded-3">
                                        </div>
                                        <div class="p-3">
                                            <h6>Camera</h6>
                                        </div>
                                    </div>
                                </th>
                                <td>Rs 24999</td>
                                <td>01</td>
                                <td>Rs 24999</td>
                            </tr>

                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('assets/images/products/9.jpg') }}" style="width:70px"
                                                class="rounded-3">
                                        </div>
                                        <div class="p-3">
                                            <h6>Handbag</h6>
                                        </div>
                                    </div>
                                </th>
                                <td>Rs 1749</td>
                                <td>01</td>
                                <td>Rs 1749</td>
                            </tr>

                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('assets/images/products/2.jpg') }}" style="width:70px"
                                                class="rounded-3">
                                        </div>
                                        <div class="p-3">
                                            <h6>Watch</h6>
                                        </div>
                                    </div>
                                </th>
                                <td>Rs 9500</td>
                                <td>01</td>
                                <td>Rs 9500</td>
                            </tr>

                            <tr>
                                
                                <th colspan="3"><h4>Total</h4></th>
                                <th><h4>Rs 38148</h4></th>
                            </tr>

                        </tbody>
                    </table>
                </div>

                
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1"
                            checked>
                        <label class="form-check-label" for="radioDefault1">
                            <h4>Esewa</h4>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2">
                        <label class="form-check-label" for="radioDefault2">
                            <h5>Khalti</h5>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2">
                        <label class="form-check-label" for="radioDefault2">
                            <h5>Cash on Delivery</h5>
                        </label>
                    </div>

                    <div>
                        <a class="btn theme-orange-btn text-light rounded-pill my-4 px-3 py-2">Place Order <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection()