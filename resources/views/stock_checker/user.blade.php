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
                                            <form action="">
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="sparkline9-list shadow-reset">
                                                                <div class="sparkline9-hd">
                                                                    <div class="main-sparkline9-hd">
                                                                        <h1>User Information Encoding <span
                                                                                class="basic-ds-n">Form</span></h1>

                                                                    </div>
                                                                </div>
                                                                <div class="sparkline9-graph">
                                                                    <div class="basic-login-form-ad">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="basic-login-inner">
                                                                                    <h3>Update Info : </h3>
                                                                        {{-- form for profile upation ////////////////////////////////////////  --}}
                                                                                    <form action="/profile-info" method="post">
                                                                                        @csrf
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label class="login2">Profile imge: </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="file" name="profile-img"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter Employee Full Name" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label class="login2">Full
                                                                                                        Name : </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="text" name="profile-name"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter Employee Full Name" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label
                                                                                                        class="login2">Username
                                                                                                        : </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter Username" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label class="login2">New password: </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="password"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter New password" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label
                                                                                                        class="login2">Address :
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter Address" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label
                                                                                                        class="login2">Contact :
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="number"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter Contact Number" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                    {{-- end //////////////////////////////////////////  --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Currently User Profile Info</h1>
                            </div>
                        </div>
                        {{-- profile infomation space  --}}
                        <div class="d-flex justify-content-around">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
    @endsection
