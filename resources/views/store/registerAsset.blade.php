@extends('layouts.store_keeper')
@section('storecontent')






<form  >
    @csrf
	<div class="card-body" style="margin-top: 30px; margin-left:20px" >

		<h2></h2>
		<div class="row form-group">
			<div class="col-lg-1"><label for="assetno">Asset Number.</label></div>
			<div class="col-lg-4"><input class="form-control" type="text" name="assetno" id="assetno" required></div>
			<div class="col-lg-1"><label for="assetnodesc">Asset Description</label></div>
			<div class="col-lg-4"><input class="form-control" name="assetnodesc" id="assetnodesc" required></div>
		</div>
		<div class="row form-group">
			<div class="col-lg-1"><label for="asstype">Asset Type</label></div>
			<div class="col-lg-4">
				<select class="form-control" name="asstype" id="asstype" required>
					<option value="" selected disabled>Select an Asset Type</option>
					<option value="type1">BIOLOGICAL</option>
					<option value="type2">BOOK</option>
					<option value="type3">BUILDINGS</option>
					<option value="type4">FURNITURE</option>
					<option value="type5">INFRASTRUCTURE</option>
					<option value="type6">INTANGIBLE</option>
					<option value="type7">LAND</option>
					<option value="type8">MPM</option>
				</select>
			</div>
			<div class="col-lg-1"><label for="regdate">Registered date</label></div>
			<div class="col-lg-4"><input class="form-control" type="date" name="regdate" id="regdate" required></div>
		</div>
		<div class="row form-group">
			<div class="col-lg-1"><label for="classcode">Serial Number</label></div>
			<div class="col-lg-4"><input class="form-control" name="classcode" id="classcode" required></div>
			<div class="col-lg-1"><label for="condition">Condition</label></div>
			<div class="col-lg-4"><input class="form-control" name="condition" id="condition" required></div>
		</div>

		<div class="row form-group">
			<div class="col-lg-1"><label for="cost">Cost</label></div>
			<div class="col-lg-4"><input class="form-control" name="cost" id="cost" required></div>
			<div class="col-lg-1"><label for="accdeprc">Accumulated depreciation</label></div>
			<div class="col-lg-4"><input class="form-control" name="accdeprc" id="accdeprc" required></div>
		</div>
		<div class="row form-group">
			<div class="col-lg-1"><label for="acqdate">Acquisition Date</label></div>
			<div class="col-lg-4"><input class="form-control" name="acqdate" id="acqdate" type="date" required></div>
			<div class="col-lg-1"><label for="acqtype">Acquisition Type</label></div>
			<div class="col-lg-4"><input class="form-control" name="acqtype" id="acqtype" required></div>
		</div>
		<div class="row form-group">
			<div class="col-lg-1"><label for="gfscode">GFS Code</label></div>
			<div class="col-lg-4"><input class="form-control" name="gfscode" id="gfscode" required></div>
			<div class="col-lg-1"><label for="gfsdesc">GFS Description</label></div>
			<div class="col-lg-4"><input class="form-control" name="gfsdesc" id="gfsdesc" required></div>
		</div>

		<div class="row form-group">
			<div class="col-lg-1"><label for="remarks">Remarks</label></div>
			<div class="col-lg-4"><input class="form-control" name="remarks" id="remarks" required></div>
		</div>

	<!-- /.card-body -->

	<div class="card-footer">
		<div class="text-left"><input class="btn btn-primary" type="submit" value="Submit"></div>

	</div>
  </form>
@endsection
