@extends('layouts.user_department')

@section('usercontent')
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Asset information</a> <span class="bread-slash"></span>
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
            <!-- Breadcome start-->



            <div class="breadcome-area des-none mg-b-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Assign Asset</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Assign Asset</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                   <div class="data-table-area mg-b-20">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Asset Assignment to Employee  <span class="table-project-n"></span> Form Table</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <form action="{{route('assign_assetReceive')}}" method="POST">
                                                @csrf

                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                    <div class="col-lg-12">
                            <div class="sparkline9-list shadow-reset">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <h1>Asset Assignment to Employee <span class="basic-ds-n">Form</span></h1>
                                    </div>
                                </div>
                                <div class="sparkline9-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label class="login2">Asset no : </label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <input type="text" name="asset_no" class="form-control" placeholder="Enter Asset " style="width: 121%" />
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label class="login2">Serial no : </label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <input type="text" name="serial_no" class="form-control" placeholder="Enter Serial no " style="width: 121%" />
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Asset category : </label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label for="asset type"name='asset_type'></label>
                                                                    <select class="form-control">

                                                                        @foreach ($data as $assettype)
                                                                            <option value="{{$assettype->id}}">{{$assettype->assettype_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Condition : </label>
                                                                   
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <select class="form-control">Select Condition
                                                                        @foreach ($condi as $ctn )
                                                                        <option value="{{$ctn->id}}">{{$ctn->condition_name}}</option>

                                                                    @endforeach


                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Date Assigned : </label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="date" class="form-control" placeholder="Enter Date" style="width: 121%" />

                                                                        <input type="number" name="date_assigned" class="form-control" placeholder="Remarks" style="margin-left: 130%; margin-top: -28%; width: 95%">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Employee : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" name="employee" class="form-control" placeholder="Enter Employee name" style="width: 100%" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Mobile Number : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile number" style="width: 100%" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">From : </label>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                <select class="form-control">Building

                                                                </select>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <select class="form-control">Floor

                                                                    </select>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <select class="form-control">Room
                                                        <option value="">Room 1</option>
                                                        <option value="all">Room 2</option>
                                                        <option value="selected">Room 3</option>
                                                                        </select>
                                                                        </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">To : </label>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                <select class="form-control" >
                                                <option value="">Building</option>
                                                <option value="all">Building 1</option>
                                                <option value="selected">Building 2</option>
                                                                </select>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <select class="form-control">
                                                    <option value="">Floor</option>
                                                    <option value="all">Floor 1</option>
                                                    <option value="selected">Floor 2</option>
                                                                    </select>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <select class="form-control">
                                                        <option value="">Room</option>
                                                        <option value="all">Room 1</option>
                                                        <option value="selected">Room 2</option>
                                                                        </select>
                                                                        </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                             <div class="modal-footer footer-modal-admin">
                                <a href="{{url('TransferHistory')}}"> <button type="button" class="btn btn-outline">Cancel</button></a>
                                <button type="submit" class="btn btn-primary">Done</button></a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>


    <!-- Chat Box Start-->
    <!-- Chat Box End-->
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/modal-active.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>


</body>

</html>

@endsection
