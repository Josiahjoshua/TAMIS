@extends('layouts.store_keeper')
@section('storecontent')




<form class="container">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">ASSET REGISTER FORM</h2>


             <!-- Asset Cost, Accumulated Depreciation, Acquisition Date, and Acquisition Type -->
             <div class="row form-group">
                <div class="col-md-6 col-lg-3">
                    <label for="cost">Asset Code</label>
                    <input class="form-control" name="cost" id="cost" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="accdeprc">Asset Description </label>
                    <input class="form-control" name="accdeprc" id="accdeprc" required>
                </div>

                <div class="col-md-6 col-lg-3">
                    <label for="accdeprc">Location </label>
                    <input class="form-control" name="accdeprc" id="accdeprc" required>
                </div>

            </div>


            <!-- Asset Type, Registered Date, Class Code, and Condition -->
            <div class="row form-group">


                <div class="col-md-6 col-lg-3">
                    <label for="regdate">Registered Date</label>
                    <input class="form-control" name="acqdate" id="acqdate" type="date" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="classcode">Acquisition Cost</label>
                    <input class="form-control" name="classcode" id="classcode" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="condition">Condition</label>
                    <input class="form-control" name="condition" id="condition" required>
                </div>
            </div>

            <!-- Asset Cost, Accumulated Depreciation, Acquisition Date, and Acquisition Type -->
            <div class="row form-group">
                <div class="col-md-6 col-lg-3">
                    <label for="cost">Serial Number</label>
                    <input class="form-control" name="cost" id="cost" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="acqdate">Quantity</label>
                    <input class="form-control" name="acqdate" id="acqdate" type="date" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="acqtype">Owner Name</label>
                    <input class="form-control" name="acqtype" id="acqtype" required>
                </div>
            </div>



        </div>

        <div class="card-footer text-center">
            <center> <input class="btn btn-primary" type="submit" value="Submit"></center>
        </div>

    </div>
</form>
@endsection
