@extends('admin.includes.main')
@push('title')
<title>Edit Category</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card p-4 mt-4">
                            <div class="row">
                            
                            <div class="col-xl-8 col-md-8">
                                    <h4>Edit Category</h4>

                                    
                                        <div class="row mt-3">
                                        <form method="POST" action="{{ url('admin/edit-category',$category->c_id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-lg-12 mb-3">
                                            <label class="form-label">Category Name</label>
                                            <input type="text" name="c_name" class="form-control" value="{{ $category->c_name }}">
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                            <label class="form-label">Commission (%)</label>
                                            <input type="text" name="c_commission" class="form-control" value="{{ $category->c_commission }}">
                                            </div>

                                            <div class="col-lg-3">
                                            <button class="btn btn-primary" type="submit">Edit Category</button>
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
                