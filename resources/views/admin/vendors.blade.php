@extends('admin.includes.main')
@push('title')
    <title>Vendors</title>
@endpush

@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <div class="card p-4 mt-4">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="d-flex">
                                <h4>Vendors</h4>

                            </div>
                            <div class="mt-3">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">S No.</th>
                                            <th scope="col">Vendor Name</th>
                                            <th scope="col">Phone No.</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Abhinav Shrestha</td>
                                            <td>+977 9863482258</td>
                                            <td>shrestha@gmail.com</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td><span class="badge text-bg-success">Active</span></td>

                                            <td>
                                                <a href="#" class="btn btn-success btn-sm"><i
                                                        class="fa-solid fa-check"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i
                                                        class="fa-solid fa-xmark"></i></a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Abhinav Shrestha</td>
                                            <td>+977 9863482258</td>
                                            <td>shrestha@gmail.com</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td><span class="badge text-bg-success">Active</span></td>

                                            <td>
                                                <a href="#" class="btn btn-success btn-sm"><i
                                                        class="fa-solid fa-check"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i
                                                        class="fa-solid fa-xmark"></i></a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Abhinav Shrestha</td>
                                            <td>+977 9863482258</td>
                                            <td>shrestha@gmail.com</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td><span class="badge text-bg-danger">Inactive</span></td>

                                            <td>
                                                <a href="#" class="btn btn-success btn-sm"><i
                                                        class="fa-solid fa-check"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i
                                                        class="fa-solid fa-xmark"></i></a>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </main>

@endsection