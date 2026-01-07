@extends('vendor.includes.main')
@push('title')
    <title>Users</title>
@endpush

@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <div class="card p-4 mt-4">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="d-flex">
                                <h4>Users</h4>

                            </div>
                            <div class="mt-3">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">S No.</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Abhinav Shrestha</td>
                                            <td>shrestha@gmail.com</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                            
                                             <td>
                                                <a href="{{ ('order-detail') }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-eye"></i></a>
                                             </td>
                                        </tr>                                        

                                        <tr>
                                            <td>1</td>
                                            <td>Abhinav Shrestha</td>
                                            <td>shrestha@gmail.com</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                            
                                             <td>
                                                <a href="{{ ('order-detail') }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-eye"></i></a>
                                             </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>Abhinav Shrestha</td>
                                            <td>shrestha@gmail.com</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                            
                                             <td>
                                                <a href="{{ ('order-detail') }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-eye"></i></a>
                                             </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>Abhinav Shrestha</td>
                                            <td>shrestha@gmail.com</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                            
                                             <td>
                                                <a href="{{ ('order-detail') }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-eye"></i></a>
                                             </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>Abhinav Shrestha</td>
                                            <td>shrestha@gmail.com</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                            
                                             <td>
                                                <a href="{{ ('order-detail') }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-eye"></i></a>
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