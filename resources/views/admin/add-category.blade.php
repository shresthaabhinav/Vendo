@extends('admin.includes.main')
@push('title')
<title>Add Category</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card p-4 mt-4">
                            <div class="row">
                            
                            <div class="col-xl-8 col-md-8">

                            @session('msg')
                                <div class="alert alert-success">{{ session('msg') }}</div>
                            @endsession
                                    <h4>Add Category</h4>

                                    
                                        <div class="row mt-3">
                                            <form method="POST" action="{{ url('admin/add-category') }}">
                                                @csrf
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Category Name</label>
                                            <input type="text" name="c_name" class="form-control" placeholder="Electronics">

                                            @error('c_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Commission (%)</label>
                                            <input type="text" name="c_commission" class="form-control" placeholder="20">

                                            @error('c_commission')
                                                    <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-3">
                                            <button class="btn btn-primary" type="submit">Add Category</button>
                                        </div>
                                            </form>
                                        </div>
                                    
                            </div>

                            <!-- <div class="col-xl-4 col-md-4 mt-5">
                                <div class="text-center">
                                    <img src="{{asset('dashboard/assets/img/user.png')}}" style="width:155px;"
                                    class="rounded-circle">
                                    <div class="mt-3">
                                        <label for="image" class="form-label btn btn-dark">Choose Image</label>
                                        <input type="file" class="form-control d-none" id="image">
                                    </div>
                                </div>

                            </div> -->
                            </div>

                            
                        </div>
                    </div>
                </main>

@endsection
                