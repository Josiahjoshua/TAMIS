@extends('layouts.stock_checker')

@section('stock-checker-content')
    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-custon-rounded-three btn-success" data-toggle="modal"
                                    data-target="#InformationproModalalert"><i class="fa fa-plus"></i>Update profile</button>
                                <div id="InformationproModalalert"
                                    class="modal modal-adminpro-general fullwidth-popup-InformationproModal zoomInUp"
                                    role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="/profilemanagment" method="POST">
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row mb-3 d-flex justify-content-between">
                                                            <label for="inputPassword3"
                                                                class="col-sm-2 col-form-label p-2">Fullname:</label>
                                                            <div class="col-sm-10">
                                                                <input type="" name="text" class="form-control"
                                                                    id="inputPassword3">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3 d-flex justify-content-between">
                                                            <label for="inputPassword3"
                                                                class="col-sm-2 col-form-label p-2">Username:</label>
                                                            <div class="col-sm-10">
                                                                <input type="" name="password" class="form-control"
                                                                    id="inputPassword3">
                                                            </div>
                                                        </div>
                                                        {{-- <div class="row mb-3 d-flex justify-content-between">
                                                            <label for="inputPassword3"
                                                                class="col-sm-2 col-form-label p-2">Password:</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control"
                                                                    id="inputPassword3">
                                                            </div>
                                                        </div> --}}
                                                        <div
                                                            class="row mb-3 d-flex justify-content-between align-items-center">
                                                            <label for="inputPassword3"
                                                                class="col-sm-2 col-form-label p-2">PhoneNo:</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control"
                                                                    id="inputPassword3">
                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>
                                                <div class="modal-footer footer-modal-admin d-flex justify-content-center">
                                                    <a data-dismiss="modal" href="#">Cancel</a>
                                                    <a href="#">Save</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="{{ route('stock_checker.dashboard') }}">Dashboard</a> <span
                                            class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Profile Information</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid row  d-flex align-items-center justify-content-center">

            <div class="col">
                <div class="col-md-6 offset-md-3 bg-white">
                    <div class="image-placeholder bg-white">
                        <!-- Content (optional) -->
                        <div class="image-content">
                            <!-- You can add text or other content here -->
                            <!-- Example text -->
                            <p>No Image</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col">
                <div class="">
                    <div class="mb-3 d-flex aling-items-center p-2">
                        <label for="name" class="form-label">Fullname:</label>
                        <span class=""></span>
                    </div>
                    <div class="mb-3 d-flex aling-items-center p-2">
                        <label for="username" class="form-label">Username:</label>
                        <span class=""></span>
                    </div>
                    <div class="mb-3 d-flex aling-items-center p-2">
                        <label for="phone" class="form-label">Phone No:</label>
                        <span class=""></span>
                    </div>
                </div>
            </div>

        </div>
        <!-- Static Table End -->
    @endsection
