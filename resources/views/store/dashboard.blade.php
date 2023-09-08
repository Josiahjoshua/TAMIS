@extends('layouts.store_keeper')

@section('storecontent')
<div class="income-order-visit-user-area" style="margin-top:30px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Total</h2>
                            <div class="main-income-phara">
                                <p>Employee</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter">1,310</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total Employee</p>
                            <span class="income-percentange">98% <i class="fa fa-users"></i></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Total</h2>
                            <div class="main-income-phara order-cl">
                                <p>Department</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter">20</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline6"></span>
                            </div>
                        </div>
                        <div class="income-range order-cl">
                            <p>Total Department</p>
                            <span class="income-percentange">26% <i class="fa fa-institution"></i></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Total</h2>
                            <div class="main-income-phara visitor-cl">
                                <p> Branches</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter">30</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline2"></span>
                            </div>
                        </div>
                        <div class="income-range visitor-cl">
                            <p>Total Branches</p>
                            <span class="income-percentange">55% <i class="fa fa-home"></i></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Total</h2>
                            <div class="main-income-phara low-value-cl">
                                <p>Assets</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter">8,200</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline5"></span>
                            </div>
                        </div>
                        <div class="income-range low-value-cl">
                            <p>Total Assets</p>
                            <span class="income-percentange">89% <i class="fa fa-file-archive-o"></i></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
