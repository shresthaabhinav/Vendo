@extends('vendor.includes.main')
@push('title')
<title>Profile</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                    <form method="POST" action="{{ url('vendor/profile') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   <div class="container p-4">
                    @session('msg')
                        <div class="alert alert-success">{{ session('msg') }}</div>
                    @endsession
                        <div class="card p-4">
                            <div class="row">
                            
                            <div class="col-xl-8 col-md-8">
                                    <h4>Basic Information</h4>

                                    
                                        <div class="row mt-3">

                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Idenfication Number</label>
                                            <input type="text" name="id_number" class="form-control" placeholder="PAN no">
                                            @error('id_number')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Business Name</label>
                                            <input type="text" name="business_name" class="form-control" placeholder="ABC">
                                            @error('business_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="full_name" class="form-control" value="{{ $vendor->full_name }}">
                                            @error('full_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $vendor->email }}">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="tel" name="phone" class="form-control" value="{{ $vendor->phone }}">
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" name="address">{{ $vendor->address }}</textarea>
                                            @error('address')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        
                                        </div>
                                    
                            </div>

                            <div class="col-xl-4 col-md-4 mt-5">
                                <div class="text-center">
                                    <img src="{{asset('dashboard/assets/img/user.png')}}" style="width:155px;">
                                    <div class="mt-3">
                                        <label for="image" class="form-label btn btn-dark">Choose Image</label>
                                        <input type="file" name="image" class="form-control d-none" id="image">
                                    </div>
                                </div>

                            </div>
                            </div>

                            
                        </div>

                        <div class="card p-4 mt-4">
                            <div class="row">
                            
                            <div class="col-xl-12 col-md-12">
                                    <h4>Business Information</h4>

                                    
                                        <div class="row mt-3">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label">Business Type</label>
                                                    <select class="form-select" aria-label="Default select example" name="business_type">
                                                        <option selected>Select Business type</option>
                                                        <option value="1">Sole Proprietor</option>
                                                        <option value="2">Partnership</option>
                                                        <option value="3">Corporation</option>
                                                    </select>
                                                    @error('business_type')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                            </div>
                                            
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">GST No.</label>
                                                <input type="text" name="gst_number" class="form-control" placeholder="123456789">
                                                @error('gst_number')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Business Category</label>
                                                <input type="text" name="business_category" class="form-control" placeholder="Deal in Clothes">
                                                @error('business_category')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            
                                        </div>
                                    
                            </div>

                            </div>

                        </div>

                        <div class="card p-4 mt-4">
                            <div class="row">
                            
                            <div class="col-xl-12 col-md-12">
                                    <h4>Payment Information</h4>

                                        <div class="row mt-3">

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Bank Account No.</label>
                                                <input type="text" name="bank_account_no" class="form-control" placeholder="123456789">
                                                @error('bank_account_no')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Prefer Payment Method</label>
                                                    <select class="form-select" aria-label="Default select example" name="payment_method">
                                                        <option selected>Select Payment Method</option>
                                                        <option value="1">E-sewa</option>
                                                        <option value="2">Khalti</option>
                                                        <option value="3">Cash on Delivery</option>
                                                    </select>
                                                    @error('payment_method')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                            </div>

                                            <div class="col-lg-3">
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </div>
                                            
                                        </div>
                                    
                            </div>

                            </div>

                        </div>
                      
                   </div>
                   </form>
                </main>
            
@endsection
                