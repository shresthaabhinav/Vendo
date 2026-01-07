@extends('user.layouts.main')
@push('title')
<title>Settings</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                   <div class="container p-4">
                        <div class="card p-4">
                            <div class="row">
                            
                            <div class="col-xl-8 col-md-8">
                                    <h4>Account Setting</h4>

                                    
                                        <div class="row mt-3">
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="Abhinav">
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Shrestha">
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="shrestha@gmail.com">
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" placeholder="+977 ">
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-primary ">Save Changes</button>
                                        </div>
                                        </div>
                                    
                            </div>

                            <div class="col-xl-4 col-md-4 mt-5">
                                <div class="text-center">
                                    <img src="{{asset('dashboard/assets/img/user.png')}}" style="width:155px;">
                                    <div class="mt-3">
                                        <label for="image" class="form-label btn btn-dark">Choose Image</label>
                                        <input type="file" class="form-control d-none" id="image">
                                    </div>
                                </div>

                            </div>
                            </div>

                            
                        </div>

                        <div class="card p-4 mt-4">
                            <div class="row">
                            
                            <div class="col-xl-12 col-md-12">
                                    <h4>Billing Address</h4>

                                    
                                        <div class="row mt-3">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label">Country</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select your Country</option>
                                                        <option value="1">Nepal</option>
                                                        <option value="2">USA</option>
                                                        <option value="3">China</option>
                                                    </select>
                                            </div>
                                            
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="Abhinav">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Shrestha">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="shrestha@gmail.com">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" placeholder="+977 ">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Pin Code</label>
                                                <input type="text" class="form-control" placeholder="141001">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Landmark</label>
                                                <input type="text" class="form-control" placeholder="Dallu">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">City</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select your City</option>
                                                        <option value="1">Kathmandu</option>
                                                        <option value="2">Pokhara</option>
                                                        <option value="3">Jhapa</option>
                                                    </select>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">State</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select your State</option>
                                                        <option value="1">Bagmati</option>
                                                        <option value="2">Madhesh</option>
                                                        <option value="3">Gandaki</option>
                                                    </select>
                                            </div>
                                            <div class="col-lg-3">
                                                <button class="btn btn-primary ">Save Changes</button>
                                            </div>
                                        </div>
                                    
                            </div>

                            
                            </div>

                            
                        </div>
                      
                   </div>
                </main>
            
                

@endsection
                